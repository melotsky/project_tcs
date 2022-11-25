<?php 
if ( !defined('ABSPATH')) exit;

// This are the block used for home page START

function latest_posts_masonry() {
    acf_register_block_type(array(
        'name'              => 'latest-posts-masonry',
        'title'             => __('Latest Posts'),
        'description'       => __('Latest Posts'),
        'render_template'   => './inc/blocks/latest-posts-masonry/latest-posts-masonry.php',
        'category'          => 'common blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'latest-posts-masonry', 'quote' ),
        'mode'              => 'false',
        //'enqueue_script'    => '/wp-includes/js/masonry.min.js' ,
    ));
}

function banner_mobile_desktop() {
    acf_register_block_type(array(
        'name'              => 'banner-mobile-desktop',
        'title'             => __('Banner Image Mobile/Desktop'),
        'description'       => __('Banner Image Mobile/Desktop'),
        'render_template'   => './inc/blocks/banner-mobile-desktop/banner-mobile-desktop.php',
        'category'          => 'common blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'banner-mobile-desktop', 'quote' ),
        'mode'              => 'false'
        //'enqueue_script'    => '/wp-includes/js/masonry.min.js' ,
    ));
}

function casino_software_table() {
    acf_register_block_type(array(
        'name'              => 'casino-software-table',
        'title'             => __('Casino Software Table'),
        'description'       => __('Casino Software Table'),
        'render_template'   => './inc/blocks/casino-software-table/casino-table.php',
        'category'          => 'common blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'casino-software-table', 'quote' ),
        'mode'              => 'false'
        //'enqueue_script'    => '/wp-includes/js/masonry.min.js' ,
    ));
}

function game_provider() {
    acf_register_block_type(array(
        'name'              => 'game-provider',
        'title'             => __('Game Providers'),
        'description'       => __('Game Providers'),
        'render_template'   => './inc/blocks/game-provider/game-provider.php',
        'category'          => 'common blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'game-provide', 'quote' ),
        'mode'              => 'edit'
        //'enqueue_script'    => '/wp-includes/js/masonry.min.js' ,
    ));
}

function game_provider_single() {
    acf_register_block_type(array(
        'name'              => 'game-provider-single',
        'title'             => __('Game Provider Single'),
        'description'       => __('Game Provider SIngle'),
        'render_template'   => './inc/blocks/game-provider-single/game-provider-single.php',
        'category'          => 'common blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'game-provide-single', 'quote' ),
        'mode'              => 'edit'
        //'enqueue_script'    => '/wp-includes/js/masonry.min.js' ,
    ));
}

function icon_boxes() {
    acf_register_block_type(array(
        'name'              => 'icon-boxes',
        'title'             => __('Icon Boxes'),
        'description'       => __('Icon Boxes'),
        'render_template'   => './inc/blocks/icon-boxes/icon-boxes.php',
        'category'          => 'common blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'icon-boxes', 'quote' ),
        'mode'              => 'edit'
        //'enqueue_script'    => '/wp-includes/js/masonry.min.js' ,
    ));
}

function partners_logo() {
    acf_register_block_type(array(
        'name'              => 'partners-logo',
        'title'             => __('Partners Logo'),
        'description'       => __('Partners Logo'),
        'render_template'   => './inc/blocks/partners-logo/partners-logo.php',
        'category'          => 'common blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'partners-logo', 'quote' ),
        'mode'              => 'edit'
        //'enqueue_script'    => '/wp-includes/js/masonry.min.js' ,
    ));
}

function banner_manager() {
    acf_register_block_type(array(
        'name'              => 'banner-manager',
        'title'             => __('Banner Manager'),
        'description'       => __('Banner Manager'),
        'render_template'   => './inc/blocks/banner-manager/banner-manager.php',
        'category'          => 'common blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'banner-manager', 'quote' ),
        'mode'              => 'edit'
        //'enqueue_script'    => '/wp-includes/js/masonry.min.js' ,
    ));
}

