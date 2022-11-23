<?php 
if ( !defined('ABSPATH')) exit;

/************************************/
// TITLE CONTROLLER / START
/************************************/
add_theme_support( 'title-tag' );

function mayer_wp_title( $title, $sep ) {
	global $paged, $page;
		if ( is_feed() ) {
			return $title;
		}

	$title .= get_bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );

		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title = "$title $sep $site_description";
		}

		if ( $paged >= 2 || $page >= 2 ) {
			$title = sprintf( __( 'Page %s', 'mayer' ), max( $paged, $page ) ) . " $sep $title";
		}
	return $title;
}

add_filter( 'wp_title', 'mayer_wp_title', 10, 2 );
/************************************/
// TITLE CONTROLLER / END
/************************************/

/************************************/
// DETECTOR / START
/************************************/
function mv_browser_body_class($classes) {
	
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone, $is_edge;
	if($is_lynx) $classes[] = 'lynx';
		elseif($is_gecko) $classes[] = 'firefox';
		elseif($is_opera) $classes[] = 'opera';
		elseif($is_NS4) $classes[] = 'ns4';
		elseif($is_safari) $classes[] = 'safari';
		elseif($is_chrome) $classes[] = 'chrome';
		elseif($is_edge) $classes[] = 'edge';
		elseif($is_IE) {
			$classes[] = 'ie';
			if(preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version))
				$classes[] = 'ie'.$browser_version[1];
			} else $classes[] = 'unknown';
		if($is_iphone) $classes[] = 'iphone';
		if ( stristr( $_SERVER['HTTP_USER_AGENT'],"mac") ) {
				$classes[] = 'osx';
			}elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"linux") ) {
				$classes[] = 'linux';
			} elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"windows") ) {
				$classes[] = 'windows';
			}
	return $classes;
}
add_filter('body_class','mv_browser_body_class');

/************************************/
// DETECTOR / START
/************************************/

/************************************/
// REMOVE JUNK ON HEADER / START
/************************************/

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

/************************************/
// REMOVE JUNK ON HEADER / END
/************************************/

/************************************/
// FIXED OUTPUT OF IMAGE / START
/************************************/
function filter_ptags_on_images($content){
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');
/************************************/
// FIXED OUTPUT OF IMAGE / END
/************************************/

/************************************/
// REMOVE IMAGE TITLE ATTRIBUTE / START
/************************************/
function mytheme_wp_get_attachment_image_attributes( $attr ) {

	unset($attr['title']);
	return $attr;

}

//add_filter( 'wp_get_attachment_image_attributes', 'mytheme_wp_get_attachment_image_attributes' );

/************************************/
// REMOVE IMAGE TITLE ATTRIBUTE / END
/************************************/


/************************************/
// SHORTENT THE TEXT / START
/************************************/
function ShortenText($text) {

	$chars_limit = 105; // Character length
	$chars_text = strlen($text);
	$text = $text." ";
	$text = substr($text,0,$chars_limit);
	$text = substr($text,0,strrpos($text,' '));
	
	if ($chars_text > $chars_limit) {
		$text = $text."..."; // Ellipsis
	}
return $text;
}
//output:  echo ShortenText(get_the_title()); 


function blogFeaturedTitle($text) {

	$chars_limit = 38; // Character length
	$chars_text = strlen($text);
	$text = $text."..";
	$text = substr($text,0,$chars_limit);
	$text = substr($text,0,strrpos($text,' '));
	
	if ($chars_text > $chars_limit) {
		$text = $text.".."; // Ellipsis
	}
return $text;
}
//output:  echo blogFeaturedTitle(get_the_title()); 

/************************************/
// SHORTENT THE TEXT / END
/************************************/



/**
 * remove the query strings
 */
function _remove_script_version( $src ){
   $parts = explode( '?ver', $src );
   return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );


/**
* change the default image optimizer quality
**/
add_filter( 'jpeg_quality', function() {return 70;} );

/************************************/
// CHANGE THE --- on SELECT TAG OF CONTACT FORM 7
/************************************/
function my_wpcf7_dropdown_form($html) {
	$text = 'NEW TEXT HERE';
	$html = str_replace('---', '' . $text . '', $html);
	return $html;
}
//add_filter('wpcf7_form_elements', 'my_wpcf7_dropdown_form');
/************************************/
// CHANGE THE --- on SELECT TAG OF CONTACT FORM 7
/************************************/

//REMOVE AUTOP of Contact Form 7
add_filter( 'wpcf7_autop_or_not', '__return_false' );


/************************************/
// REDIRECT THE USER WHEN TRYING TO ACCESS IN FRONT END START
/************************************/
function author_page_redirect() {
    if ( is_author() ) {
        wp_redirect( home_url() );
    }
    if ( is_category() ) {
        wp_redirect( home_url() );
    }
}
//add_action( 'template_redirect', 'author_page_redirect' );
/************************************/
// REDIRECT THE USER WHEN TRYING TO ACCESS IN FRONT END END
/************************************/

/************************************/
// DISABLE COMMENTS ON MEDIA PAGE START
/************************************/
function filter_media_comment_status( $open, $post_id ) {
    $post = get_post( $post_id );
    if( $post->post_type == 'attachment' ) {
        return false;
    }
    return $open;
}
add_filter( 'comments_open', 'filter_media_comment_status', 10 , 2 );
/************************************/
// DISABLE COMMENTS ON MEDIA PAGE END
/************************************/


/************************************/
// GET DOMAIN NAME ONLY START
/************************************/

function getDomain($url){
    $pieces = parse_url($url);
    $domain = isset($pieces['host']) ? $pieces['host'] : '';
    if(preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)){
        return $regs['domain'];
    }
    return FALSE;
}

//sample
/* $theUrl = get_site_url() ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo getDomain($theUrl);?></a> */
//echo getDomain("http://example.com"); // outputs 'example.com'
//echo getDomain("http://www.example.com"); // outputs 'example.com'
/************************************/
// GET DOMAIN NAME ONLY START
/************************************/

add_post_type_support( 'page', 'excerpt' );

// 	GENERATE RANDOM STRING
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
// EG: echo generateRandomString(); or $var = generateRandomString();
//DISABLE THE ERRORS IN PHP
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );


function get_the_browser()
{
if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)
   return 'Internet explorer';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== false)
    return 'Internet explorer';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false)
   return 'Mozilla Firefox';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false)
   return 'Google Chrome';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false)
   return "Opera Mini";
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== false)
   return "Opera";
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== false)
   return "Safari";
 else
   return 'Other';
}