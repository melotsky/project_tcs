<?php 
if ( !defined('ABSPATH')) exit;
/************************************/
// ADD FONT / START DECLARE ALL YOUR FONTS HERE FROM GOOGLE
/************************************/
function fx_addfont() {

	if (!is_admin()) {
		wp_register_style( 'addfont-montserrat', '//fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap');
		wp_enqueue_style( 'addfont-montserrat');
}}

//add_action('init', 'fx_addfont');

/************************************/
// ADD FONT / END
/************************************/