<?php 
if ( !defined('ABSPATH')) exit;

if (!is_admin()) {
/************************************/
// INLCUDE THE JQUERY USED BY THE WORDPRESS SAME WITH OTHER THEMES LIKE 2010 TO 2015 / START
/************************************/
function theme_scripts() {
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'theme_scripts');





/************************************/
// LOAD JS / START
/************************************/
function fx_js() {

	//wp_register_script('jquery_footer', get_template_directory_uri(). '/assets/js/jquery.js', array('jquery'), '', true ); // JQUERY
	//wp_enqueue_script('jquery_footer');    

	wp_register_script('jquery_hoverintent', get_template_directory_uri(). '/assets/js/hoverIntent.js', array('jquery'), '', true ); // JQUERY SUPERFISH
	wp_enqueue_script('jquery_hoverintent');
	
	wp_register_script('jquery_superfish', get_template_directory_uri(). '/assets/js/superfish.js', array('jquery'), '', true ); // JQUERY SUPERFISH
	wp_enqueue_script('jquery_superfish');
	
	wp_register_script('jquery_superfish_settings', get_template_directory_uri(). '/assets/js/js-superfish-settings.js', array('jquery'), '', true ); // JQUERY SUPERFISH
	wp_enqueue_script('jquery_superfish_settings');
	
	
	wp_register_script('jquery_slicknav', get_template_directory_uri(). '/assets/js/jquery.slicknav.min.js', array('jquery'), '', true ); // JQUERY FLEXNAV
	wp_enqueue_script('jquery_slicknav');
	
	wp_register_script('jquery_slicknav_settings', get_template_directory_uri(). '/assets/js/js-slicknav-settings.js', array('jquery'), '', true ); // JQUERY FLEXNAV
	wp_enqueue_script('jquery_slicknav_settings');
	
	wp_register_script('jquery_slidebars', get_template_directory_uri(). '/assets/js/slidebars.min.js', array('jquery'), '', true ); // SLIDEBARS
	wp_enqueue_script('jquery_slidebars');
	
	wp_register_script('jquery_slidebars_settings', get_template_directory_uri(). '/assets/js/js-slidebars-settings.js', array('jquery'), '', true ); // SLIDEBAR SETTINGS
	wp_enqueue_script('jquery_slidebars_settings');
	
	wp_register_script('jquery_ham_settings', get_template_directory_uri(). '/assets/js/ham-settings.js', array('jquery'), '', true ); // HAM SETTINGS
	wp_enqueue_script('jquery_ham_settings');
	
	
	//wp_register_script('jquery_slickcaro_settings', get_template_directory_uri(). '/assets/js/js-slickslider-settings.js', array('jquery'), '', true ); // FRESCO
	//wp_enqueue_script('jquery_slickcaro_settings');

	wp_register_script('jquery_waypoint', get_template_directory_uri(). '/assets/js/jquery.waypoints.min.js', array('jquery'), '', true ); // FRESCO
	wp_enqueue_script('jquery_waypoint');
	
	wp_enqueue_script( 'isotope', get_template_directory_uri(). '/assets/js/isotope.pkgd.min.js', array('jquery'), '', true ); 
    wp_enqueue_script('isotope');
    
	wp_enqueue_script( 'imagesloaded', get_template_directory_uri(). '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), '', true ); 
    wp_enqueue_script('imagesloaded');
    
	wp_enqueue_script( 'infinite', get_template_directory_uri(). '/assets/js/infinite-scroll.pkgd.min.js', array('jquery'), '', true ); 
	wp_enqueue_script('infinite');
    
	wp_enqueue_script( 'custom_script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '', true );
    wp_enqueue_script('custom_script');

	//wp_enqueue_script( 'google-jUi', get_template_directory_uri(). '/assets/js/jquery-ui/jquery-ui.js', array('jquery'), '', true ); 
    //wp_enqueue_script('google-jUi');
        
	// wp_enqueue_script( 'jquery-ui-tooltip', array('jquery'), '', true );
	// wp_enqueue_script('jquery-ui-tooltip');

    wp_register_script('jquery_magnific', get_template_directory_uri(). '/assets/js/magnific-popup.js', array('jquery'), '', true ); // magnific
	wp_enqueue_script('jquery_magnific');
}
 
add_action('init', 'fx_js', 1);

/************************************/
// LOAD JS / END
/************************************/
}