$(function() {

    $('.boxes').show().addClass('animated fadeInUp');

	$('.slider').unslider({

		speed: 2000,
		delay: 5500,
		complete: function() {},
		keys: true,
		dots: false,
		fluid: true

	});

	var unslider = $('.slider').unslider();

	$('.unslider-arrow').click(function() {

		var fn = this.className.split(' ')[1];
		unslider.data('unslider')[fn]();

	});
	
	$('body').css({'overflow':'hidden'});
	
	var wh = $(window).height();
	var ww = $(window).width();
	
	$('body').css({'width': + ww + 'px', 'height': + wh + 'px'});
//	$('.slider, .slidem li').css({'width': + ww + 'px', 'height': + wh + 'px'});

});


$(window).resize(function() {

	var wh = $(window).height();
	var ww = $(window).width();
	//$('body, .slider, .slidem li').css({'width': + ww + 'px', 'height': + wh + 'px'});

});
