<?php 

if( !defined( 'ABSPATH' ) ) exit();

if( !class_exists( 'OVAPO_custom_post_type' ) ) {

	class OVAPO_custom_post_type{

		public function __construct(){

			add_action( 'init', array( $this, 'OVAPO_register_post_type_project' ) );
			add_action( 'init', array( $this, 'OVAPO_register_taxonomy_project' ) );

		}
		
		function OVAPO_register_post_type_project() {

			$slug = 'project';
			$name = 'Project';
			$singular_name = 'Project';

			$labels = array(
				'name'                  => _x( $name, 'Post Type General Name', 'ova-project' ),
				'singular_name'         => _x( $singular_name, 'Post Type Singular Name', 'ova-project' ),
				'menu_name'             => __( $name, 'ova-project' ),
				'name_admin_bar'        => __( 'Post Type', 'ova-project' ),
				'archives'              => __( 'Item Archives', 'ova-project' ),
				'attributes'            => __( 'Item Attributes', 'ova-project' ),
				'parent_item_colon'     => __( 'Parent Item:', 'ova-project' ),
				'all_items'             => __( 'All '.$name, 'ova-project' ),
				'add_new_item'          => __( 'Add New '.$singular_name, 'ova-project' ),
				'add_new'               => __( 'Add New '.$singular_name, 'ova-project' ),
				'new_item'              => __( 'New Item', 'ova-project' ),
				'edit_item'             => __( 'Edit '.$singular_name, 'ova-project' ),
				'view_item'             => __( 'View Item', 'ova-project' ),
				'view_items'            => __( 'View Items', 'ova-project' ),
				'search_items'          => __( 'Search Item', 'ova-project' ),
				'not_found'             => __( 'Not found', 'ova-project' ),
				'not_found_in_trash'    => __( 'Not found in Trash', 'ova-project' ),
			);
			$args = array(
				'description'         => __( 'Post Type Description', 'ova-project' ),
				'labels'              => $labels,
				'supports'            => array( 'author', 'title', 'editor', 'comments', 'excerpt', 'thumbnail' ),
				'hierarchical'        => false,
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => 'ovapo-menu',
				'menu_position'       => 5,
				'query_var'           => true,
				'has_archive'         => true,
				'exclude_from_search' => true,
				'publicly_queryable'  => true,
				'rewrite'             => array( 'slug' => _x( $slug, 'URL slug', 'ova-project' ) ),
				'capability_type'     => 'post',
			);
			register_post_type( $slug, $args );
		}

		function OVAPO_register_taxonomy_project() {

			$slug = 'project_cat';
			$name = 'Categories';
			$singular_name = 'Categories';

			$labels = array(
				'name'                       => _x( $name, 'Post Type General Name', 'ova-project' ),
				'singular_name'              => _x( $singular_name, 'Post Type Singular Name', 'ova-project' ),
				'menu_name'                  => __( $name, 'ova-project' ),
				'all_items'                  => __( 'All '.$name, 'ova-project' ),
				'parent_item'                => __( 'Parent Item', 'ova-project' ),
				'parent_item_colon'          => __( 'Parent Item:', 'ova-project' ),
				'new_item_name'              => __( 'New Item Name', 'ova-project' ),
				'add_new_item'               => __( 'Add New '.$singular_name, 'ova-project' ),
				'add_new'                    => __( 'Add New '.$singular_name, 'ova-project' ),
				'edit_item'                  => __( 'Edit '.$singular_name, 'ova-project' ),
				'view_item'                  => __( 'View Item', 'ova-project' ),
				'separate_items_with_commas' => __( 'Separate items with commas', 'ova-project' ),
				'add_or_remove_items'        => __( 'Add or remove items', 'ova-project' ),
				'choose_from_most_used'      => __( 'Choose from the most used', 'ova-project' ),
				'popular_items'              => __( 'Popular Items', 'ova-project' ),
				'search_items'               => __( 'Search Items', 'ova-project' ),
				'not_found'                  => __( 'Not Found', 'ova-project' ),
				'no_terms'                   => __( 'No items', 'ova-project' ),
				'items_list'                 => __( 'Items list', 'ova-project' ),
				'items_list_navigation'      => __( 'Items list navigation', 'ova-project' ),
			);
			$args = array(
				'labels'            => $labels,
				'hierarchical'      => true,
				'publicly_queryable' => true,
				'public'            => true,
				'show_ui'           => true,
				'show_in_menu'      => 'ovapo-menu',
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'show_tagcloud'     => false,
			);
			register_taxonomy( $slug, array( 'project' ), $args );
		}

	}

	new OVAPO_custom_post_type();
}