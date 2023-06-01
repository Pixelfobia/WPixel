<?php
/**
 * Enqueue theme assets
 * 
 * @package WPixel
 */

 namespace WPIXEL_THEME\Inc;

 use WPIXEL_THEME\Inc\Traits\Singleton;

 class Assets {
		 use Singleton;

		 protected function __construct() {
				 // Load class.
				 $this->setup_hooks();
		 }

		 protected function setup_hooks() {
				 /**
					* Actions.
					*/
				 add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
				 add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
		 }

		 public function register_styles() {
				 // Register Styles
				 wp_register_style('style-css', get_stylesheet_uri(), [], filemtime( WPIXEL_DIR_PATH . '/style.css' ), 'all' );
				 wp_register_style('bootstrap-css', WPIXEL_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );
				 wp_register_style('fonts-css', get_template_directory_uri() . '/assets/src/library/fonts/fonts.css', [], false, 'all' );

				 // Enqueue Styles
				 wp_enqueue_style('style-css' );
				 wp_enqueue_style('bootstrap-css' );
		 }

		 public function register_scripts() {
				 // Register Scripts
				 wp_register_script( 'main-js', WPIXEL_BUILD_JS_URI . '/main.js', [ 'jquery' ], filemtime( WPIXEL_BUILD_JS_DIR_PATH . '/main.js' ), true );
				 wp_register_script( 'bootstrap-js', WPIXEL_DIR_URI . '/assets/src/library/js/bootstrap.min.js', [ 'jquery' ], false, true );

				 // Enqueue Scripts
				 wp_enqueue_script('main-js' );
				 wp_enqueue_script('bootstrap-js' );
		 }
 }