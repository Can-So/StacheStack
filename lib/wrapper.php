<?php
/**
 * Theme wrapper
 *
 * @link http://scribu.net/wordpress/theme-wrappers.html
 */
function stachestack_template_path() {
	return StacheStack_Wrapping::$main_template;
}

function stachestack_sidebar_path() {
	$template = apply_filters( 'stachestack_sidebar_path', 'templates/sidebar.php' );
	return new StacheStack_Wrapping( $template );
}

class StacheStack_Wrapping {
	// Stores the full path to the main template file
	static $main_template;

	// Stores the base name of the template file; e.g. 'page' for 'page.php' etc.
	static $base;

	public function __construct( $template = 'base.php' ) {
		$this->slug = basename( $template, '.php' );
		$this->templates = array( $template );

		if ( self::$base ) {
			$str = substr( $template, 0, -4 );
			array_unshift( $this->templates, sprintf( $str . '-%s.php', self::$base ) );
		}
	}

	public function __toString() {
		$this->templates = apply_filters( 'stachestack_wrap_' . $this->slug, $this->templates );
		return ss_locate_template( $this->templates );
	}

	static function wrap( $main ) {
		self::$main_template = $main;
		self::$base = basename( self::$main_template, '.php' );

		if ( self::$base === 'index' ) {
			self::$base = false;
		}

		return new StacheStack_Wrapping();
	}
}
add_filter( 'template_include', array( 'StacheStack_Wrapping', 'wrap' ), 99 );
