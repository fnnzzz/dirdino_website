jQuery(window).load(function() { 
    jQuery("#loader").delay(700).fadeOut("slow"); 
});

jQuery(document).ready(function($) {

	calcSearchMarginTop();
	

	jQuery('.read_scroll').on('click', function(event) {
	    
	    jQuery('html, body').animate({
	        scrollTop: jQuery('#one').offset().top
	    }, 500);		

		event.preventDefault();
	});


	  var $searchlink = $('#searchtoggl i');
	  var $searchbar  = $('#searchbar');
	  
	  jQuery('#nav ul li a').on('click', function(e){
	    // e.preventDefault();
	    
	    if(jQuery(this).attr('id') == 'searchtoggl') {
	      if(!$searchbar.is(":visible")) { 
	        // if invisible we switch the icon to appear collapsable
	        $searchlink.removeClass('fa-search').addClass('fa-search-minus');
	      } else {
	        // if visible we switch the icon to appear as a toggle
	        $searchlink.removeClass('fa-search-minus').addClass('fa-search');
	      }
	      
	      $searchbar.slideToggle(300, function(){
	        // callback after search bar animation
	      });
	    }
	  });
	  
	  jQuery('#searchform').submit(function(e){
	    e.preventDefault(); // stop form submission
	  });


});

jQuery(window).resize(function(event) {
	calcSearchMarginTop();	
});


function calcSearchMarginTop() {
	var header_height = jQuery('#header').height();

	jQuery('#searchbar').css('marginTop', header_height);
}


jQuery(document).ready(function() {
	/* Make feedback button shake every 4 sec until it is clicked. */
	var pid = setInterval(function() {
		var fd = jQuery('.feedback.shake');
		if (fd.length > 0) fd.removeClass('shake');
		else jQuery('.feedback').addClass('shake');
	}, 2000);
});