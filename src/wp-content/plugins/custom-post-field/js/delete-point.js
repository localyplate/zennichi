jQuery(document).ready(function($){
	$(".button-primary").click(function(){
		token = $(this).data('token');

		var r = confirm("You really want delete point!");
	    if (r == true) {
			data = {
				action: 'mpp_delete_point',
				token: token
			};
			$.post(ajaxurl, data, function(responce){
				alert(responce);
				location.reload();
			});
		} else {
	        return false;
	    }
	})
});