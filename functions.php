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

 if ( ! defined( 'WPIXEL_BUILD_URI' ) ) {
	define( 'WPIXEL_BUILD_URI', untrailingslashit( get_template_directory_uri() . '/assets/build' ) );
 }

 if ( ! defined( 'WPIXEL_BUILD_PATH' ) ) {
	define( 'WPIXEL_BUILD_PATH', untrailingslashit( get_template_directory() . '/assets/build' ) );
 }

 if ( ! defined( 'WPIXEL_BUILD_JS_URI' ) ) {
	define( 'WPIXEL_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() . '/assets/build/js' ) );
 }

 if ( ! defined( 'WPIXEL_BUILD_JS_DIR_PATH' ) ) {
	define( 'WPIXEL_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() . '/assets/build/js' ) );
 }

 if ( ! defined( 'WPIXEL_BUILD_IMG_URI' ) ) {
	define( 'WPIXEL_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() . '/assets/build/src/img' ) );
 }

 if ( ! defined( 'WPIXEL_BUILD_CSS_URI' ) ) {
	define( 'WPIXEL_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() . '/assets/build/css' ) );
 }

 if ( ! defined( 'WPIXEL_BUILD_CSS_DIR_PATH' ) ) {
	define( 'WPIXEL_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() . '/assets/build/css' ) );
 }

require_once WPIXEL_DIR_PATH . '/inc/helpers/autoloader.php';
require_once WPIXEL_DIR_PATH . '/inc/helpers/template-tags.php';

function wpixel_get_theme_instance() {
	\WPIXEL_THEME\Inc\WPIXEL_THEME::get_instance();
}

wpixel_get_theme_instance();

// Remove Gutenberg Block Library CSS from loading on the frontend
// function ebayads_remove_block_styles() {
// 	wp_dequeue_style( 'wp-block-library' );
// 	wp_dequeue_style( 'wp-block-library-theme' );
// 	wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
// }

// add_action('wp_enqueue_scripts', 'ebayads_remove_block_styles', 100 );
 
?>