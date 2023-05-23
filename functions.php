<?php
/**
 * Theme Functions
 * 
 * @package WPixel
 */

 if ( ! defined( 'WPIXEL_DIR_PATH' ) ) {
	define( 'WPIXEL_DIR_PATH', untrailingslashit( get_template_directory() ) );
 }

 if ( ! defined( 'WPIXEL_DIR_URI' ) ) {
	define( 'WPIXEL_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
 }

require_once WPIXEL_DIR_PATH . '/inc/helpers/autoloader.php';

function wpixel_get_theme_instance() {
	\WPIXEL_THEME\Inc\WPIXEL_THEME::get_instance();
}

wpixel_get_theme_instance();

function wpixel_enqueue_scripts() {
}

add_action('wp_enqueue_scripts', 'wpixel_enqueue_scripts' );
 
?>