$('.flexslider').flexslider({
	controlNav: false,
	directionNav: false,
	slideshow: true,
	slideshowSpeed: 5000
});

$('#nav-icon3').click(function(){
	$(this).toggleClass('open');
	$('body').toggleClass('shown-mobile-menu');
});