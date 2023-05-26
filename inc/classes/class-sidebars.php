<?php
/**
 * Register Sidebars
 * 
 * @package WPixel
 */

 namespace WPIXEL_THEME\Inc;

 use WPIXEL_THEME\Inc\Traits\Singleton;

 class Sidebars {
		 use Singleton;

		 protected function __construct() {
				 // Load class.
				 $this->setup_hooks();
		 }

		 protected function setup_hooks() {
				 /**
					* Actions.
					*/
				 add_action( 'widgets_init', [ $this, 'register_sidebars' ] );
		 }

		 public function register_sidebars() {
			 register_sidebar(
				 [
					 'name'          => __( 'Sidebar', 'wpixel' ),
					 'id'            => 'sidebar-1',
					 'description'   => __( 'Main Sidebar', 'wpixel' ),
					 'before_widget' => '<section id="%1$s" class="widget widget-sidebar %2$s">',
					 'after_widget'  => '</section>',
					 'before_title'  => '<h3 class="widget-title">',
					 'after_title'   => '</h3>',
				 ]
			 );
			 register_sidebar(
				[
					'name'          => __( 'Footer', 'wpixel' ),
					'id'            => 'sidebar-2',
					'description'   => __( 'Footer Sidebar', 'wpixel' ),
					'before_widget' => '<section id="%1$s" class="widget widget-footer cell column %2$s">',
					'after_widget'  => '</section>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				]
			);
			

		 }
 }