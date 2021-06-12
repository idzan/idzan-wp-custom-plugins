<?php
/*
Plugin Name: Projects and Portfolio (Custom Post Type)
Plugin URI: https://idzan.eu
Description: Custom Post Type for Portfolio and Projects
Version: 1.0
Author: Idzan Marko
Author URI: https://idzan.eu
License: GPLv3
*/

add_action( 'init', 'idzan_projects_projects_post_type' );
function idzan_projects_projects_post_type() {
	$args = [
		'label'  => esc_html__( 'Projects', 'text-domain' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Projects', 'idzan-projects' ),
			'name_admin_bar'     => esc_html__( 'Project', 'idzan-projects' ),
			'add_new'            => esc_html__( 'Add Project', 'idzan-projects' ),
			'add_new_item'       => esc_html__( 'Add new Project', 'idzan-projects' ),
			'new_item'           => esc_html__( 'New Project', 'idzan-projects' ),
			'edit_item'          => esc_html__( 'Edit Project', 'idzan-projects' ),
			'view_item'          => esc_html__( 'View Project', 'idzan-projects' ),
			'update_item'        => esc_html__( 'View Project', 'idzan-projects' ),
			'all_items'          => esc_html__( 'All Projects', 'idzan-projects' ),
			'search_items'       => esc_html__( 'Search Projects', 'idzan-projects' ),
			'parent_item_colon'  => esc_html__( 'Parent Project', 'idzan-projects' ),
			'not_found'          => esc_html__( 'No Projects found', 'idzan-projects' ),
			'not_found_in_trash' => esc_html__( 'No Projects found in Trash', 'idzan-projects' ),
			'name'               => esc_html__( 'Projects', 'idzan-projects' ),
			'singular_name'      => esc_html__( 'Project', 'idzan-projects' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-welcome-write-blog',
		'supports' => [
			'title',
			'editor',
			'thumbnail',
			'custom-fields',
		],
		'taxonomies' => [
			'category',
			'tag',
		],
		'rewrite' => true
	];

	register_post_type( 'project', $args );
}