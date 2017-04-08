jQuery(document).ready(function( $ )
{
	$('#talkshow').select2(
	{
    	placeholder: "Talk Shows"
	}
		).on('select2:select', function()
		{
			var url = $(this).val();
    		window.location.href = url;
    
		});



});


	