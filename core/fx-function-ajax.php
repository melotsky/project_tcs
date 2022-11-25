<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'functions.php' == basename($_SERVER['SCRIPT_FILENAME']))
{
die ('No access!');
}

function misha_my_load_more_scripts() {
 
 global $wp_query; 

 wp_enqueue_script('jquery');

 // register our main script but do not enqueue it yet
 wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/assets/js/myloadmore.js', array('jquery') );

 wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
     'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
     'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
     'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
     'max_page' => $wp_query->max_num_pages
 ) );

  wp_enqueue_script( 'my_loadmore' );
}

add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );

function misha_loadmore_ajax_handler(){

 // prepare our arguments for the query
 $args = json_decode( stripslashes( $_POST['query'] ), true );
 $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
 $args['post_status'] = 'publish';

 // it is always better to use WP_Query but not here
 query_posts( $args );

 if( have_posts() ) :

     // run the loop
     while( have_posts() ): the_post();
         get_template_part( '/template-parts/post/content', get_post_format() );
     endwhile;

 endif;
 die; // here we exit the script and even no wp_reset_query() required!
}

add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}