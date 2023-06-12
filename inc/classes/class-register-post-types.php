<?php
/**
 * Register Post Types
 * 
 * @package WPixel
 */
 
namespace WPixel_THEME\Inc;

use WPixel_THEME\Inc\Traits\Singleton;

class Register_Post_Types {
	use Singleton;

	protected function __construct() {
		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		/**
		 * Actions.
		 */

		 add_action( 'init', [ $this, 'create_pelicula_cpt' ], 0 );

	}

	// Register Custom Post Type Pelicula
	public function create_pelicula_cpt() {

		$labels = array(
			'name' => _x( 'Peliculas', 'Post Type General Name', 'WPixel' ),
			'singular_name' => _x( 'Pelicula', 'Post Type Singular Name', 'WPixel' ),
			'menu_name' => _x( 'Peliculas', 'Admin Menu text', 'WPixel' ),
			'name_admin_bar' => _x( 'Pelicula', 'Add New on Toolbar', 'WPixel' ),
			'archives' => __( 'Pelicula Archives', 'WPixel' ),
			'attributes' => __( 'Pelicula Attributes', 'WPixel' ),
			'parent_item_colon' => __( 'Parent Pelicula:', 'WPixel' ),
			'all_items' => __( 'Todas las Peliculas', 'WPixel' ),
			'add_new_item' => __( 'Añadir nueva Pelicula', 'WPixel' ),
			'add_new' => __( 'Añadir nueva', 'WPixel' ),
			'new_item' => __( 'Nueva Pelicula', 'WPixel' ),
			'edit_item' => __( 'Editar Pelicula', 'WPixel' ),
			'update_item' => __( 'Actualizar Pelicula', 'WPixel' ),
			'view_item' => __( 'Ver Pelicula', 'WPixel' ),
			'view_items' => __( 'Ver Peliculas', 'WPixel' ),
			'search_items' => __( 'Buscar Pelicula', 'WPixel' ),
			'not_found' => __( 'No encontrada', 'WPixel' ),
			'not_found_in_trash' => __( 'No encontrada en la papelera', 'WPixel' ),
			'featured_image' => __( 'Imagen principal', 'WPixel' ),
			'set_featured_image' => __( 'Set featured image', 'WPixel' ),
			'remove_featured_image' => __( 'Eliminar featured image', 'WPixel' ),
			'use_featured_image' => __( 'Usar como imagen principal', 'WPixel' ),
			'insert_into_item' => __( 'Insertar into Pelicula', 'WPixel' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Pelicula', 'WPixel' ),
			'items_list' => __( 'Peliculas list', 'WPixel' ),
			'items_list_navigation' => __( 'Peliculas list navigation', 'WPixel' ),
			'filter_items_list' => __( 'Filter Peliculas list', 'WPixel' ),
		);
		$args = [
			'label' => __( 'Pelicula', 'WPixel' ),
			'description' => __( 'Las peliculas', 'WPixel' ),
			'labels' => $labels,
			'menu_icon' => 'dashicons-video-alt',
			'supports' => [
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',
				'author',
				'comments',
				'trackbacks',
				'page-attributes',
				'custom-fields'
			],
			'taxonomies' => [],
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 5,
			'show_in_admin_bar' => true,
			'show_in_nav_menus' => true,
			'can_export' => true,
			'has_archive' => true,
			'hierarchical' => true,
			'exclude_from_search' => false,
			'show_in_rest' => true,
			'publicly_queryable' => true,
			'capability_type' => 'post',
		];
		register_post_type( 'peliculas', $args );
	
			}
}
