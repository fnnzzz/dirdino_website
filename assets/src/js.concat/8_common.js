jQuery(window).load(function() { 
    jQuery("#loader").delay(700).fadeOut("slow"); 
});

jQuery(document).ready(function($) {
	

	jQuery('.read_scroll').on('click', function(event) {
	    
	    jQuery('html, body').animate({
	        scrollTop: $('#one').offset().top
	    }, 500);		

		event.preventDefault();
	});
});
