<?php
/*
Plugin Name: Wishdd Select2 Posts Dropdown
Description: A wordpress plugin to show custom taxonomy terms list with select2 dropdown.
Version: 1.0
Author: Waqas Yousaf / Tehmina Aslam
Author URI: http://wishdd.com/
Author Email: support@wishdd.com
License: GPLv2
*/

// Exit if not logged-in
if (!defined('ABSPATH')) {
	exit;
}

// Load Custom Post Type (CPT) Module 
require_once ( plugin_dir_path(__FILE__) . "wishdd-cpt.php");

// Load Shortcodes Page
require_once ( plugin_dir_path(__FILE__) . "wishdd-shortcodes.php");



//Adding Resouces
function wishdd_add_resources()
{
		wp_enqueue_style("select2_style", plugins_url('css/select2.min.css', __FILE__));
		wp_enqueue_style("wishdd_style", plugins_url('css/wishdd-custom.css', __FILE__));
		wp_enqueue_script("select2_js", plugins_url('js/select2.full.min.js', __FILE__), array( 'jquery'), '20170407', true );
		wp_enqueue_script( 'wishdd_js', plugins_url( 'js/wishdd-custom.js', __FILE__ ), array( 'jquery', 'select2_js' ), '20170317', true );
}

add_action('wp_enqueue_scripts' , 'wishdd_add_resources');
