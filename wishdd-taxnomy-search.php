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
		wp_enqueue_script( 'wishdd_select2', plugins_url('js/select2.min.js', __FILE__), array( 'jquery'), '20170407', true );
		wp_enqueue_script( 'wishdd-custom', plugins_url( 'js/wishdd-custom.js', __FILE__ ), array( 'wishdd_select2' ), '20170407', true );
		
		

}

add_action('wp_enqueue_scripts' , 'wishdd_add_resources');





 /*   $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
    </div>
    </form>';

*/
//    $form = get_categories("Sce");
//    print "<pre>";
//   print_r( $form);




/*
$term_id = 2;
$taxonomy_name = 'category';
$term_children = get_term_children( $term_id, $taxonomy_name );

echo '<ul>';
foreach ( $term_children as $child ) {
	$term = get_term_by( 'id', $child, $taxonomy_name );
	echo '<li><a href="' . get_term_link( $child, $taxonomy_name ) . '">' . $term->name . '</a></li>';
}
echo '</ul>';

*/

