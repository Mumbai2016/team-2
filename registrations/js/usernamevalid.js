$(document).ready(function(){
	$('#name').blur(function(){
		var query_string = $(this).val();
		if(query_string.length>3)
		{
			$.ajax({
				type: "POST",
				url: "user_valid.php",
				data: { name:query_string },
				success: function(data)
				{
					if(data=='exist')
					{
						$('#result_user').html('Someone already has that username. Try another?');
						$('.login-submit').attr('disabled', 'disabled');
					}
					else
					{
						$('#result_user').html(query_string+' is available');
					}				
				}
			});
		}
	});
	
	
});