$(document).ready(function(){
	// make the slides go
	$('article').click(function(){
		if ($('.active').next().length == 1) {
			$('.active').removeClass('active').next().addClass('active');
		}
		// if we are on the last slide, show the contact form
		if ($('.active').hasClass('deliver')) {
			$('.contact').addClass('active');
			$('article').addClass('has-contact');			
		}
	});
	// if the contact form is showing, start the slides again
	$('.deliver').click(function(){
		if ($('.contact').hasClass('active')) {
			$('.explore').addClass('active');
			$('.deliver').removeClass('active');	
			$('.contact').removeClass('active');
			$('article').removeClass('has-contact');					
		}
	});
	// open the contact form
	$('nav').click(function(){
		if ($('.active').hasClass('deliver')) {
			$('.contact').removeClass('active');
			$('article').removeClass('has-contact');
			$('.explore').addClass('active');
			$('.deliver').removeClass('active');			
		} else {
			$('.contact').toggleClass('active');
			$('article').toggleClass('has-contact');			
		}
	});
});