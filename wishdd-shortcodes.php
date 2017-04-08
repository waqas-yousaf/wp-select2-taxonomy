<?php

function wishdd_talkshow_menu($atts, $content = null)
{
	$atts = shortcode_atts(['title' => 'Talkshow'], $atts);
	$talkshows = get_terms('Talkshow');
	
	$output = "";
	if(!empty($talkshows) && !is_wp_error($talkshows))
	{
		$output = "<div><select id='talkshow' style='width:300px; display : block; padding : 20px;'>";
		
		foreach($talkshows as $talkshow)
		{
			$name  		= esc_html__($talkshow->name);
			$url   		= esc_url(get_term_link($talkshow));
			$output 	.= "<option value='" .$url. "'>" .$name. "</option>"; 
		}

			$output .= "</select></div>";

			
	}
	
	return $output;
}

add_shortcode('wishdd_talkshow_menu' , 'wishdd_talkshow_menu');
