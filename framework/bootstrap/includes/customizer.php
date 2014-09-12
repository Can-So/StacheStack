<?php

/**
 * Build the array of fields
 */
function stachestack_customizer_fields() {

	$settings = array(
		'colors_section' => array(
			'slug'   => 'general',
			'title'  => __( 'General', 'stachestack' ),
			'fields' => array(
				'body_bg' => array(
					'label' => __( 'Background', 'stachestack' ),
					'type'  => 'background',
					'style' => 'body, .wrap.main-section .content .bg, .form-control, .btn, .panel',
					'priority' => 1,
				),
				'color_brand_primary' => array(
					'label' => __( 'Accent', 'stachestack' ),
					'type'  => 'color',
					'style' => 'a',
					'priority' => 3,
				),
				'navbar_bg' => array(
					'label' => __( 'NavBar', 'stachestack' ),
					'type'  => 'color',
					'style' => '',
					'priority' => 4,
				),
				// 'font_base' => array(
				// 	'label'    => __( 'Base Font', 'stachestack' ),
				// 	'type'     => 'font',
				// 	'style'    => '',
				// 	'priority' => 5,
				// ),
			),
		),
	);

	return $settings;
}

/*
 * Creates the section, settings and the controls for the customizer
 */
function stachestack_customizer( $wp_customize ) {
	global $ss_settings;

	$sections = stachestack_customizer_fields();

	foreach ( $sections as $section ) {

		// Add sections
		$wp_customize->add_section(
			$section['slug'],
			array( 'title' => $section['title'] )
		);

		// Get fields
		$fields = $section['fields'];
		foreach ( $fields as $field => $args ) {

			if ( 'background' == $args['type'] || 'color' == $args['type'] ) {
				if ( 'background' == $args['type'] ) { // Background-color setting

					// Add settings
					$wp_customize->add_setting( $field,
						array(
							'default'    => $ss_settings[$field]['background-color'],
							'type'       => 'theme_mod',
							'capability' => 'edit_theme_options'
						)
					);

				} elseif ( 'color' == $args['type'] ) { // Color setting

					// Add settings
					$wp_customize->add_setting( $field,
						array(
							'default'    => $ss_settings[$field],
							'type'       => 'theme_mod',
							'capability' => 'edit_theme_options'
						)
					);

				}

				// Add control
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $field, array(
					'label'    => $args['label'],
					'section'  => $section['slug'],
					'settings' => $field,
					'priority' => isset( $args['priority'] ) ? $args['priority'] : null,
				) ) );

			}	elseif ( 'font' == $args['type'] ) {

					// Add setting
					$wp_customize->add_setting( $field,
						array(
							'default'    => $ss_settings[$field],
							'type'       => 'theme_mod',
							'capability' => 'edit_theme_options'
						)
					);

					// Add control
					$wp_customize->add_control( new StacheStack_Google_WebFont_Control( $wp_customize, $field, array(
				    'label'       => $args['label'],
				    'section'     => $section['slug'],
				    'settings'    => $field,
				    'priority'    => isset( $args['priority'] ) ? $args['priority'] : null,
				  ) ) );
			}
		}
	}
}
add_action( 'customize_register', 'stachestack_customizer' );

/*
 * Applies the customizer styles to the preview screen.
 */
function stachestack_background_css() {
	$sections = stachestack_customizer_fields();

	echo '<style>';

	foreach ( $sections as $section ) {

		$fields = $section['fields'];

		foreach ( $fields as $field => $args ) {

			$value = get_theme_mod( $field );

			if ( 'background' == $args['type'] ) {

				// Generic style for all "background" settings
				if ( isset( $args['style'] ) && ! empty( $args['style'] ) ) {
					echo $args['style'] . ' {
						background: ' . $value . ';
					}';
				}

				// Additional styles for the content background setting
				if ( 'body_bg' == $field ) {
					$bg_brightness = StacheStack_Color::get_brightness( $value );
					// Set an "accent" color depending on the background's brightness
					if ( $bg_brightness > 120 ) {
						$accent = StacheStack_Color::adjust_brightness( $value, -20 );
						$border = StacheStack_Color::adjust_brightness( $value, -30 );
					} else {
						$accent = StacheStack_Color::adjust_brightness( $value, 20 );
						$border = StacheStack_Color::adjust_brightness( $value, 30 );
					}

					// Use lumosity difference to find a text color with great readability
					if ( StacheStack_Color::lumosity_difference( $value, '#ffffff' ) > 5 ) {
						$text = '#ffffff';
					} elseif ( StacheStack_Color::lumosity_difference( $value, '#222222' ) > 5 ) {
						$text = '#222222';
					}

					echo '.well {
						background: ' . $accent . ';
						border-color: ' . $border . ';
					}
					body, h1, h2, h3, h4, h5, h6 {
						color: ' . $text . ';
					}';
				}

			} elseif ( 'color' == $args['type'] ) {

				// Generic style for all "color" settings
				if ( isset( $args['style'] ) && ! empty( $args['style'] ) ) {
					echo $args['style'] . ' {
						color: ' . $value . ';
					}';
				}

				// Additional styles per setting
				if ( 'color_brand_primary' == $field ) {

					$brightness = StacheStack_Color::get_brightness( $value );
					if ( $brightness < 195 ) {
						$border = StacheStack_Color::adjust_brightness( $value, -20 );
						$text_c = '#fff';
					} else {
						$border = StacheStack_Color::adjust_brightness( $value, 20 );
						$text_c = '#333';
					}

					echo '.btn.btn-primary {
						background-color: ' . $value . ';
						border-color: ' . $border . ';
						color: ' . $text_c . ';
					}';

				}
			}

		}

	}

	echo '</style>';
}
add_action( 'wp_head', 'stachestack_background_css', 210 );

