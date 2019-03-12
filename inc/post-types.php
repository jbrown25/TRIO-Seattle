<?php
/** Trio Custom Post Types */

// Register Custom Post Types
if(!function_exists('trio_register_custom_post_types')){
	function trio_register_custom_post_types(){
		// Staff
		$labels = array(
			'name'                  => _x( 'Staff', 'Post Type General Name', 'trio-v1' ),
			'singular_name'         => _x( 'Staff', 'Post Type Singular Name', 'trio-v1' ),
			'menu_name'             => __( 'Staff', 'trio-v1' ),
			'name_admin_bar'        => __( 'Staff', 'trio-v1' ),
			'archives'              => __( 'Staff Archives', 'trio-v1' ),
			'attributes'            => __( 'Item Attributes', 'trio-v1' ),
			'parent_item_colon'     => __( 'Parent Item:', 'trio-v1' ),
			'all_items'             => __( 'All Staff', 'trio-v1' ),
			'add_new_item'          => __( 'Add New Item', 'trio-v1' ),
			'add_new'               => __( 'Add New Staff', 'trio-v1' ),
			'new_item'              => __( 'New Item', 'trio-v1' ),
			'edit_item'             => __( 'Edit Item', 'trio-v1' ),
			'update_item'           => __( 'Update Item', 'trio-v1' ),
			'view_item'             => __( 'View Item', 'trio-v1' ),
			'view_items'            => __( 'View Items', 'trio-v1' ),
			'search_items'          => __( 'Search Item', 'trio-v1' ),
			'not_found'             => __( 'Not found', 'trio-v1' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'trio-v1' ),
			'featured_image'        => __( 'Staff Image', 'trio-v1' ),
			'set_featured_image'    => __( 'Set staff image (ideal dimentions 320x480)', 'trio-v1' ),
			'remove_featured_image' => __( 'Remove staff image', 'trio-v1' ),
			'use_featured_image'    => __( 'Use as staff image', 'trio-v1' ),
			'insert_into_item'      => __( 'Insert into item', 'trio-v1' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'trio-v1' ),
			'items_list'            => __( 'Items list', 'trio-v1' ),
			'items_list_navigation' => __( 'Items list navigation', 'trio-v1' ),
			'filter_items_list'     => __( 'Filter items list', 'trio-v1' ),
		);
		$args = array(
			'label'                 => __( 'Staff', 'trio-v1' ),
			'description'           => __( 'These is our staff', 'trio-v1' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,		
			'exclude_from_search'   => true,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'staff', $args );
		
		// board members
		$labels = array(
			'name'                  => _x( 'Board', 'Post Type General Name', 'trio-v1' ),
			'singular_name'         => _x( 'Board Member', 'Post Type Singular Name', 'trio-v1' ),
			'menu_name'             => __( 'Board Member', 'trio-v1' ),
			'name_admin_bar'        => __( 'Board Member', 'trio-v1' ),
			'archives'              => __( 'Board Member Archives', 'trio-v1' ),
			'attributes'            => __( 'Item Attributes', 'trio-v1' ),
			'parent_item_colon'     => __( 'Parent Item:', 'trio-v1' ),
			'all_items'             => __( 'All Board Members', 'trio-v1' ),
			'add_new_item'          => __( 'Add New Item', 'trio-v1' ),
			'add_new'               => __( 'Add New Board Member', 'trio-v1' ),
			'new_item'              => __( 'New Item', 'trio-v1' ),
			'edit_item'             => __( 'Edit Item', 'trio-v1' ),
			'update_item'           => __( 'Update Item', 'trio-v1' ),
			'view_item'             => __( 'View Item', 'trio-v1' ),
			'view_items'            => __( 'View Items', 'trio-v1' ),
			'search_items'          => __( 'Search Item', 'trio-v1' ),
			'not_found'             => __( 'Not found', 'trio-v1' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'trio-v1' ),
			'insert_into_item'      => __( 'Insert into item', 'trio-v1' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'trio-v1' ),
			'items_list'            => __( 'Items list', 'trio-v1' ),
			'items_list_navigation' => __( 'Items list navigation', 'trio-v1' ),
			'filter_items_list'     => __( 'Filter items list', 'trio-v1' ),
		);
		$args = array(
			'label'                 => __( 'Board Member', 'trio-v1' ),
			'description'           => __( 'These are your board members', 'trio-v1' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,		
			'exclude_from_search'   => true,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'Board', $args );
	}
	add_action( 'init', 'trio_register_custom_post_types', 0 );
}