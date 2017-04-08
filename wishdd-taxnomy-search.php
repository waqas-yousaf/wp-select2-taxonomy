<?php
/*
Plugin Name: Wishdd Taxonomy Search
Description: Wishdd Taxonomy Toolbar
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
		wp_enqueue_style("wishdd_style", plugins_url('css/select2.min.css', __FILE__));
		wp_enqueue_script( 'wishdd_select2', plugins_url('js/select2.full.min.js', __FILE__), array( 'jquery'), '20170407', true );
		wp_enqueue_script( 'wishdd-custom', plugins_url( 'js/wishdd-custom.js', __FILE__ ), array( 'wishdd_select2' ), '20170407', true );
}

add_action('wp_enqueue_scripts' , 'wishdd_add_resources');