/**
 * This function takes care of copying theme mods as options in our array,
 * cleaning up the db from our theme-mods and then triggering the compiler.
 */
function stachestack_customizer_copy_options() {
	global $ss_settings;

	$sections = stachestack_customizer_fields();

	foreach ( $sections as $section ) {

		$fields = $section['fields'];

		foreach ( $fields as $field => $args ) {

			$value = get_theme_mod( $field );

			// Backgrounds are an array of options, so we have to include each one of them separately
			if ( 'background' == $args['type'] ) {

				// If we're changing the 'body_bg' setting, save the option to 'html_bg' as well.
				if ( 'body_bg' == $field ) {
					$ss_settings['html_bg']['background-color'] = $value;

					// Use lumosity difference to find a text color with great readability
					if ( StacheStack_Color::lumosity_difference( $value, '#ffffff' ) > 5 ) {
						$text = '#ffffff';
					} elseif ( StacheStack_Color::lumosity_difference( $value, '#222222' ) > 5 ) {
						$text = '#222222';
					}
					$ss_settings['font_base']['color'] = $text;
					$ss_settings['font_h1']['color'] = $text;
					$ss_settings['font_h2']['color'] = $text;
					$ss_settings['font_h3']['color'] = $text;
					$ss_settings['font_h4']['color'] = $text;
					$ss_settings['font_h5']['color'] = $text;
					$ss_settings['font_h6']['color'] = $text;
				}

				// Copy the theme_mod to our settings array
				$ss_settings[$field]['background-color'] = $value;
				// Clean up theme mods
				remove_theme_mod( $field );

			} elseif ( 'font' == $args['type'] ) {
				// Copy the theme_mod to our settings array
				$ss_settings[$field]['font-family'] = $value;
				// Clean up theme mods
				remove_theme_mod( $field );
			} else {
				// Copy the theme_mod to our settings array
				$ss_settings[$field] = $value;
				// Clean up theme mods
				remove_theme_mod( $field );
			}

		}

	}

	update_option( STACHESTACK_OPT_NAME, $ss_settings );

	$compiler = new StacheStack_Less_PHP();
	add_action( 'customize_save_after', array( $compiler, 'makecss' ), 77 );

}
add_action( 'customize_save_after', 'stachestack_customizer_copy_options', 75 );


/*
 * This class creates a custom Customizer control for Google Fonts
 */
if ( class_exists( 'WP_Customize_Control' ) ) {
  class StacheStack_Google_WebFont_Control extends WP_Customize_Control {
    public $type = 'select';

    public function render_content() { ?>

        <label>
          <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
          <select <?php $this->link(); ?>>
            <option value="" data-details=''>Select a Font</option>
            <?php
              $fonts = stachestack_google_webfonts_array();
              foreach ($fonts as $font => $details) {
                if ($this->value() == $font) {
                  $selected = ' selected="selected"';
                } else {
                  $selected = '';
                }
                ?>
                  <option value="<?php echo $font;?>" data-details='<?php echo json_encode($details)?>'<?php echo $selected; ?>><?php echo $font;?></option>
                <?php
              }
            ?>
          </select>
        </label>
    <?php }
  }
}


/*
 * Ccall the API and enable Google Font dropdown.
 */
function stachestack_google_webfonts_array() {
	define('GOOGLE_FONTS_API_KEY','AIzaSyCDiOc36EIOmwdwspLG3LYwCg9avqC5YLs');

	// Check if they have a valid API key and SSL on this box. Won't work without SSL.
	if(extension_loaded('openssl') && GOOGLE_FONTS_API_KEY != "") {
		$url = "https://www.googleapis.com/webfonts/v1/webfonts?key=".GOOGLE_FONTS_API_KEY;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_REFERER, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$result = json_decode(curl_exec($ch));
		curl_close($ch);
		if ($result->error->code !== 400) {
			$res = array();
			foreach ($result->items as $font) {
				$res[$font->family] = array(
					'variants' => '',
					'subsets' => ''
				);
			}
			return $res;
		}
	} else {
		// No API key specified
		return json_decode(file_get_contents(ReduxFramework::$_dir . 'inc/fields/typography/googlefonts.json'));
	}
}
