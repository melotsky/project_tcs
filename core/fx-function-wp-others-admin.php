<?php 
if ( !defined('ABSPATH')) exit;

/************************************/
// WIDGET DECLARATION / START
/************************************/
add_action( 'after_setup_theme', 'remove_default_sidebars', 11 );
function remove_default_sidebars(){
    remove_action( 'widgets_init', 'kickass_widgets_init' );
}
if (function_exists('register_sidebar')) {

	register_sidebar(array(
    	'name' => 'Menu - Footer Position 1',
    	'id'   => 'footermenu1',
    	'description'   => 'Menu - Footer Position 1',
    	'before_widget' => '<aside id="%1$s" class="widget %2$s group footer-menu"><div class="widget-wrap group">',
    	'after_widget'  => '</div></aside>',
    	'before_title'  => '<h3 class="widget-title" style="display: none !important">',
    	'after_title'   => '</h3>'
	));
	
	register_sidebar(array(
    	'name' => 'Menu - Footer Position 2',
    	'id'   => 'footermenu2',
    	'description'   => 'Menu - Footer Position 2',
    	'before_widget' => '<aside id="%1$s" class="widget %2$s group footer-menu"><div class="widget-wrap group">',
    	'after_widget'  => '</div></aside>',
    	'before_title'  => '<h3 class="widget-title" style="display: none !important">',
    	'after_title'   => '</h3>'
	));
	
	register_sidebar(array(
    	'name' => 'Menu - Footer Position 3',
    	'id'   => 'footermenu3',
    	'description'   => 'Menu - Footer Position 3',
    	'before_widget' => '<aside id="%1$s" class="widget %2$s group footer-menu"><div class="widget-wrap group">',
    	'after_widget'  => '</div></aside>',
    	'before_title'  => '<h3 class="widget-title" style="display: none !important">',
    	'after_title'   => '</h3>'
	));
	
	register_sidebar(array(
     	'name' => 'Menu - Footer Position 4',
     	'id'   => 'footermenu4',
     	'description'   => 'Menu - Footer Position 4',
     	'before_widget' => '<aside id="%1$s" class="widget %2$s group footer-menu"><div class="widget-wrap group">',
     	'after_widget'  => '</div></aside>',
     	'before_title'  => '<h3 class="widget-title" style="display: none !important">',
     	'after_title'   => '</h3>'
    ));

}
/************************************/
// WIDGET DECLARATION / END
/************************************/

/************************************/
// REMOVE OTHER PLUGIN ON DASHBOARD / START
/************************************/

function remove_dashboard_widgets(){

	global$wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); 

}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

/************************************/
// REMOVE OTHER PLUGIN ON DASHBOARD / START
/************************************/

/************************************/
// REMOVE OTHER ELEMENTS THAT NEEDS TO HIDE / START
/************************************/
function wps_admin_bar() {
	
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('wp-logo');
	$wp_admin_bar->remove_menu('updates');
	$wp_admin_bar->remove_menu('comments');
	$wp_admin_bar->remove_menu('new-content');
	$wp_admin_bar->remove_menu('wporg');
	//$wp_admin_bar->remove_menu('view-site');
	
	
}

add_action( 'wp_before_admin_bar_render', 'wps_admin_bar' );

/************************************/
// REMOVE OTHER ELEMENTS THAT NEEDS TO HIDE / START
/************************************/


/************************************/
// REMOVE HELP AFTER THE ADMIN BAR IN ADMIN AREA / START
/************************************/
function wpse50723_remove_help($old_help, $screen_id, $screen){
	
	$screen->remove_help_tabs();
	return $old_help;
	
}

add_filter( 'contextual_help', 'wpse50723_remove_help', 999, 3 );
/************************************/
// REMOVE HELP AFTER THE ADMIN BAR IN ADMIN AREA / END
/************************************/


/************************************/
// REMOVE CUSTOMIZE MENU / START
/************************************/
function remove_customize_page(){
	
	global $submenu;
	unset($submenu['themes.php'][6]);
	
}

//add_action( 'admin_menu', 'remove_customize_page');

/************************************/
// REMOVE CUSTOMIZE MENU / END
/************************************/

/************************************/
// ATTACHED MY CSS / START
/************************************/
function pro(){
	
	if (is_admin()) {
		
		wp_register_style( 'pro-style', get_template_directory_uri(). '/assets/css/mini.css', 'all' );
		wp_enqueue_style( 'pro-style' );
		
	}
	
}

add_action('init', 'pro');

