<?php

if ( ! function_exists('custom_post_type') ) {

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                => _x( 'Activities', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Activity', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Activity', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Activity:', 'text_domain' ),
		'all_items'           => __( 'All Activities', 'text_domain' ),
		'view_item'           => __( 'View Activity', 'text_domain' ),
		'add_new_item'        => __( 'Add Activity', 'text_domain' ),
		'add_new'             => __( 'Add New Activity', 'text_domain' ),
		'edit_item'           => __( 'Edit Activity', 'text_domain' ),
		'update_item'         => __( 'Update Activity', 'text_domain' ),
		'search_items'        => __( 'Search Activity', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'activity', 'text_domain' ),
		'description'         => __( 'Post Type Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields', 'post-formats', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'activity', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );

}