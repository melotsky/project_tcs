<?php 
if ( !defined('ABSPATH')) exit;
/************************************/
// IMAGE SIZES / START
/************************************/
if ( function_exists( 'add_image_size' ) ) { 


    add_image_size( 'table_image', 130, 78, false ); //(cropped)  
    
	add_image_size( 'ImageSize', 132, 80, true ); //(cropped)
	add_image_size( 'sliderImage', 969, 401, true ); //(cropped)
	add_image_size( 'contactImage', 641, 401, true ); //(cropped)
    add_image_size( 'cptThumb', 310, 200, true ); //(cropped)
    add_image_size( 'block_bg_abt_us_3_cols', 359, 211, true ); //(cropped)
    add_image_size( 'top_review_logo', 66, 66, true ); //(cropped)
    add_image_size( 'post_thumb_masonry', 360, 300, false ); //(cropped)
    add_image_size( 'post_thumb_masonry2', 360, 9999, false ); //(cropped)
    add_image_size( 'post_thumb_masonry3', 360, 218, true ); //(cropped)    
    add_image_size( 'author_thumb', 60, 60, true ); //(cropped)
    add_image_size( 'bg_featured_post', 1040, 600, true ); //(cropped)

    add_image_size( 'bg_single_temp', 945, 600, true ); //(cropped)
    add_image_size( 'intro_img', 1148, 9999, false ); //(cropped)
    add_image_size( 'bg_about_img', 1040, 729, true ); //(cropped)

    add_image_size( 'blog_img_form', 639, 479, true ); //(cropped)

    add_image_size( 'banner_desktop', 1148, 9999, false ); //(cropped)    
    add_image_size( 'banner_mobile', 700, 9999, false ); //(cropped)    


    add_image_size( 'banner_event', 575, 136, true ); //(cropped)    

    add_image_size( 'game_provider_logo', 200, 9999, false ); //(cropped)    
    add_image_size( 'game_provider_logo_lic', 213, 9999, false ); //(cropped)    

}
/************************************/
// IMAGE SIZES / END
/************************************/