$(window).scroll(function() {
	var wScroll = $(this).scrollTop();
	// Navbar
	if ( wScroll > $('.gambar').offset().top -700 ) {
		$('#navbar').css({
			background: 'black'
		}); 
	} else {
		$('#navbar').css({
			background: 'transparent'
		}); 	
	}
});