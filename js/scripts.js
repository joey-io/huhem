$('#menu-icon').click(function(e){
	$('body').toggleClass('show-menu');
	e.preventDefault();
}) 



var i = 0;

$('[href="#slider-left"]').click(function(e){
	if ( i > 0 ) {
		i--;
		$('.slider_content').css({
			transform : 'translateX(' + i*-100 + '%)'
		})
	}

	e.preventDefault();
});

$('#header nav a').click(function(e){
	$('body').removeClass('show-menu');
	var href = $(this).attr('href');
	var loc =  $(href).offset().top;
	$('body, html').animate({
		scrollTop: loc
	})
	e.preventDefault();
})

$('[href="#slider-right"]').click(function(e){
	if ( i < $('.slider_content').length-1 ) {
		i++;
		$('.slider_content').css({
			transform : 'translateX(' + i*-100 + '%)'
		})
	}

	e.preventDefault();
});

$('.play-video').click(function(e){
	e.preventDefault();
	$('.modal iframe').attr('src', $(this).attr('href'));
	$('.modal').addClass('shown');
})

$('.close-modal').click(function(e){
	e.preventDefault();
	$('.modal iframe').attr('src', '');
	$('.modal').removeClass('shown');
})