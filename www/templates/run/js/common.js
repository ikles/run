$(document).ready(function() {
	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:3
			}
		}
	});

	$('.owl-carousel2').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:4
			}
		}
	});


	$('div[itemprop]').each(function(){
		if( $.trim($(this).text()) == "" ){
			$('.right').remove();
		}
	});

	$('a[href^="#"]').click(function () {
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top;
		$('html,body').animate( { scrollTop: destination }, 1100 );
		return false;
	});


}); //ready

jQuery(document).ready(function($){

var ue = $(".to_top").position();

	var wid = $(window).width();
	var wid = (wid-960)/2;
	var speed = 100,
	$scrollTop = $("<a/>")
	.addClass('scrollTop')
	.attr({href:'#', style:'display:none; z-index:9999; position:fixed;'})
	.appendTo('body');		

	$scrollTop.click(function(e){
		e.preventDefault();
		$( 'html:not(:animated),body:not(:animated)' ).animate({"scrollTop":0},"slow");
	});

	//аПаОбаВаЛаЕаНаИаЕ
	function show_scrollTop(){
		( $(window).scrollTop() > 300 ) ? $scrollTop.fadeIn(600) : $scrollTop.fadeOut(600);
	}
	$(window).scroll( function(){ show_scrollTop(); } );
	show_scrollTop();

	$('.scrollTop').html('^');

	$('.scrollTop').css({'marginLeft':wid});



	$('.best-photos .owl-item a').click(function (eventObject) {
		eventObject.preventDefault();
		var hrefka = $(this).attr('href');		
		$('.zoom a').after('<img src="'+hrefka+'">');
		$('.zoom').addClass('dblock');
		$('.overka').addClass('dblock');
		$('.closer').addClass('dblock');
	});


	$('.overka').click(function () {
		$('.overka').removeClass('dblock');
		$('.zoom').removeClass('dblock');
		$('.zoom img').remove();
	});

	$('.closer').click(function (eventObject) {
		eventObject.preventDefault();
		$('.overka').removeClass('dblock');
		$('.zoom').removeClass('dblock');
		$('.zoom img').remove();
	});



}); //ready2