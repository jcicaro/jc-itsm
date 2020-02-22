(function($) {
	
	console.log('WPGLOBAL', WPGLOBAL);
	
	// jQuery code
	$(function() {
		
		// Style the alert
		$('#message').addClass('alert').addClass('alert-primary');
		
		
		// Style the table pagination
		$(".pagination .page-item .page-numbers").addClass("page-link");
    	$(".pagination .page-item .page-link").removeClass("page-numbers");
		$(".pagination .page-item .current").parent().addClass("active");
		
		
	});
	
	
})(jQuery);