function banner_manager_two_cols() {
    acf_register_block_type(array(
        'name'              => 'banner-manager-two-cols',
        'title'             => __('Banner Manager Two Columns'),
        'description'       => __('Banner Manager Two Columns'),
        'render_template'   => './inc/blocks/banner-manager-two-cols/banner-manager-two-cols.php',
        'category'          => 'common blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'banner-manager-two-cols', 'quote' ),
        'mode'              => 'edit'
        //'enqueue_script'    => '/wp-includes/js/masonry.min.js' ,
    ));
}

function gambling_license_reviews_child_pages() {
    acf_register_block_type(array(
        'name'              => 'gambling-license-reviews-child-pages',
        'title'             => __('Gambling License Reviews Child Pages'),
        'description'       => __('Gambling License Reviews Child Pages'),
        'render_template'   => './inc/blocks/gambling-license-reviews-pages/gambling-license-reviews-child-pages.php',
        'category'          => 'common blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'gambling-license-reviews-child-pages', 'quote' ),
        'mode'              => 'edit'
        //'enqueue_script'    => '/wp-includes/js/masonry.min.js' ,
    ));
}

function solutions_child_pages() {
    acf_register_block_type(array(
        'name'              => 'solutions-child-pages',
        'title'             => __('Solutions Child Pages'),
        'description'       => __('Solutions Child Pages'),
        'render_template'   => './inc/blocks/solutions-child-pages/solutions-child-pages.php',
        'category'          => 'common blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'solutions-child-pages', 'quote' ),
        'mode'              => 'edit'
        //'enqueue_script'    => '/wp-includes/js/masonry.min.js' ,
    ));
}


function payment_child_pages() {
    acf_register_block_type(array(
        'name'              => 'payment-child-pages',
        'title'             => __('Payment Child Pages'),
        'description'       => __('Payment Child Pages'),
        'render_template'   => './inc/blocks/payment-child-pages/payment-child-pages.php',
        'category'          => 'common blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'payment-child-pages', 'quote' ),
        'mode'              => 'edit'
        //'enqueue_script'    => '/wp-includes/js/masonry.min.js' ,
    ));
}

function popup_video() {
    acf_register_block_type(array(
        'name'              => 'popup_video',
        'title'             => __('Popup Video'),
        'description'       => __('Popup Video'),
        'render_template'   => './inc/blocks/popup_video/popup_video.php',
        'category'          => 'common blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'popup_video', 'quote' ),
        'mode'              => 'edit'
        //'enqueue_script'    => '/wp-includes/js/masonry.min.js' ,
    ));
}

function contact_us_add() {
    acf_register_block_type(array(
        'name'              => 'contact-us-address',
        'title'             => __('Contact Us Address'),
        'description'       => __('Contact Us Address'),
        'render_template'   => './inc/blocks/contact-us-address/contact-us-address.php',
        'category'          => 'common blocks',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'contact-us-address', 'quote' ),
        'mode'              => 'edit'
        //'enqueue_script'    => '/wp-includes/js/masonry.min.js' ,
    ));
}

if( function_exists('acf_register_block_type') ) {

    add_action('acf/init', 'solutions_child_pages'); 
    add_action('acf/init', 'gambling_license_reviews_child_pages'); 
    add_action('acf/init', 'payment_child_pages'); 
    add_action('acf/init', 'partners_logo'); 
    add_action('acf/init', 'icon_boxes'); 
    add_action('acf/init', 'latest_posts_masonry'); 
    add_action('acf/init', 'banner_mobile_desktop');
    add_action('acf/init', 'casino_software_table');  
    add_action('acf/init', 'game_provider');  
    add_action('acf/init', 'game_provider_single');  
    add_action('acf/init', 'banner_manager');  
    add_action('acf/init', 'banner_manager_two_cols'); 
    add_action('acf/init', 'popup_video');
    add_action('acf/init', 'contact_us_add'); 
    // This are the block used for home page END



}
