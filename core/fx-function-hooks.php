<?php 
if ( !defined('ABSPATH')) exit;

require_once( dirname(__FILE__) . '/hooks/header-hook.php'); // OPTION THEME / ACF
require_once( dirname(__FILE__) . '/hooks/footer-hook.php'); // OPTION THEME / ACF
require_once( dirname(__FILE__) . '/hooks/slidebar-hook.php'); // OPTION THEME / ACF



function nav_cat() {
    do_action('nav_cat');
}


function the_categories(){

    $the_categories  = "<div class=\"portfolio-menu group\">";
    $the_categories .= "<button data-filter=\"*\" class=\"selected\">all</button> ";

	$parent = get_category_by_slug( 'project-type' )->term_id;
	$args   = array(
		'parent' => $parent,
    );
    $target = 3;
	$terms  = get_terms( 'category', $args );  // get all categories, but you can use any taxonomy
    if ( count( $terms ) > 0 ) {  //If there are more than 0 terms
        $counter = 1;
	    foreach ( $terms as $term ) {  //for each term:
            $the_categories .= "<button data-filter=\"." . $term->slug . "\">" . $term->name . "</button> ";
            if ( $counter === $target): break; endif;
            $counter++;
	    }
    }
    
    echo $the_categories;
	?>
    </div>
<?php }



add_action('nav_cat', 'the_categories', 1);

function featured_img(){
    global $post;
    //$post->ID
    if (has_post_thumbnail( $post->ID ) ):
        //$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post_thumb_masonry2' );
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post_thumb_masonry3' );
        $featured_img = $image[0];
    else:
        $featured_img = get_template_directory_uri() . "/assets/css/images/featured-img.png";
    endif;
    $post_title = get_the_title($post->ID);
    $featured_img_output = "<img src=\"{$featured_img}\" alt=\"{$post_title}\" title=\"{$post_title}\" class=\"iso__img\" />";
    return $featured_img_output;
}

// Remove Shortcodes from excerpt
function diwp_remove_shortcode_from_excerpt($content) {
   
    $content = strip_shortcodes( $content );
     
    return $content;
}
 
add_filter('the_excerpt', 'diwp_remove_shortcode_from_excerpt');