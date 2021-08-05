'use strict'

$(function () {

	//footer fix
	let heightFooter = $('.footer').css('height');
	$('body').css('padding-bottom', heightFooter);
	// popup

	$('.bnt-popup').click(function (e) {
		e.preventDefault();
		let btnPopup = $(this);

		$('.popup').each(function (i, elems) {
			if (btnPopup.find('a').attr('data-popup') == $(elems).attr('data-popup')) {
				$('body').addClass('active');
				$(elems).show(500);
			}
			else if (btnPopup.attr('data-popup') == $(elems).attr('data-popup')) {
				$('body').addClass('active');
				$(elems).show(500);
			}
		});

	});

	function closepopup(closeThis) {
		closeThis.closest('.popup').hide(500);
		$('body').removeClass('active');
	}

	$('.cloce-block-popup').click(function () {
		closepopup($(this));
	});

	$('.close-popup').click(function () {
		closepopup($(this));
	});

	// end popup

	if ($(location).prop('href').includes('#success')) {
		$('.js-popup-ok').show(300);
		$('.wpcf7-validation-errors').css('display', none);
		$('.span.wpcf7-not-valid-tip').css('display', none);
	}

	function toogleText (element) {

		element.hasClass('active') ?  element.find('.list-categories').show(100) : element.find('.list-categories').hide(100);
	}

	$('.main-top-images__item').mouseenter( function (){
		
		$(this).addClass('active');
		toogleText ($(this));
	});

	$('.main-top-images__item').mouseleave( function (){
		$(this).removeClass('active');
		toogleText ($(this));
	});

});


// scroller Top
let $btnTop = $(".btn-top");
$(window).on("scroll", function(){
	if ($(window).scrollTop() >= 200){
		$btnTop.fadeIn();
	}else{
		$btnTop.fadeOut();
	}
});

$btnTop.on("click", function(){
	$("body,html").animate({scrollTop:0}, 900)
});


let $header = $(".header");
$(window).on("scroll", function(){
	if ($(window).scrollTop() >= 2){
		$header.addClass('active');
	}
	else{
		$header.removeClass('active');
	}
});

let $cookieButton = $(".cookie-button");
let $cookie = $(".cookie");

$(document).ready(function() {
	$cookieButton.click(function(event) {
		$cookie.addClass('hide');
	});
});



// FAQ list start

$(".menu__link").click(function(e, e1) {
e = $(this).closest('.menu-li').find('.sub-menu__list');
    if(!e.is(':visible')) {
	    $('.sub-menu__list').slideUp();
	    e.slideDown();

	    $('.toggle-plus-minus').removeClass('active');
	    e1 = $(this).closest('.menu-li').find('.toggle-plus-minus');
	    e1.addClass('active');
	}
	else{
		e.slideToggle();
		$('.toggle-plus-minus').removeClass('active');
	}
});


$('.anchor-link').click(function (e, e1) {
        e.preventDefault();
        let id_aunkor = $(this).attr('data-id-item');
        $('.menu__link').each(function(e, elem) {
            if (id_aunkor == $(elem).attr('data-menu-li')) {
                e = $(this).closest('.menu-li').find('.sub-menu__list');
                if(!e.is(':visible')) {
				    $('.sub-menu__list').slideUp();
				    e.slideDown();

				    $('.toggle-plus-minus').removeClass('active');
				    e1 = $(this).closest('.menu-li').find('.toggle-plus-minus');
				    e1.addClass('active');
				}
				else{
					e.slideToggle();
					$('.toggle-plus-minus').removeClass('active');
				}
            }
        });
    });
// FAQ list end