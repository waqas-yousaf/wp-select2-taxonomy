/**
* Wishdd Select2 Posts Dropdown with Shortcodes 1.0
* Author  - Waqas Yousaf / Tehmina Aslam
* Website -  http://wishdd.com/
* Contact - waqas@wishdd.com
* License: GPLv2
*/

jQuery(document).ready(function( $ )
{
	var sTitle 		 = wishdd_localize.title;
	var sPlaceHolder = wishdd_localize.placeholder;

	$('#'+sTitle ).select2(
	{
    	placeholder: sPlaceHolder
	}
		).on('select2:select', function()
		{
			var url = $(this).val();
    		window.location.href = url;
    
		});



});


	