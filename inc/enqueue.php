<?php
/**
 *  enqueue scripts
 *
 * @package UQCricket
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'uqcricket_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function uqcricket_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'uqcricket-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );
		wp_register_script( 'slider', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', null, null, true );
		wp_enqueue_script('slider');
		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'uqcricket-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );


		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // End of if function_exists( 'uqcricket_scripts' ).

add_action( 'wp_enqueue_scripts', 'uqcricket_scripts' );
