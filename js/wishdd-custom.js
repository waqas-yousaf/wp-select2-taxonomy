/**
* Wishdd Select2 Posts Dropdown with Shortcodes 1.0
* Author  - Waqas Yousaf / Tehmina Aslam
* Website -  http://wishdd.com/
* Contact - waqas@wishdd.com
* License: GPLv2
*/

jQuery(document).ready(function( $ )
{
	var options 	 = (typeof wishdd_localize !== 'undefined') ? wishdd_localize : null;
	var sTitle 		 = jQuery.parseJSON(options.title);
	var sPlaceHolder = jQuery.parseJSON(options.placeholder);
	

 	if (options && sTitle.length > 0)
 	{
 	
 		for (var i = 0; i < sTitle.length; i++)
 		{
 			
 			$('#'+sTitle[i] ).select2(
 			{
 				placeholder: sPlaceHolder[i]
 			}).on('select2:select', function()
 			{
 				var url = $(this).val();
 				window.location.href = url;

			});


        }
    }
});


	