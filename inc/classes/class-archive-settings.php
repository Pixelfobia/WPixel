<?php
/**
 * Blocks
 * 
 * @package WPixel
 */

 namespace WPIXEL_THEME\Inc;

 use WPIXEL_THEME\Inc\Traits\Singleton;

 class Archive_Settings {
		 use Singleton;

		 protected function __construct() {
				 // Load class.
				 $this->setup_hooks();
		 }

		 protected function setup_hooks() {
				 /**
					* Actions.
					*/
					add_filter( 'pre_get_posts', [ $this, 'change_archive_posts_per_page' ] );
		}

		/**
		 * Change Posts Per Page for Archive.
		 * 
		 * @param object $query data.
		 * 
		 */
		function change_archive_posts_per_page( $query ) {

			// echo '<pre>';
			// print_r($query); 

			if ( $query->is_archive && ! is_admin() && $query->is_main_query() ) {
	
				$query->set( 'posts_per_page', strval( WPIXEL_ARCHIVE_POST_PER_PAGE ) );
	
			} elseif ( ! empty( $query->query_vars['s'] ) && ! is_admin() ) {
	
				// For search result page only
				$query->set( 'posts_per_page', strval( WPIXEL_SEARCH_RESULTS_POST_PER_PAGE ) );
	
			}

			return $query;
		}	
}
