<?php
/**
 * Check and setup theme's default settings
 *
 * @package UQCricket
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'uqcricket_setup_theme_default_settings' ) ) {
	/**
	 * Store default theme settings in database.
	 */
	function uqcricket_setup_theme_default_settings() {
		$defaults = uqcricket_get_theme_default_settings();
		$settings = get_theme_mods();
		foreach ( $defaults as $setting_id => $default_value ) {
			// Check if setting is set, if not set it to its default value.
			if ( ! isset( $settings[ $setting_id ] ) ) {
				set_theme_mod( $setting_id, $default_value );
			}
		}
	}
}

if ( ! function_exists( 'uqcricket_get_theme_default_settings' ) ) {
	/**
	 * Retrieve default theme settings.
	 *
	 * @return array
	 */
	function uqcricket_get_theme_default_settings() {
		$defaults = array(
			'uqcricket_posts_index_style' => 'default',   // Latest blog posts style.
			'uqcricket_sidebar_position'  => 'right',     // Sidebar position.
			'uqcricket_container_type'    => 'container', // Container width.
		);

		/**
		 * Filters the default theme settings.
		 *
		 * @param array $defaults Array of default theme settings.
		 */
		return apply_filters( 'uqcricket_theme_default_settings', $defaults );
	}
}
