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
				 add_action( 'enqueue_block_assets', [ $this, 'enqueue_editor_assets' ] );
		 }

		 public function register_styles() {
				 // Register Styles
				 wp_register_style('bootstrap-css', WPIXEL_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );
				 wp_register_style( 'slick-css', WPIXEL_DIR_URI . '/assets/src/library/css/slick.css', [], false, 'all' );
				 wp_register_style( 'slick-theme-css', WPIXEL_DIR_URI . '/assets/src/library/css/slick-theme.css', ['slick-css'], false, 'all' );
				 wp_register_style( 'main-css', WPIXEL_BUILD_CSS_URI . '/main.css', ['bootstrap-css'], filemtime( WPIXEL_BUILD_CSS_DIR_PATH . '/main.css' ), 'all' );
				 wp_register_style( 'search-css', WPIXEL_BUILD_CSS_URI . '/search.css', [], filemtime( WPIXEL_BUILD_CSS_DIR_PATH . '/search.css' ), 'all' );

				 // Enqueue Styles
				 wp_enqueue_style('bootstrap-css' );
				 wp_enqueue_style('slick-css' );
				 wp_enqueue_style('slick-theme-css' );
				 wp_enqueue_style('main-css' );

				 // If search page
				 if( is_page( 'search' ) ) {
					 wp_enqueue_style('search-css' );
				 }

				}

		 public function register_scripts() {
				 // Register Scripts
				 wp_register_script( 'slick-js', WPIXEL_DIR_URI . '/assets/src/library/js/slick.min.js', ['jquery'], false, true );
				 wp_register_script( 'main-js', WPIXEL_BUILD_JS_URI . '/main.js', [ 'jquery', 'slick-js' ], filemtime( WPIXEL_BUILD_JS_DIR_PATH . '/main.js' ), true );
				 wp_register_script( 'single-js', WPIXEL_BUILD_JS_URI . '/single.js', [ 'jquery', 'slick-js' ], filemtime( WPIXEL_BUILD_JS_DIR_PATH . '/single.js' ), true );
				 wp_register_script( 'author-js', WPIXEL_BUILD_JS_URI . '/author.js', [ 'jquery' ], filemtime( WPIXEL_BUILD_JS_DIR_PATH . '/author.js' ), true );
				 wp_register_script( 'bootstrap-js', WPIXEL_DIR_URI . '/assets/src/library/js/bootstrap.min.js', [ 'jquery' ], false, true );
				 wp_register_script( 'search-js', WPIXEL_BUILD_JS_URI . '/search.js', [ 'main-js' ], filemtime( WPIXEL_BUILD_JS_DIR_PATH . '/search.js' ), true );

				 // Enqueue Scripts
				 wp_enqueue_script('main-js' );
				 wp_enqueue_script('bootstrap-js' );
				 wp_enqueue_script('slick-js' );

				 // If single post page
				 if ( is_single() ) {
					 wp_enqueue_script('single-js' );
				 }

				 // If author archive page
				 if ( is_author() ) {
					 wp_enqueue_script('author-js' );
				 }

				 // If search page
				 if( is_page( 'search' ) ) {
						$filters_data = get_filters_data();
						wp_enqueue_script('search-js' );
						wp_localize_script('search-js', 'search_settings',
							[
								'rest_api_url' => home_url( '/wp-json/af/v1/search' ),
								'root_url' => home_url( 'search' ),
								'filter_ids' => get_filter_ids( $filters_data ),
							]
						);
				 }

				 // Localize Scripts
				 wp_localize_script('main-js', 'siteConfig', [
					'ajaxUrl' => admin_url( 'admin-ajax.php' ),
					'ajax_nonce' => wp_create_nonce( 'loadmore_post_nonce' ),
				 ]);
		 }

		 public function enqueue_editor_assets() {
			$asset_config_file = sprintf( '%s/assets.php', WPIXEL_BUILD_PATH );

			if ( ! file_exists( $asset_config_file ) ) {
					return;
			}

			$asset_config = require_once $asset_config_file;

			if ( empty( $asset_config['js/editor.js'] ) ) {
					return;
			}

			$editor_asset = $asset_config['js/editor.js'];
			$js_dependencies = ( ! empty( $editor_asset['dependencies'] ) ) ? $editor_asset['dependencies'] : [];
			$version = ( ! empty( $editor_asset['version'] ) ) ? $editor_asset['version'] : filemtime( $asset_config_file );

			// Theme Gutenberg Blocks JS
			if ( is_admin() ) {
					wp_enqueue_script(
							'wpixel-blocks-js',
							WPIXEL_BUILD_JS_URI . '/blocks.js',
							$js_dependencies,
							$version,
							true
					);
			}
			// Theme Gutenberg Blocks CSS
			$css_dependencies = [
					'wp-block-library-theme',
					'wp-block-library',
					// 'wp-editor'
			];
			wp_enqueue_style(
					'wpixel-blocks-css',
					WPIXEL_BUILD_CSS_URI . '/blocks.css',
					$css_dependencies,
					filemtime( WPIXEL_BUILD_CSS_DIR_PATH . '/blocks.css' ),
					'all'
			);
		 }
 }