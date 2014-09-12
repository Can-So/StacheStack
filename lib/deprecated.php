<?php
/**
 * This file adds compatibility with older functions, actions & filters that were used prior to version 3.1.1
 * Developers should NOT use these functions and actions and should instead migrate to the new ones.
 */

/**
 * Marks a function as deprecated and informs when it has been used.
 *
 * There is a hook stachestack_deprecated_function_run that will be called that can be used
 * to get the backtrace up to what file and function called the deprecated
 * function.
 *
 * The current behavior is to trigger a user error if WP_DEBUG is true.
 *
 * This function is to be used in every function that is deprecated.
 *
 * @uses do_action() Calls 'stachestack_deprecated_function_run' and passes the function name, what to use instead,
 *   and the version the function was deprecated in.
 * @uses apply_filters() Calls 'stachestack_deprecated_function_trigger_error' and expects boolean value of true to do
 *   trigger or false to not trigger error.
 *
 * @param string  $function    The function that was called
 * @param string  $version     The version of WordPress that deprecated the function
 * @param string  $replacement Optional. The function that should have been called
 * @param array   $backtrace   Optional. Contains stack backtrace of deprecated function
 */
function _stachestack_deprecated_function( $function, $version, $replacement = null, $backtrace = null ) {
	do_action( 'stachestack_deprecated_function_run', $function, $replacement, $version );

	$show_errors = current_user_can( 'manage_options' );

	// Allow plugin to filter the output error trigger
	if ( WP_DEBUG && apply_filters( 'stachestack_deprecated_function_trigger_error', $show_errors ) ) {
		if ( ! is_null( $replacement ) ) {
			trigger_error( sprintf( __( '%1$s is <strong>deprecated</strong> since StacheStack version %2$s! Use %3$s instead.', 'stachestack' ), $function, $version, $replacement ) );
			trigger_error(  print_r( $backtrace ) ); // Limited to previous 1028 characters, but since we only need to move back 1 in stack that should be fine.
			// Alternatively we could dump this to a file.
		}
		else {
			trigger_error( sprintf( __( '%1$s is <strong>deprecated</strong> since StacheStack version %2$s with no alternative available.', 'stachestack' ), $function, $version ) );
			trigger_error( print_r( $backtrace ) );// Limited to previous 1028 characters, but since we only need to move back 1 in stack that should be fine.
			// Alternatively we could dump this to a file.
		}
	}
}

/**
 * Color functions
 */
function stachestack_sanitize_hex( $color ) {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', 'StacheStack_Color::sanitize_hex()' );
	return StacheStack_Color::sanitize_hex( $color );
}

function stachestack_get_rgb( $hex, $implode = false ) {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', 'StacheStack_Color::sanitize_hex()' );
	return StacheStack_Color::get_rgb( $hex, $implode );
}

function stachestack_get_rgba( $hex, $opacity, $echo ) {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', 'StacheStack_Color::sanitize_hex()' );
	return StacheStack_Color::get_rgba( $hex, $opacity, $echo );
}

function stachestack_get_brightness( $hex ) {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', 'StacheStack_Color::get_brightness()' );
	return StacheStack_Color::get_brightness( $hex );
}

function stachestack_adjust_brightness( $hex, $steps ) {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', 'StacheStack_Color::adjust_brightness()' );
	return StacheStack_Color::adjust_brightness( $hex, $steps );
}

function stachestack_mix_colors( $hex1, $hex2, $percentage ) {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', 'StacheStack_Color::mix_colors()' );
	return StacheStack_Color::mix_colors( $hex1, $hex2, $percentage );
}

function stachestack_hex_to_hsv( $hex ) {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', 'StacheStack_Color::hex_to_hsv()' );
	return StacheStack_Color::hex_to_hsv( $hex );
}

function stachestack_rgb_to_hsv( $color = array() ) {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', 'StacheStack_Color::rgb_to_hsv()' );
	return StacheStack_Color::rgb_to_hsv( $rgb );
}

function stachestack_brightest_color( $colors = array(), $context = 'key' ) {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', 'StacheStack_Color::brightest_color()' );
	return StacheStack_Color::brightest_color( $colors, $context );
}

function stachestack_most_saturated_color( $colors = array(), $context = 'key' ) {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', 'StacheStack_Color::most_saturated_color()' );
	return StacheStack_Color::most_saturated_color( $colors, $context );
}

function stachestack_most_intense_color( $colors = array(), $context = 'key' ) {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', 'StacheStack_Color::most_intense_color()' );
	return StacheStack_Color::most_intense_color( $colors, $context );
}

function stachestack_brightest_dull_color( $colors = array(), $context = 'key' ) {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', 'StacheStack_Color::brightest_dull_color()' );
	return StacheStack_Color::brightest_dull_color( $colors, $context );
}

function stachestack_brightness_difference( $hex1, $hex2 ) {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', 'StacheStack_Color::brightness_difference()' );
	return StacheStack_Color::brightness_difference( $hex1, $hex2 );
}

function stachestack_color_difference( $hex1, $hex2 ) {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', 'StacheStack_Color::color_difference()' );
	return StacheStack_Color::color_difference( $hex1, $hex2 );
}

function stachestack_lumosity_difference( $hex1, $hex2 ) {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', 'StacheStack_Color::lumosity_difference()' );
	return StacheStack_Color::lumosity_difference( $hex1, $hex2 );
}

/**
 * Layout functions
 */
function stachestack_content_width_px( $echo = false ) {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', 'StacheStack_Layout::content_width_px()' );
	return StacheStack_Layout::content_width_px( $echo );
}

