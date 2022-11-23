<?php 
if ( !defined('ABSPATH')) exit;

/************************************/
// LOAD CSS / START
/************************************/
if (!is_admin()) {
	function fx_css() {
		define('TIME','');
		wp_register_style( 'fontawesome_style', get_template_directory_uri(). '/assets/css/font-awesome-4.3.0/css/font-awesome.min.css', 'all' ); 
		wp_enqueue_style( 'fontawesome_style' );
		
		wp_register_style( 'slicknav_style', get_template_directory_uri(). '/assets/css/slicknav.css', 'all' ); // SUPERFISH
		wp_enqueue_style( 'slicknav_style' );
		
		wp_register_style( 'slidebars_style', get_template_directory_uri(). '/assets/css/slidebars.min.css', 'all' ); // SLIDEBAR STYLE
		wp_enqueue_style( 'slidebars_style' );
		
		wp_register_style( 'ham_style', get_template_directory_uri(). '/assets/css/ham.css', 'all' ); // HAM STYLE
		wp_enqueue_style( 'ham_style' );
		
		wp_register_style( 'main_style', get_template_directory_uri(). '/assets/css/style.css', 'all', TIME ); // MAIN STYLE
		wp_enqueue_style( 'main_style' );
		
		wp_register_style( 'widgets_casino_style', get_template_directory_uri(). '/assets/css/style-widgets-casino.css', 'all', TIME ); // MAIN STYLE
		wp_enqueue_style( 'widgets_casino_style' );

		wp_register_style( 'widgets_style_single_review', get_template_directory_uri(). '/assets/css/style-widgets-single-reivew.css', 'all', TIME ); // MAIN STYLE
		wp_enqueue_style( 'widgets_style_single_review' );

		wp_register_style( 'widgets_style_casino_solutions', get_template_directory_uri(). '/assets/css/style-widgets-casino-solutions.css', 'all', TIME ); // MAIN STYLE
		wp_enqueue_style( 'widgets_style_casino_solutions' );

		wp_register_style( 'widgets_style_casino_games', get_template_directory_uri(). '/assets/css/style-widgets-casino-games.css', 'all', TIME ); // MAIN STYLE
		wp_enqueue_style( 'widgets_style_casino_games' );

		wp_register_style( 'widgets_style_casino_licenses', get_template_directory_uri(). '/assets/css/style-widgets-casino-licenses.css', 'all', TIME ); // MAIN STYLE
		wp_enqueue_style( 'widgets_style_casino_licenses' );

		wp_register_style( 'widgets_style_casino_localization_perks', get_template_directory_uri(). '/assets/css/style-widgets-casino-localization-perks.css', 'all', TIME ); // MAIN STYLE
		wp_enqueue_style( 'widgets_style_casino_localization_perks' );

		wp_register_style( 'widgets_style_casino_brands', get_template_directory_uri(). '/assets/css/style-widgets-casino-brands.css', 'all', TIME ); // MAIN STYLE
		wp_enqueue_style( 'widgets_style_casino_brands' );

		wp_register_style( 'widgets_style_casino_support', get_template_directory_uri(). '/assets/css/style-widgets-casino-support.css', 'all', TIME ); // MAIN STYLE
		wp_enqueue_style( 'widgets_style_casino_support' );

		wp_register_style( 'widgets_style_casino_payment_providers', get_template_directory_uri(). '/assets/css/style-widgets-casino-payment-providers.css', 'all', TIME ); // MAIN STYLE
        wp_enqueue_style( 'widgets_style_casino_payment_providers' );
        
		wp_register_style( 'widgets_style_featured_platform', get_template_directory_uri(). '/assets/css/style-widgets-featured-platform.css', 'all', TIME ); // MAIN STYLE
        wp_enqueue_style( 'widgets_style_featured_platform' );
        
		wp_register_style( 'widgets_style_top_review', get_template_directory_uri(). '/assets/css/style-widgets-top-review.css', 'all', TIME ); // MAIN STYLE
		wp_enqueue_style( 'widgets_style_top_review' );

        wp_register_style( 'magnific_style', get_stylesheet_directory_uri(). '/assets/css/magnific-popup.css', 'all' ); // MMAGNIFIC POPUP
        wp_enqueue_style( 'magnific_style' );        
	}
	add_action('init', 'fx_css', 2);

}
/************************************/
// LOAD CSS / END
/************************************/





function disable_the_css_js_of_parent_theme_or_plugins() {
   
	// disable the style of the plugin called EDITOR BLOCKS BY Editorblocks

	// wp_dequeue_style( 'cf7cf-style' );
	// wp_deregister_style( 'cf7cf-style' );

	// wp_dequeue_style( 'contact-form-7' );
	// wp_deregister_style( 'contact-form-7' );

	// wp_dequeue_style( 'taqyeem-buttons-style' );
	// wp_deregister_style( 'taqyeem-buttons-style' );

	// wp_dequeue_style( 'taqyeem-style' );
	// wp_deregister_style( 'taqyeem-style' );

	// wp_dequeue_style( 'taqyeem-fontawesome' );
	// wp_deregister_style( 'taqyeem-fontawesome' );

	// wp_dequeue_style( 'evcal_cal_default' );
	// wp_deregister_style( 'evcal_cal_default' );

	// wp_dequeue_style( 'evo_font_icons' );
	// wp_deregister_style( 'evo_font_icons' );

	// wp_dequeue_style( 'eventon_dynamic_styles' );
	// wp_deregister_style( 'eventon_dynamic_styles' );

	// wp_dequeue_style( 'editor-blocks' );
	// wp_deregister_style( 'editor-blocks' );
	
	// wp_dequeue_style( 'dlm-frontend' );
    // wp_deregister_style( 'dlm-frontend' );

	// wp_dequeue_style( 'tablepress-default' );
    // wp_deregister_style( 'tablepress-default' );






	
	
	// wp_dequeue_style( 'chld_thm_cfg_parent' );
    // wp_deregister_style( 'chld_thm_cfg_parent' );

	// wp_dequeue_style( 'twentysixteen-block-editor-style-css' );
    // wp_deregister_style( 'twentysixteen-block-editor-style-css' );
	
	// //JS FILES
	// wp_dequeue_script( 'twentysixteen-skip-link-focus-fix' );
    // wp_dequeue_script( 'twentysixteen-script' );
}
add_action( 'wp_enqueue_scripts', 'disable_the_css_js_of_parent_theme_or_plugins', 20 );
?>
