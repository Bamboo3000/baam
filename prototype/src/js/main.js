'use strict';

function lazyImages()
{

	$('.lazyset').each(function() {
		if(spaceFromBottom($(this)) && !$(this).hasClass('loaded')) {
			$(this).attr('srcset', $(this).data('srcset')).removeAttr('data-srcset').addClass('loaded');
		}
	});
	$('.lazy').each(function() {
		if(spaceFromBottom($(this)) && !$(this).hasClass('loaded')) {
			$(this).attr('src', $(this).data('src')).removeAttr('data-src').addClass('loaded');
		}
	});

	$(window).on('scroll resize', function() {

		$('.lazyset').each(function() {
			if(spaceFromBottom($(this)) && !$(this).hasClass('loaded')) {
				$(this).attr('srcset', $(this).data('srcset')).removeAttr('data-srcset').addClass('loaded');
			}
		});
		$('.lazy').each(function() {
			if(spaceFromBottom($(this)) && !$(this).hasClass('loaded')) {
				$(this).attr('src', $(this).data('src')).removeAttr('data-src').addClass('loaded');
			}
		});

	});

}

function uglyInput()
{
	$('.ugly').each(function() {
		var $input = $(this).find('input, textarea');
		$input.on('change focusout', function() {
			if( !$input.val() === true ) {
				$input.parent().find('.ugly-label').css({'opacity' : 1});
			} else {
				$input.parent().find('.ugly-label').css({'opacity' : 0});
			}
		});
	});
}

function productImgHover() 
{
	if( !$('body').hasClass('mobile-device') ) {
		$('.products__product').on('mouseenter', function() {
			if( $(this).find('.products__product-img').find('.hover').length ) {
				$(this).find('.products__product-img').find('.main').stop(true).addClass('d-none');
				$(this).find('.products__product-img').find('.hover').stop(true).removeClass('d-none');
			}
		});
		$('.products__product').on('mouseleave', function() {
			if( $(this).find('.products__product-img').find('.hover').length ) {
				$(this).find('.products__product-img').find('.main').removeClass('d-none');
				$(this).find('.products__product-img').find('.hover').addClass('d-none');
			}
		});
	}
}

function menuOpen()
{
	$('button.btn__menu').on('click', function(e) {
		e.preventDefault();
		if( $(this).hasClass('active') ) {
			$(this).removeClass('active');
		} else {
			$(this).addClass('active');
		}
	});
}

// function hideSeps()
// {
// 	$('.hide-seps').on('mouseenter', function() {

// 	})
// }

function getLastDays( cont )
{
	var today = new Date();
	var days = new Array();
	var weekdays = new Array();
	var week = new Array(7);
	week[0] = "Sunday";
	week[1] = "Monday";
	week[2] = "Tuesday";
	week[3] = "Wednesday";
	week[4] = "Thursday";
	week[5] = "Friday";
	week[6] = "Saturday";
	var month = new Array();
	month[0] = "January";
	month[1] = "February";
	month[2] = "March";
	month[3] = "April";
	month[4] = "May";
	month[5] = "June";
	month[6] = "July";
	month[7] = "August";
	month[8] = "September";
	month[9] = "October";
	month[10] = "November";
	month[11] = "December";
	var months = new Array();
	while ( days.length < 5 ) {
		today.setDate(today.getDate() + 1);
		var day = today.getDate();
		var weekday = today.getDay();
		if( weekday !== 0 || weekday !== 6 ) {
			months.push(month[today.getMonth()]);
			days.push(day);
			weekdays.push(week[weekday]);
			$(cont).append('<a href="#" class="dateChoose"><span class="h4">'+week[weekday]+'</span><div class="btn btn__circle"><span class="h1">'+day+'</span></div></a>');
		}
	}
	var fMonths = new Array();
	months.forEach( function( item ) {
		if( !fMonths.includes(item) ) {
			fMonths.push(item);
		}
	});
	console.log(fMonths);
	if( fMonths.length < 2 ) {
		$(cont).append('<div class="month-container"><span class="h1">'+fMonths[0]+'</span></div>');
	} else {
		$(cont).append('<div class="month-container"><span class="h1">'+fMonths[0]+' / '+fMonths[1]+'</span></div>');
	}
	console.log(days);
	console.log(weekdays);
}

function careersCard()
{
	
	$('.careers__single').on('mouseenter', function() {
		console.log('12');
		$('.careers__container').css({ 'background-image' : 'url("'+$(this).data('bg')+'")' });
	});
	$('.careers__single').on('mouseleave', function() {
		console.log('12');
		$('.careers__container').css({ 'background-image' : 'none' });
	});
}

function videoPlay()
{
	$('video').on('click', function() {
		if( $(this).get(0).paused ) {
			$(this).get(0).play();
			$(this).next('.video-play').hide(0);
		} else {
			$(this).get(0).pause();
			$(this).next('.video-play').show(0);
		}
	});
	$('.video-play').on('click', function() {
		$(this).prev('video').get(0).play();
		$(this).hide(0);
	});
}

jQuery(document).ready(function() {

	lazyImages();
	menuOpen();
	uglyInput();
	if($('#dateContainer1a')) {
		getLastDays( '#dateContainer1a' );
	}
	if($('#dateContainer1b')) {
		getLastDays( '#dateContainer1b' );
	}
	if($('#dateContainer1c')) {
		getLastDays( '#dateContainer1c' );
	}
	careersCard();
	var swiper = new Swiper('.swiper-container', {
		direction: 'horizontal',
		slidesPerView: 'auto',
		freeMode: true,
		scrollbar: {
		  	el: '.swiper-scrollbar',
		},
		mousewheel: true,
	});
	//feather.replace();
	//productImgHover();

	videoPlay();

	$('#footerCollapse').on('shown.bs.collapse', function () {
		if( $(this).hasClass('pristine') ) {
			$(this).removeClass('pristine');
		}
		$('html, body').animate({
			scrollTop: $(document).height()-$(window).height()
		}, 400);
	});

});

jQuery(window).on('load', function() {

	lazyImages();

});