/**
 * Image functions
 */
function stachestack_image_resize( $data ) {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', 'StacheStack_Image::image_resize()' );
	return StacheStack_Image::image_resize( $data );
}

/**
 * Actions & filters
 */
add_action( 'stachestack_single_top', 'stachestack_in_article_top_deprecated' );
function stachestack_in_article_top_deprecated() {
	if ( has_action( 'stachestack_in_article_top' ) ) {
		_stachestack_deprecated_function( 'stachestack_in_article_top', '3.2', 'stachestack_single_top' );

		do_action( 'stachestack_in_article_top' );
	}
}

add_action( 'stachestack_entry_meta', 'stachestack_entry_meta_override_deprecated' );
function stachestack_entry_meta_override_deprecated() {
	if ( has_action( 'stachestack_entry_meta_override' ) ) {
		_stachestack_deprecated_function( 'stachestack_entry_meta_override', '3.2', 'stachestack_entry_meta' );

		do_action( 'stachestack_entry_meta_override' );
	}
}

add_action( 'stachestack_entry_meta', 'stachestack_after_entry_meta_deprecated', 99 );
function stachestack_after_entry_meta_deprecated() {
	if ( has_action( 'stachestack_after_entry_meta' ) ) {
		_stachestack_deprecated_function( 'stachestack_after_entry_meta', '3.2', 'stachestack_entry_meta' );

		do_action( 'stachestack_after_entry_meta' );
	}
}

add_action( 'stachestack_do_navbar', 'stachestack_pre_navbar_deprecated', 9 );
function stachestack_pre_navbar_deprecated() {
	if ( has_action( 'stachestack_pre_navbar' ) ) {
		_stachestack_deprecated_function( 'stachestack_pre_navbar', '3.2', 'stachestack_do_navbar' );

		do_action( 'stachestack_pre_navbar' );
	}
}

add_action( 'stachestack_do_navbar', 'stachestack_post_navbar_deprecated', 15 );
function stachestack_post_navbar_deprecated() {
	if ( has_action( 'stachestack_post_navbar' ) ) {
		_stachestack_deprecated_function( 'stachestack_post_navbar', '3.2', 'stachestack_do_navbar' );

		do_action( 'stachestack_post_navbar' );
	}
}

add_action( 'stachestack_pre_wrap', 'stachestack_below_top_navbar_deprecated' );
function stachestack_below_top_navbar_deprecated() {
	if ( has_action( 'stachestack_below_top_navbar' ) ) {
		_stachestack_deprecated_function( 'stachestack_below_top_navbar', '3.2', 'stachestack_pre_wrap' );

		do_action( 'stachestack_below_top_navbar' );
	}
}

add_action( 'stachestack_pre_wrap', 'stachestack_breadcrumbs_deprecated' );
function stachestack_breadcrumbs_deprecated() {
	if ( has_action( 'stachestack_breadcrumbs' ) ) {
		_stachestack_deprecated_function( 'stachestack_breadcrumbs', '3.2', 'stachestack_pre_wrap' );

		do_action( 'stachestack_breadcrumbs' );
	}
}

add_action( 'stachestack_pre_wrap', 'stachestack_header_media_deprecated' );
function stachestack_header_media_deprecated() {
	if ( has_action( 'stachestack_header_media' ) ) {
		_stachestack_deprecated_function( 'stachestack_header_media', '3.2', 'stachestack_pre_wrap' );

		do_action( 'stachestack_header_media' );
	}
}

add_action( 'stachestack_pre_footer', 'stachestack_after_wrap_deprecated' );
function stachestack_after_wrap_deprecated() {
	if ( has_action( 'stachestack_after_wrap' ) ) {
		_stachestack_deprecated_function( 'stachestack_after_wrap', '3.2', 'stachestack_pre_footer' );

		do_action( 'stachestack_after_wrap' );
	}
}

add_action( 'stachestack_in_loop_start', 'stachestack_after_wrap_deprecated' );
function stachestack_before_the_content_deprecated() {
	if ( has_action( 'stachestack_before_the_content' ) ) {
		_stachestack_deprecated_function( 'stachestack_before_the_content', '3.2', 'stachestack_in_loop_start' );

		do_action( 'stachestack_before_the_content' );
	}
}

add_action( 'stachestack_in_loop_start', 'stachestack_in_loop_start_action_deprecated' );
function stachestack_in_loop_start_action_deprecated() {
	if ( has_action( 'stachestack_in_loop_start_action' ) ) {
		_stachestack_deprecated_function( 'stachestack_in_loop_start_action', '3.2', 'stachestack_in_loop_start' );

		do_action( 'stachestack_in_loop_start_action' );
	}
}

add_action( 'stachestack_in_loop_end', 'stachestack_after_the_content_deprecated' );
function stachestack_after_the_content_deprecated() {
	if ( has_action( 'stachestack_after_the_content' ) ) {
		_stachestack_deprecated_function( 'stachestack_after_the_content', '3.2', 'stachestack_in_loop_end' );

		do_action( 'stachestack_after_the_content' );
	}
}

/**
 * Alias of __return_true
 */
function stachestack_return_true()  {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', '__return_true()' );
	return __return_true();
}

/**
 * Alias of __return_false
 */
function stachestack_return_false() {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', '__return_false()' );
	return __return_false();
}

/**
 * Alias of __return_null
 */
function stachestack_blank() {
	_stachestack_deprecated_function( __FUNCTION__, '3.2', '__return_null()' );
	return __return_null();
}
