jQuery(window).load(function() { 
    jQuery("#loader").delay(700).fadeOut("slow"); 
    jQuery(".header_hide_init").css('opacity', '1');
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



// provans colors
jQuery(document).ready(function($) { 
	
	$('.provans__item-color').on('click', function(event) {
		event.preventDefault();

		var colorId = $(this).attr('data-colorid');

		// console.log(colorId);

		if( provansColors.array[colorId] ) {

			// console.log(provansColors.array[colorId]);

			var pic1_Main = provansColors.array[colorId].pic1;
			var pic2 = provansColors.array[colorId].pic2;
			var pic3 = provansColors.array[colorId].pic3;
			var pic4 = provansColors.array[colorId].pic4;
			var pic5 = provansColors.array[colorId].pic5;

			$('.provanscolorpic.-pic1').css('backgroundImage', 'url(' + pic1_Main + ')');
			$('.provanscolorpic.-pic2').css('backgroundImage', 'url(' + pic2 + ')');
			$('.provanscolorpic.-pic3').css('backgroundImage', 'url(' + pic3 + ')');
			$('.provanscolorpic.-pic4').css('backgroundImage', 'url(' + pic4 + ')');
			$('.provanscolorpic.-pic5').css('backgroundImage', 'url(' + pic5 + ')');

		}

	});


	$('.provans__item-rakurs.provanscolorpic').on('click', function(event) {
		event.preventDefault();
		
		var mainPic = $('.provanscolorpic.-pic1').css('backgroundImage');
		var thisPic = $(this).css('backgroundImage');

		$(this).css('backgroundImage', mainPic);
		$('.provanscolorpic.-pic1').css('backgroundImage', thisPic);

	});

});
