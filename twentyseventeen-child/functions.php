<?php
/**
 * Twenty Seventeen Child functions and definitions
 * Author - Sourabh Kumar
 */

function theme_enqueue_styles() {

	$parent_style = 'parent-style'; // This is 'twentyseventeen-style' for the Twenty Seventeen theme.

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
	);
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function create_post_type_email() {
	// set up labels
	$labels = array(
		'name' => 'HTML Email',
		'singular_name' => 'HTML Email',
		'add_new' => 'Add New HTML Email',
		'add_new_item' => 'Add New HTML Email',
		'edit_item' => 'Edit HTML Email',
		'new_item' => 'New HTML Email',
		'all_items' => 'All HTML Emails',
		'view_item' => 'View HTML Email',
		'search_items' => 'Search HTML Emails',
		'not_found' =>  'No HTML Emails Found',
		'not_found_in_trash' => 'No HTML Emails found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'HTML Email Builder',
	);
	//register post type
	register_post_type( 'html-email', array(
		'labels' => $labels,
		'has_archive' => false,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes', 'featured-image' ),
		'taxonomies' => array( 'post_tag', 'category' ),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'html-email' ),
		'query_var'=> true,
		)
	);
}
add_action( 'init', 'create_post_type_email' );

function create_post_type_newsletter() {
	// set up labels
	$labels = array(
		'name' => 'Alumni Link Newsletter',
		'singular_name' => 'Alumni Link Newsletter',
		'add_new' => 'Add New Alumni Link Newsletter',
		'add_new_item' => 'Add New Alumni Link Newsletter',
		'edit_item' => 'Edit Alumni Link Newsletter',
		'new_item' => 'New Alumni Link Newsletter',
		'all_items' => 'All Alumni Link Newsletters',
		'view_item' => 'View Alumni Link Newsletter',
		'search_items' => 'Search Alumni Link Newsletters',
		'not_found' =>  'No Alumni Link Newsletters Found',
		'not_found_in_trash' => 'No Alumni Link Newsletters found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'Alumni Link Newsletter Builder',
	);
	//register post type
	register_post_type( 'alumni-link', array(
		'labels' => $labels,
		'has_archive' => false,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes', 'featured-image' ),
		'taxonomies' => array( 'post_tag', 'category' ),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'alumni-link' ),
		'query_var'=> true,
		)
	);
}
add_action( 'init', 'create_post_type_newsletter' );


function create_post_type_event() {
	// set up labels
	$labels = array(
		'name' => 'Event Description',
		'singular_name' => 'Event Description',
		'add_new' => 'Add New Event Description',
		'add_new_item' => 'Add New Event Description',
		'edit_item' => 'Edit Event Description',
		'new_item' => 'New Event Description',
		'all_items' => 'All Event Description',
		'view_item' => 'View Event Description',
		'search_items' => 'Search Event Description',
		'not_found' =>  'No Event Description Found',
		'not_found_in_trash' => 'No Event Description found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'Event Description Builder',
	);
	//register post type
	register_post_type( 'event-description', array(
		'labels' => $labels,
		'has_archive' => false,
		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes', 'featured-image' ),
		'taxonomies' => array( 'post_tag', 'category' ),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'event-description' ),
		'query_var'=> true,
		)
	);
}
add_action( 'init', 'create_post_type_event' );



?>