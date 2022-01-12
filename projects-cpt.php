<?php
/*
Plugin Name: Portfolio
Plugin URI: https://idzan.eu
Description: Custom Post Type for Portfolio
Version: 1.1
Author: Idzan Marko
Author URI: https://idzan.eu
License: GPLv3
*/

/* Custom Post Type - Projects */
function idzan_project_cpt() {

    $labels = array(
        'name' => _x( 'Projects', 'Post Type General Name', 'idzan-projects' ),
        'singular_name' => _x( 'Project', 'Post Type Singular Name', 'idzan-projects' ),
        'menu_name' => _x( 'Projects', 'Admin Menu text', 'idzan-projects' ),
        'name_admin_bar' => _x( 'Project', 'Add New on Toolbar', 'idzan-projects' ),
        'archives' => __( 'Project', 'idzan-projects' ),
        'attributes' => __( 'Project', 'idzan-projects' ),
        'parent_item_colon' => __( 'Project', 'idzan-projects' ),
        'all_items' => __( 'All Projects', 'idzan-projects' ),
        'add_new_item' => __( 'Add New Project', 'idzan-projects' ),
        'add_new' => __( 'Add New', 'idzan-projects' ),
        'new_item' => __( 'New Project', 'idzan-projects' ),
        'edit_item' => __( 'Edit Project', 'idzan-projects' ),
        'update_item' => __( 'Update Project', 'idzan-projects' ),
        'view_item' => __( 'View Project', 'idzan-projects' ),
        'view_items' => __( 'View Projects', 'idzan-projects' ),
        'search_items' => __( 'Search Project', 'idzan-projects' ),
        'not_found' => __( 'Not found', 'idzan-projects' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'idzan-projects' ),
        'featured_image' => __( 'Featured Image', 'idzan-projects' ),
        'set_featured_image' => __( 'Set featured image', 'idzan-projects' ),
        'remove_featured_image' => __( 'Remove featured image', 'idzan-projects' ),
        'use_featured_image' => __( 'Use as featured image', 'idzan-projects' ),
        'insert_into_item' => __( 'Insert into Project', 'idzan-projects' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Project', 'idzan-projects' ),
        'items_list' => __( 'Projects list', 'idzan-projects' ),
        'items_list_navigation' => __( 'Projects list navigation', 'idzan-projects' ),
        'filter_items_list' => __( 'Filter Projects list', 'idzan-projects' ),
    );
    
    $args = array(
        'label' => __( 'Project', 'idzan-projects' ),
        'description' => __( 'Personal Projects', 'idzan-projects' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies' => array('projectcategory', 'projecttechnologies'),
        'hierarchical' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'has_archive' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'menu_position' => 5,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );
    
    register_post_type( 'project', $args );

}
add_action( 'init', 'idzan_project_cpt', 0 );

/* Taxonomy for Projects - Category of Projects */
function idzan_project_category() {
	$labels = array(
		'name'              => _x( 'Project Categories', 'taxonomy general name', 'idzan-project-category' ),
		'singular_name'     => _x( 'Project Category', 'taxonomy singular name', 'idzan-project-category' ),
		'search_items'      => __( 'Search Project Categories', 'idzan-project-category' ),
		'all_items'         => __( 'All Project Categories', 'idzan-project-category' ),
		'parent_item'       => __( 'Parent Project Category', 'idzan-project-category' ),
		'parent_item_colon' => __( 'Parent Project Category:', 'idzan-project-category' ),
		'edit_item'         => __( 'Edit Project Category', 'idzan-project-category' ),
		'update_item'       => __( 'Update Project Category', 'idzan-project-category' ),
		'add_new_item'      => __( 'Add New Project Category', 'idzan-project-category' ),
		'new_item_name'     => __( 'New Project Category Name', 'idzan-project-category' ),
		'menu_name'         => __( 'Project Category', 'idzan-project-category' ),
	);
    
	$args = array(
		'labels' => $labels,
		'description' => __( 'Category of Work (example: Web Dev, Web Design, Web Admin etc.)', 'idzan-project-category' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'projectcategory', array('project'), $args );

}
add_action( 'init', 'idzan_project_category' );

/* Taxonomy for Projects - Technologies of Projects */
function idzan_project_technology() {
	$labels = array(
		'name'              => _x( 'Project Technologies', 'taxonomy general name', 'idzan-project-technology' ),
		'singular_name'     => _x( 'Project Technology', 'taxonomy singular name', 'idzan-project-technology' ),
		'search_items'      => __( 'Search Project Technologies', 'idzan-project-technology' ),
		'all_items'         => __( 'All Project Technologies', 'idzan-project-technology' ),
		'parent_item'       => __( 'Parent Project Technology', 'idzan-project-technology' ),
		'parent_item_colon' => __( 'Parent Project Technology:', 'idzan-project-technology' ),
		'edit_item'         => __( 'Edit Project Technology', 'idzan-project-technology' ),
		'update_item'       => __( 'Update Project Technology', 'idzan-project-technology' ),
		'add_new_item'      => __( 'Add New Project Technology', 'idzan-project-technology' ),
		'new_item_name'     => __( 'New Project Technology Name', 'idzan-project-technology' ),
		'menu_name'         => __( 'Project Technology', 'idzan-project-technology' ),
	);
    
	$args = array(
		'labels' => $labels,
		'description' => __( 'Used Technologies (WordPress, WooCommerce, HTML etc.)', 'idzan-project-technology' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'projecttechnologies', array('project'), $args );

}
add_action( 'init', 'idzan_project_technology' );