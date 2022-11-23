<?php 
if ( !defined('ABSPATH')) exit;

// ACF DECLARATION

add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
    $path = get_template_directoryi() . '/assets/acf/';
	return $path;    
}

add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
    $dir = get_template_directory_uri() . '/assets/acf/';
    return $dir;
}

//add_filter('acf/settings/show_admin', '__return_false');  //ENABLE THIS AFTER DEVELOPMENT WAS DONE

include_once( get_template_directory() . '/assets/acf/acf.php' );
//include_once( get_stylesheet_directory() . '/assets/acf/acf.php' );

// TABS FOR OPTION THEME
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Beam Settings',
		'menu_title'	=> 'Beam Settings',
	 	'parent_slug'	=> 'theme-general-settings',
	));        

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Popup Form Settings',
		'menu_title'	=> 'Popup Form Settings',
	 	'parent_slug'	=> 'theme-general-settings',
	));    

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Options',
	 	'menu_title'	=> 'Footer Options',
	 	'parent_slug'	=> 'theme-general-settings',
	));

	
	
}

//add_action('after_setup_theme', 'my_load_plugin');
//function my_load_plugin() {
//	if ( ! function_exists('include_field_types_typography') ){
//		include_once( get_template_directory() . '/assets/acf-typography-master/acf-typography.php');
//	}
//}


//GENERATE CUSTOM CSS FILE 
function generate_options_css() {
    $ss_dir = get_template_directory();
    ob_start(); 
    require(dirname(__FILE__) . '/melster-theme-style.php'); // Grab the custom-style.php file
    $css = ob_get_clean();
    file_put_contents(get_template_directory() . '/assets/css/custom-styles.css', $css, LOCK_EX); // Save it as a css file
}
//add_action( 'acf/save_post', 'generate_options_css' ); //Parse the output and write the CSS file on post save

// STYLE FOR ADMIN AREA ACF
function my_acf_admin_head()
{}

//add_action('acf/input/admin_head', 'my_acf_admin_head');
// STYLE FOR ADMIN AREA ACF

//SAVE ACF FIELDS
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    $path = get_template_directory() . '/assets/acf/acf-json';
    return $path;
}

//LOADS ACF FIELDS
add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    unset($paths[0]);
    $paths[] = get_template_directory() . '/assets/acf/acf-json';
        return $paths;
}

function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyBi2V8Iw1gUnx1trNAXqg-btB9bGtK7mUc');  // Change the GOOGLE MAP API KEY if necessary.
}

//add_action('acf/init', 'my_acf_init');