<?php
/**
* Wishdd Select2 Posts Dropdown with Shortcodes 1.0
* Author  - Waqas Yousaf / Tehmina Aslam
* Website -  http://wishdd.com/
* Contact - waqas@wishdd.com
* License: GPLv2
*/


function wishdd_select2_menu($atts, $content = null)
{
	$atts = shortcode_atts(['title' => 'category', 'placeholder' => 'Select A Post'], $atts);
	//Talkshow
	$title 		 = esc_html__($atts['title']);
	$placeholder = esc_html__($atts['placeholder']);

	$terms = get_terms($title);
	
	$output = "";
	if(!empty($terms) && !is_wp_error($terms))
	{
		$output = "<div><select id='" .$title. "' class='wishdd-select2'>";
		
		foreach($terms as $term)
		{
			$name  		= esc_html__($term->name);
			$url   		= esc_url(get_term_link($term));
			$output 	.= "<option value='" .$url. "'>" .$name. "</option>"; 
		}

		$output .= "</select></div>";
	}
		
	$wishdd_localize = ['title'	=> $title , 'placeholder' => $placeholder ];

	wp_localize_script( 'wishdd_js', 'wishdd_localize', $wishdd_localize );	
	
	return $output;
}

add_shortcode('wishdd_select2' , 'wishdd_select2_menu');
