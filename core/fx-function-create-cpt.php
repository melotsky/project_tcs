<?php 
if ( !defined('ABSPATH')) exit;

/************************************/
// CREATE CPT PROJECTS / START
/************************************/

function my_custom_post_banner() {
	$labels = array(
		'name'               => _x( 'Banners', 'post type general name' ),
		'singular_name'      => _x( 'Banners', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Banners' ),
		'add_new_item'       => __( 'Add New Banners' ),
		'edit_item'          => __( 'Edit Banners' ),
		'new_item'           => __( 'New Banner' ),
		'all_items'          => __( 'All Banners' ),
		'view_item'          => __( 'View Banners' ),
		'search_items'       => __( 'Search Banners' ),
		'not_found'          => __( 'No Banners found' ),
		'not_found_in_trash' => __( 'No Banners found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Banners'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'For Banners only',
		'public'        => true, // make it false if you would like to unaccessible outside...

		"show_in_rest" => false,		
		"publicly_queryable" => false,
//		"show_ui" => true,
//		"rest_base" => "",
		
		'menu_position' => 5,
		'supports'      => array( 'title'),
		'has_archive'   => false,
		'menu_icon'     => 'dashicons-shield',
        'exclude_from_search' => true,
		'rewrite' => array( 'slug' => 'banner' )
	);
	register_post_type( 'banner', $args );	
}
add_action( 'init', 'my_custom_post_banner' );



function create_my_taxonomies_for_projects() {
		register_taxonomy('projects_category', 'projects', array(
		'hierarchical' => true, 'label' => 'Project Category',
		'query_var' => true, 'rewrite' => true));
        
}
//add_action('init', 'create_my_taxonomies_for_projects', 0);

/************************************/
// CREATE CPT PROJECTS / START
/************************************/