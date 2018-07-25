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

/*======================================================================
	Post type HTML Email
----------------------------------------------------------------------*/
//Creating a custom post type
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


// Editing Custom Post Type columns
function set_custom_edit_html_email_columns( $columns ) {
	$date = $colunns['date'];
	unset( $columns['date'] );
	unset($columns['tags']);
	$columns['due_date'] = __( 'Due Date', 'my-text-domain' );
	$columns['date'] = $date;
	return $columns;
}
add_filter( 'manage_html-email_posts_columns', 'set_custom_edit_html_email_columns' );

// Adding Data to the New Columns
function custom_html_email_column( $column, $post_id ) {
  switch ( $column ) {
	// display the value of an ACF (Advanced Custom Fields) field
	case 'due_date' :
		echo get_field( 'due_date', $post_id );  
		break;

	}
}
add_action( 'manage_html-email_posts_custom_column' , 'custom_html_email_column', 10, 2 );

// Sorting based on due dates.
function set_custom_html_email_sortable_columns( $columns ) {
	$columns['due_date'] = 'due_date';

	return $columns;
}
add_filter( 'manage_edit-html-email_sortable_columns', 'set_custom_html_email_sortable_columns' );

function html_email_custom_orderby( $query ) {
	if ( ! is_admin() )
		return;
	$orderby = $query->get('orderby');

	if ( $orderby == 'due_date') {
		$query->set( 'meta_key', 'due_date' );
		$query->set( 'orderby', 'meta_value' );
	}
}
add_action( 'pre_get_posts', 'html_email_custom_orderby' );


/* ----------------------------------------------------------------------------
 * Post type Newsletter
 * ------------------------------------------------------------------------- */ 
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

// Editing Custom Post Type columns
function set_custom_edit_alumni_link_columns( $columns ) {
	$date = $colunns['date'];
	unset( $columns['date'] );
	unset($columns['tags']);
	$columns['due_date'] = __( 'Due Date', 'my-text-domain' );
	$columns['date'] = $date;
	return $columns;
}
add_filter( 'manage_alumni-link_posts_columns', 'set_custom_edit_alumni_link_columns' );

// Adding Data to the New Columns
function custom_alumni_link_column( $column, $post_id ) {
	switch ( $column ) {
	// display the value of an ACF (Advanced Custom Fields) field
		case 'due_date' :
			echo get_field( 'due_date', $post_id );  
			break;

	}
}
add_action( 'manage_alumni-link_posts_custom_column' , 'custom_alumni_link_column', 10, 2 );

// Sorting based on due dates.
function set_custom_alumni_link_sortable_columns( $columns ) {
	$columns['due_date'] = 'due_date';

	return $columns;
}
add_filter( 'manage_edit-alumni-link_sortable_columns', 'set_custom_alumni_link_sortable_columns' );

function alumni_link_custom_orderby( $query ) {
	if ( ! is_admin() )
		return;
	$orderby = $query->get('orderby');

	if ( $orderby == 'due_date') {
		$query->set( 'meta_key', 'due_date' );
		$query->set( 'orderby', 'meta_value' );
	}
}
add_action( 'pre_get_posts', 'alumni_link_custom_orderby' );



/*======================================================================
	Post type Event Description
----------------------------------------------------------------------*/
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


// add CPTs to "At a Glance" dashboard widget
add_action( 'dashboard_glance_items', 'cpad_at_glance_content_table_end' );
function cpad_at_glance_content_table_end() {
    $args = array(
        'public' => true,
        '_builtin' => false
    );
    $output = 'object';
    $operator = 'and';

    $post_types = get_post_types( $args, $output, $operator );
    foreach ( $post_types as $post_type ) {
        $num_posts = wp_count_posts( $post_type->name );
        $num = number_format_i18n( $num_posts->publish );
        $text = _n( $post_type->labels->singular_name, $post_type->labels->name, intval( $num_posts->publish ) );
        if ( current_user_can( 'edit_posts' ) ) {
            $output = '<a href="edit.php?post_type=' . $post_type->name . '">' . $num . ' ' . $text . '</a>';
            echo '<li class="post-count ' . $post_type->name . '-count">' . $output . '</li>';
            } else {
            $output = '<span>' . $num . ' ' . $text . '</span>';
                echo '<li class="post-count ' . $post_type->name . '-count">' . $output . '</li>';
            }
    }
}

// Create custom WordPress dashboard widget
/*
function dashboard_widget_function() {
	echo '
		<h2>Custom Dashboard Widget</h2>
		<p>Custom content here</p>
	';
}
function add_dashboard_widgets() {
	wp_add_dashboard_widget( 'custom_dashboard_widget', 'Custom Dashoard Widget', 'dashboard_widget_function' );
}
add_action( 'wp_dashboard_setup', 'add_dashboard_widgets' );

*/

?>