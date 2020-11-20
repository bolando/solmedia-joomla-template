jQuery(function(){
	new WOW({mobile: false}).init();
	jQuery(document).scroll(function() {
		var pozycja = jQuery(document).scrollTop();
		if (pozycja > 200) {
			jQuery('#header').addClass('smaller')
		} else {
			jQuery('#header').removeClass('smaller')
		}
	}) 
})