/************************************/
// ATTACHED MY CSS / END
/************************************/

/************************************/
// ADD CLASS FPR NEXT AND PREV LINK / START
/************************************/
function add_class_next_post_link($html){
	
	$html = str_replace('<a','<a class="next"',$html);
	return $html;
	
}

function add_class_previous_post_link($html){
	
	$html = str_replace('<a','<a class="prev"',$html);
	return $html;
	
}

add_filter('next_post_link','add_class_next_post_link',10,1);
add_filter('previous_post_link','add_class_previous_post_link',10,1);

/************************************/
// ADD CLASS FPR NEXT AND PREV LINK / START
/************************************/

/************************************/
// ADD CATEGORY ID IN BODY AND POST CLASS / START
/************************************/
function category_id_class($classes) {
	
	global $post;
	foreach((get_the_category($post->ID)) as $category)
	
		$classes [] = 'cat-' . $category->cat_ID . '-id';
		return $classes;
		
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

/************************************/
// ADD CATEGORY ID IN BODY AND POST CLASS / end
/************************************/


/************************************/
// LOGIN LOGO / START
/************************************/
function custom_login_logo() {
	
	$image = get_field('logo_for_login_admin', option);
	$url = $image['url'];
	$width = $image['width'];
	$height = $image['height'];

	echo '<style type="text/css">
	h1 a { background-image: url('. $url .') !important; 
    background-position: center top !important;
    background-repeat: no-repeat !important;
    background-size: '. $width.'px '. $height.'px !important;
    display: block !important;
    height: '. $height.'px !important;
    margin: 0 auto !important;
    overflow: hidden !important;
    padding-bottom: 0 !important;
    text-indent: -9999px !important;
    width: '. $width.'px !important;
	}
	body.login {background: none repeat scroll 0 0 #FFFFFF;}';
	
	settype($width, "integer"); 
		if( $width >= 320 ){
				echo 'body #login{width: '. $width.'px !important;}';	
			}
	echo '</style>'; 
	
}

add_action('login_head', 'custom_login_logo');

/************************************/
// LOGIN LOGO / END
/************************************/


/************************************/
// LINK OF DEVELOPER AT THE BOTTOM OF ADMIN AREA / START
/************************************/
function custom_admin_footer() {
	
	echo '<a target="_blank" href="http://www.cumuluseo.com/" rel="nofollow">Website Designed & Developed by Cumuluseo.com</a>';
	
} 

add_filter('admin_footer_text', 'custom_admin_footer');

/************************************/
// LINK OF DEVELOPER AT THE BOTTOM OF ADMIN AREA / START
/************************************/

/************************************/
// ADD FEATURED IMAGE FOR BLOG POST / START
/************************************/
add_theme_support( 'post-thumbnails' );
/************************************/
// ADD FEATURED IMAGE FOR BLOG POST / END
/************************************/

/************************************/
// GET THE CURRENT URL OF THE PAGE / START
/************************************/

function curPageURL() {
	
	$pageURL = 'http';
		if ($_SERVER["HTTPS"] == "on") {
				$pageURL .= "s";
		}
	$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		}else{
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
	return $pageURL;
		
}

/************************************/
// GET THE CURRENT URL OF THE PAGE / END
/************************************/


/************************************/
// ENABLE WIDGET FOR EDITOR USER START
/************************************/
function pxlcore_give_edit_theme_options( $caps ) {
	
	/* check if the user has the edit_pages capability */
	if( ! empty( $caps[ 'edit_pages' ] ) ) {
		
		/* give the user the edit theme options capability */
		$caps[ 'edit_theme_options' ] = true;
		
	}
	
	/* return the modified capabilities */
	return $caps;
	
}
add_filter( 'user_has_cap', 'pxlcore_give_edit_theme_options' );
/************************************/
// ENABLE WIDGET FOR EDITOR USER END
/************************************/


/************************************/
// GET THE ID OF THE IMAGE URL USING THIS FUNCTION.. START
/************************************/
function pippin_get_image_id($image_url) {
	global $wpdb;
	$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url )); 
        return $attachment[0]; 
}
//SAMPPLES
/**
set the image url
$image_url = 'http://yoursite.com/wp-content/uploads/2011/02/14/image_name.jpg';
 
store the image ID in a var
$image_id = pippin_get_image_id($image_url);
 
retrieve the thumbnail size of our image
$image_thumb = wp_get_attachment_image_src($image_id, 'thumbnail');
 
display the image
echo $image_thumb[0];
**/
/************************************/
// END
/************************************/