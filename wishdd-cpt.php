<?php

/**
* Wishdd Select2 Posts Dropdown with Shortcodes 1.0
* Author  - Waqas Yousaf / Tehmina Aslam
* Website -  http://wishdd.com/
* Contact - waqas@wishdd.com
* License: GPLv2
*/

// --- Create Taxonomy Function
function wishdd_taxonomy_talkshow()
{
	$taxonomies = [ ["singular" => "Talk show", "plural" => "Talk shows" , "name" => "Talkshow"],
					  ["singular" => "Profile", "plural"=> "Profiles", "name" => "Profile"]

					];
	

	foreach ($taxonomies as $taxonomy)
	{
		$singular = $taxonomy["singular"];
		$plural   = $taxonomy["plural"];
		
		$slug  = str_replace( ' ', '-', strtolower( $singular ) );
		$name  = $taxonomy["name"];

		$labels = [	'name'                       => $plural,
			        'singular_name'              => $singular,
			        'search_items'               => 'Search ' . $plural,
			        'popular_items'              => 'Popular ' . $plural,
			        'all_items'                  => 'All ' . $plural,
			        'parent_item'                => null,
			        'parent_item_colon'          => null,
			        'edit_item'                  => 'Edit ' . $singular,
			        'update_item'                => 'Update ' . $singular,
			        'add_new_item'               => 'Add New ' . $singular,
			        'new_item_name'              => 'New ' . $singular . ' Name',
			        'separate_items_with_commas' => 'Separate ' . $plural . ' with commas',
			        'add_or_remove_items'        => 'Add or remove ' . $plural,
			        'choose_from_most_used'      => 'Choose from the most used ' . $plural,
			        'not_found'                  => 'No ' . $plural . ' found.',
			        'menu_name'                  => $plural];


			$args = [	'hierarchical'       	=> true,
		            	'labels'                => $labels,
		            	'show_ui'               => true,
		            	'show_admin_column'     => true,
		            	'update_count_callback' => '_update_post_term_count',
		            	'query_var'             => true,
		            	'rewrite'               => [ 'slug' => $slug ]
		            ];

			register_taxonomy($name, 'post' , $args);

		}

}


// --- Register Taxonomy Function
add_action('init', 'wishdd_taxonomy_talkshow');

