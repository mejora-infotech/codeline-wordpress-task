<?php
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+  								Added flims post type     								+
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
if ( ! function_exists('films_post_type') ) {
	function films_post_type() {

		$labels = array(
			'name'                  => _x( 'Films', 'Post Type General Name', 'codeline-wordpress-task' ),
			'singular_name'         => _x( 'Film', 'Post Type Singular Name', 'codeline-wordpress-task' ),
			'menu_name'             => __( 'Films', 'codeline-wordpress-task' ),
			'name_admin_bar'        => __( 'Films', 'codeline-wordpress-task' ),
			'archives'              => __( 'Films Archives', 'codeline-wordpress-task' ),
			'attributes'            => __( 'Films Attributes', 'codeline-wordpress-task' ),
			'parent_item_colon'     => __( 'Parent Film:', 'codeline-wordpress-task' ),
			'all_items'             => __( 'All Films', 'codeline-wordpress-task' ),
			'add_new_item'          => __( 'Add New Film', 'codeline-wordpress-task' ),
			'add_new'               => __( 'Add New', 'codeline-wordpress-task' ),
			'new_item'              => __( 'New Film', 'codeline-wordpress-task' ),
			'edit_item'             => __( 'Edit Film', 'codeline-wordpress-task' ),
			'update_item'           => __( 'Update Film', 'codeline-wordpress-task' ),
			'view_item'             => __( 'View Film', 'codeline-wordpress-task' ),
			'view_items'            => __( 'View Films', 'codeline-wordpress-task' ),
			'search_items'          => __( 'Search Films', 'codeline-wordpress-task' ),
			'not_found'             => __( 'Not found', 'codeline-wordpress-task' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'codeline-wordpress-task' ),
			'featured_image'        => __( 'Featured Image', 'codeline-wordpress-task' ),
			'set_featured_image'    => __( 'Set featured image', 'codeline-wordpress-task' ),
			'remove_featured_image' => __( 'Remove featured image', 'codeline-wordpress-task' ),
			'use_featured_image'    => __( 'Use as featured image', 'codeline-wordpress-task' ),
			'insert_into_item'      => __( 'Insert into Film', 'codeline-wordpress-task' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Film', 'codeline-wordpress-task' ),
			'items_list'            => __( 'Films list', 'codeline-wordpress-task' ),
			'items_list_navigation' => __( 'Films list navigation', 'codeline-wordpress-task' ),
			'filter_items_list'     => __( 'Filter Films list', 'codeline-wordpress-task' ),
		);
		$args = array(
			'label'                 => __( 'Film', 'codeline-wordpress-task' ),
			'description'           => __( 'Film Description', 'codeline-wordpress-task' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor' ),
			'taxonomies'            => array(''),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-format-video',
			'show_in_admin_bar'     => false,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'films', $args );
	}
	add_action( 'init', 'films_post_type', 0 );
}
?>