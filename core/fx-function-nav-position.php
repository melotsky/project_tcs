<?php 
if ( !defined('ABSPATH')) exit;

/************************************/
// MENU POSITION / START
/************************************/
register_nav_menus( array(

    'main-nav-top-position' => __( 'Main Nav Top Position', '' ),
    'main-nav-footer-position' => __( 'Main Nav Footer Position', '' ),
    'footer-position-solution' => __( 'Footer position for Solution', '' ),
    'footer-position-gameproviders1' => __( 'Footer position for Game Providers 1', '' ),
    'footer-position-gameproviders2' => __( 'Footer position for Game Providers 2', '' ),
    'footer-position-gameproviders3' => __( 'Footer position for Game Providers 3', '' ),
    'footer-position-aboutus1' => __( 'Footer position for About Us 1', '' ),
    'footer-position-aboutus2' => __( 'Footer position for About Us 2', '' ),
    'footer-position-legal1' => __( 'Footer position for Legal 1', '' ),
    'footer-position-legal2' => __( 'Footer position for Legal 2', '' )


	
) );
/************************************/
// MENU POSITION / END
/************************************/

/************************************/
// FUNCTION TO ECHO THE TITLE OF MENU START
/************************************/
function kamote($location) {
	$menu_location = $location;
	$menu_locations = get_nav_menu_locations();
	$menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
	$menu_name = (isset($menu_object->name) ? $menu_object->name : '');
	$titileraw = esc_html($menu_name);
	return $titileraw;
}

// echo kamote('MENU-POSITION');
/************************************/
// FUNCTION TO ECHO THE TITLE OF MENU END
/************************************/