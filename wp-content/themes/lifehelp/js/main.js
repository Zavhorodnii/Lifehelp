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
	$("body,html").animate({scrollTop:0}, 50)
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



// Blog start

$(function(){
	$(".content-left__item").slice(0, 10).show();
	$(".LoadMore").on('click', function(e){
		$(".content-left__item:hidden").slice(0, 10).slideDown();
		if ($(".content-left__item:hidden").length == 0) {
			$(".LoadMore").addClass('hide');
		}
	})
});

// burger

$(document).ready(function() {
	$('.header__burger').click(function(event) {
		$('.header__burger,.header__menu,.mob-fix').toggleClass('active');
		$('body').toggleClass('lock');

		$('.mob-fix').click(function() {
			$('.header__burger,.header__menu,.mob-fix').removeClass('active');
		$('body').removeClass('lock');
		});
	});
});


// window.addEventListener("resize", function() {
//     if (window.matchMedia("(max-width: 767px)").matches) {
//         $('.sub-menu').addClass('mob-menu');
//         $('.mob-menu').removeClass('sub-menu');

//         $(".btn-sub-menu").on('click', function(e){
// 			$('.mob-menu').slideToggle();
// 			$(".btn-sub-menu").toggleClass('touch');
// 		});
//     } else {
//         $('.mob-menu').addClass('sub-menu');
//         $('.sub-menu').removeClass('mob-menu');
//     }
// });

$(window).on('load', function() {
    if (window.matchMedia("(max-width: 767px)").matches) {
        $('.sub-menu').addClass('mob-menu');
        $('.mob-menu').removeClass('sub-menu');

        $(".btn-sub-menu").on('click', function(){
			$('.mob-menu').slideToggle();
			$(".btn-sub-menu").toggleClass('touch');
		});
    } 
});


//input focus

$('.search-txt').focus(function(){
    $(this).parent().addClass('search_focus');
});

$('.search-txt').blur(function(){
    $(this).parent().removeClass('search_focus');
});

// Blog end