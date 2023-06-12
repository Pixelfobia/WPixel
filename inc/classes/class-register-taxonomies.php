<?php
/**
 * Register Custom Taxonomies
 * 
 * @package WPixel
 */
 
namespace WPixel_THEME\Inc;

use WPixel_THEME\Inc\Traits\Singleton;

class Register_Taxonomies {
	use Singleton;

	protected function __construct() {
		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		/**
		 * Actions.
		 */

		 add_action( 'init', [ $this, 'create_genero_taxonomy'] );
		 add_action( 'init', [ $this, 'create_nacionalidad_taxonomy' ] );

	}
		// Register Taxonomy Genero
	public function create_genero_taxonomy() {

	$labels = [
		'name'              => _x( 'Generos', 'taxonomy general name', 'wpixel' ),
		'singular_name'     => _x( 'Genero', 'taxonomy singular name', 'wpixel' ),
		'search_items'      => __( 'Search Generos', 'wpixel' ),
		'all_items'         => __( 'All Generos', 'wpixel' ),
		'parent_item'       => __( 'Parent Genero', 'wpixel' ),
		'parent_item_colon' => __( 'Parent Genero:', 'wpixel' ),
		'edit_item'         => __( 'Edit Genero', 'wpixel' ),
		'update_item'       => __( 'Update Genero', 'wpixel' ),
		'add_new_item'      => __( 'Add New Genero', 'wpixel' ),
		'new_item_name'     => __( 'New Genero Name', 'wpixel' ),
		'menu_name'         => __( 'Genero', 'wpixel' ),
	];
	$args = array(
		'labels' => $labels,
		'description' => __( 'Genero de la pelicula', 'wpixel' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
	);
	register_taxonomy( 'genero', [ 'peliculas' ], $args );

}
// Register Taxonomy Nacionalidad
public function create_nacionalidad_taxonomy() {

	$labels = [
		'name'              => _x( 'Nacionalidades', 'taxonomy general name', 'wpixel' ),
		'singular_name'     => _x( 'Nacionalidad', 'taxonomy singular name', 'wpixel' ),
		'search_items'      => __( 'Search Nacionalidades', 'wpixel' ),
		'all_items'         => __( 'All Nacionalidades', 'wpixel' ),
		'parent_item'       => __( 'Parent Nacionalidad', 'wpixel' ),
		'parent_item_colon' => __( 'Parent Nacionalidad:', 'wpixel' ),
		'edit_item'         => __( 'Edit Nacionalidad', 'wpixel' ),
		'update_item'       => __( 'Update Nacionalidad', 'wpixel' ),
		'add_new_item'      => __( 'Add New Nacionalidad', 'wpixel' ),
		'new_item_name'     => __( 'New Nacionalidad Name', 'wpixel' ),
		'menu_name'         => __( 'Nacionalidad', 'wpixel' ),
	];
	$args = [
		'labels' => $labels,
		'description' => __( 'Nacionalidad de la pelicula', 'wpixel' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
	];
	register_taxonomy( 'nacionalidad', array('peliculas'), $args );

}
	}