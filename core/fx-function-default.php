<?php 
if ( !defined('ABSPATH')) exit;
require_once( dirname(__FILE__) . '/fx-function-acf.php'); // OPTION THEME / ACF
require_once( dirname(__FILE__) . '/fx-function-css-loader.php'); // CSS LOADER
require_once( dirname(__FILE__) . '/fx-function-hooks.php'); // HOOKS
require_once( dirname(__FILE__) . '/fx-function-image-size.php'); // IMAGES SIZES
require_once( dirname(__FILE__) . '/fx-function-js-loader.php'); // JS LOADER
require_once( dirname(__FILE__) . '/fx-function-nav-position.php'); // NAV POSITION
//require_once( dirname(__FILE__) . '/fx-function-script-loader.php'); // SCRIPT LOADER
//require_once( dirname(__FILE__) . '/fx-function-add-font.php'); // ADD FONT FOR GOOGLE
//require_once( dirname(__FILE__) . '/fx-function-paginator.php'); // PAGINATION FUNCTION
require_once( dirname(__FILE__) . '/fx-function-wp-others.php'); // WP OTHER FUNCTIONS FRONT END
require_once( dirname(__FILE__) . '/fx-function-wp-others-admin.php'); // WP OTHER FUNCTIONS ADMIN / BACK END 
require_once( dirname(__FILE__) . '/fx-function-create-cpt.php'); // CREATE CPT
require_once( dirname(__FILE__) . '/fx-function-blocks.php'); // BLOCKS
//require_once( dirname(__FILE__) . '/fx-function-lang.php'); // LANGUAGE
require_once "Mobile_Detect.php"; // USE THE MOBILE DETECT PHP

// Additionaly Hack Functions
require_once( dirname(__FILE__) . '/fx-hacks.php');

//FOR AJAX BLOG SUMMARY AND CATEGORY, OR CUSTOM POST TYPE ENABLE THIS IF YOU WANT TO USE AJAX TYPE INSTEAD OF PAGINATION
require_once( dirname(__FILE__) . '/fx-function-ajax.php');