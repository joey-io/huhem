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


function photoSlide(){
	var slidr = $('.photo-slider ul');
	var zero = slidr.find('li').eq(0);
	slidr.append(zero.detach());
	var cur = slidr.find('li').eq(2);
	var text = cur.find('.attr').html();
	$('.acc .plaque > span').html(text);
	go();
}

function go(){
    // do some stuff
    setTimeout(photoSlide, 5000);

}

go();