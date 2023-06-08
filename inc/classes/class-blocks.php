<?php
/**
 * Blocks
 * 
 * @package WPixel
 */

 namespace WPIXEL_THEME\Inc;

 use WPIXEL_THEME\Inc\Traits\Singleton;

 class Blocks {
		 use Singleton;

		 protected function __construct() {
				 // Load class.
				 $this->setup_hooks();
		 }

		 protected function setup_hooks() {
				 /**
					* Actions.
					*/
					add_action( 'block_categories_all', [ $this, 'add_block_categories' ] );
		 }
		 public function add_block_categories( $categories ) {
			$category_slugs = wp_list_pluck( $categories, 'slug' );
			
			return in_array( 'wpixel', $category_slugs, true ) ? $categories : array_merge(
				$categories,
				[
					[
						'slug'  => 'wpixel',
						'title' => __( 'WPixel Blocks', 'wpixel' ),
						'icon'  => 'table-row-after'
					]
				]
			);
		 }
 }