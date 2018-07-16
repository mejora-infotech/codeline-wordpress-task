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

/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+  								Added gener taxonomy     								+
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
function create_genre_taxonomies() {
	$labels = array(
		'name'              => _x( 'Gener', 'taxonomy general name', 'codeline-wordpress-task' ),
		'singular_name'     => _x( 'Gener', 'taxonomy singular name', 'codeline-wordpress-task' ),
		'search_items'      => __( 'Search Gener', 'codeline-wordpress-task' ),
		'all_items'         => __( 'All Gener', 'codeline-wordpress-task' ),
		'parent_item'       => __( 'Parent Gener', 'codeline-wordpress-task' ),
		'parent_item_colon' => __( 'Parent Gener:', 'codeline-wordpress-task' ),
		'edit_item'         => __( 'Edit Gener', 'codeline-wordpress-task' ),
		'update_item'       => __( 'Update Gener', 'codeline-wordpress-task' ),
		'add_new_item'      => __( 'Add New Gener', 'codeline-wordpress-task' ),
		'new_item_name'     => __( 'New Gener Name', 'codeline-wordpress-task' ),
		'menu_name'         => __( 'Gener', 'codeline-wordpress-task' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'genre', 'with_front' => FALSE ),
	);

	register_taxonomy( 'genre', array( 'films' ), $args );
}
add_action( 'init', 'create_genre_taxonomies', 0 );

/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+  								Added country taxonomy     								+
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
function create_country_taxonomies() {
	$labels = array(
		'name'              => _x( 'Country', 'taxonomy general name', 'codeline-wordpress-task' ),
		'singular_name'     => _x( 'Country', 'taxonomy singular name', 'codeline-wordpress-task' ),
		'search_items'      => __( 'Search Country', 'codeline-wordpress-task' ),
		'all_items'         => __( 'All Country', 'codeline-wordpress-task' ),
		'parent_item'       => __( 'Parent Country', 'codeline-wordpress-task' ),
		'parent_item_colon' => __( 'Parent Country:', 'codeline-wordpress-task' ),
		'edit_item'         => __( 'Edit Country', 'codeline-wordpress-task' ),
		'update_item'       => __( 'Update Country', 'codeline-wordpress-task' ),
		'add_new_item'      => __( 'Add New Country', 'codeline-wordpress-task' ),
		'new_item_name'     => __( 'New Country Name', 'codeline-wordpress-task' ),
		'menu_name'         => __( 'Country', 'codeline-wordpress-task' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'country', 'with_front' => FALSE ),
	);

	register_taxonomy( 'country', array( 'films' ), $args );
}
add_action( 'init', 'create_country_taxonomies', 0 );

/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+  								Added year taxonomy     								+
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
function create_year_taxonomies() {
	$labels = array(
		'name'              => _x( 'Year', 'taxonomy general name', 'codeline-wordpress-task' ),
		'singular_name'     => _x( 'Year', 'taxonomy singular name', 'codeline-wordpress-task' ),
		'search_items'      => __( 'Search Year', 'codeline-wordpress-task' ),
		'all_items'         => __( 'All Year', 'codeline-wordpress-task' ),
		'parent_item'       => __( 'Parent Year', 'codeline-wordpress-task' ),
		'parent_item_colon' => __( 'Parent Year:', 'codeline-wordpress-task' ),
		'edit_item'         => __( 'Edit Year', 'codeline-wordpress-task' ),
		'update_item'       => __( 'Update Year', 'codeline-wordpress-task' ),
		'add_new_item'      => __( 'Add New Year', 'codeline-wordpress-task' ),
		'new_item_name'     => __( 'New Year Name', 'codeline-wordpress-task' ),
		'menu_name'         => __( 'Year', 'codeline-wordpress-task' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'year', 'with_front' => FALSE ),
	);

	register_taxonomy( 'year', array( 'films' ), $args );
}
add_action( 'init', 'create_year_taxonomies', 0 );

/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+  								Added actors taxonomy     								+
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
function create_actor_taxonomies() {
	$labels = array(
		'name'              => _x( 'Actors', 'taxonomy general name', 'codeline-wordpress-task' ),
		'singular_name'     => _x( 'Actor', 'taxonomy singular name', 'codeline-wordpress-task' ),
		'search_items'      => __( 'Search Actor', 'codeline-wordpress-task' ),
		'all_items'         => __( 'All Actors', 'codeline-wordpress-task' ),
		'parent_item'       => __( 'Parent Actor', 'codeline-wordpress-task' ),
		'parent_item_colon' => __( 'Parent Actor:', 'codeline-wordpress-task' ),
		'edit_item'         => __( 'Edit Actor', 'codeline-wordpress-task' ),
		'update_item'       => __( 'Update Actor', 'codeline-wordpress-task' ),
		'add_new_item'      => __( 'Add New Actor', 'codeline-wordpress-task' ),
		'new_item_name'     => __( 'New Actor Name', 'codeline-wordpress-task' ),
		'menu_name'         => __( 'Actors', 'codeline-wordpress-task' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'actor', 'with_front' => FALSE ),
	);

	register_taxonomy( 'actor', array( 'films' ), $args );
}
add_action( 'init', 'create_actor_taxonomies', 0 );

?>
