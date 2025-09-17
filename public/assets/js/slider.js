(function ($) {
	"use strict";

	var windowOn = $(window);


	//  testimonial Swiper Js
	const testimonialswiper = new Swiper('.it-testimonial-active', {
		speed: 1500,
		loop: true,
		slidesPerView: 1,
		spaceBetween: 30,
		autoplay: true,
		breakpoints: {
			'1400': {
				slidesPerView: 1,
			},
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		pagination: {
			el: ".it-testimonial-dots",
			clickable: true,
		},
		navigation: {
			prevEl: '.arrow-prev',
			nextEl: '.arrow-next',
		},
		
	});

	//  testimonial Swiper Js
	const testimonial2swiper = new Swiper('.it-testimonial-2-active', {
		speed: 1500,
		loop: true,
		slidesPerView: 3,
		spaceBetween: 35,
		centeredSlides: true,
		autoplay: true,
		breakpoints: {
			'1400': {
				slidesPerView: 3,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
				centeredSlides: false,
			},
			'768': {
				slidesPerView: 2,
				centeredSlides: false,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		pagination: {
			el: ".it-testimonial-2-dots",
			clickable: true,
		},
		navigation: {
			prevEl: '.arrow-prev',
			nextEl: '.arrow-next',
		},
		
	});

	//  testimonial Swiper Js
	var testimonial3_info = new Swiper(".it-testimonial-3-info-active", {
		loop: true,
		speed: 1200,
		spaceBetween: 10,
		slidesPerView: 4, 
		freeMode: true,
		watchSlidesProgress: true,
		breakpoints: {
			'1400': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
    });

    var testimonial3_content = new Swiper(".it-testimonial-3-active", {
        loop: true,
		speed: 1200,
		spaceBetween: 40,
		slidesPerView: 1,
		centeredSlides: true,
		navigation: {
			prevEl: '.arrow-prev',
			nextEl: '.arrow-next',
		},
			
		thumbs: {
			swiper: testimonial3_info,
		},
    });

	//  project 01 Swiper Js
	var project_info = new Swiper(".it-project-info-active", {
		loop: true,
		speed: 1200,
		spaceBetween: 0,
		slidesPerView: 1,
		freeMode: true,
		watchSlidesProgress: true,
    });

    var project_content = new Swiper(".it-project-active", {
        loop: true,
		speed: 1200,
		spaceBetween: 40,
		slidesPerView: 3,
		centeredSlides: true,
		breakpoints: {
			'1400': {
				slidesPerView: 3,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		navigation: {
			prevEl: '.arrow-prev',
			nextEl: '.arrow-next',
		},
			
		thumbs: {
			swiper: project_info,
		},
    });	

	// project 02 Swiper Js
	const project2swiper = new Swiper('.it-project-2-active', {
		speed: 1500,
		loop: true,
		slidesPerView: 2,
		spaceBetween: 35,
		autoplay: true,
		breakpoints: {
			'1400': {
				slidesPerView: 2,
			},
			'1200': {
				slidesPerView: 2,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		navigation: {
			prevEl: '.arrow-prev',
			nextEl: '.arrow-next',
		},
		pagination: {
			el: '.swiper-pagination-custom',
			type: 'progress'
		},
		on: {
			init: function () {
				updateCustomFraction(this);
			},
			slideChange: function () {
				updateCustomFraction(this);
			},
		},		
		
	});

	//  project 03 Swiper Js
	const project3swiper = new Swiper('.it-project-3-active', {
		speed: 1500,
		loop: true,
		slidesPerView: 4,
		autoplay: true,		
		breakpoints: {
			'1400': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		navigation: {
			prevEl: '.arrow-prev',
			nextEl: '.arrow-next',
		},
		pagination: {
			el: '.swiper-pagination-custom',
			type: 'progress'
		},
		on: {
			init: function () {
				updateCustomFraction(this);
			},
			slideChange: function () {
				updateCustomFraction(this);
			},
		},

	});

	// slider 01  Swiper Js
	const sliderswiper = new Swiper('.it-slider-active', {
		slidesPerView: 1,
		loop: true,
		autoplay: true,
		effect:'fade',
		autoplay: {
			delay: 4000,
		},
		pagination: {
			el: ".it-slider-dots",
			clickable: true,
		},

	});

	//  slider 02 Swiper Js
	const slider2swiper = new Swiper('.it-slider-2-active', {
		slidesPerView: 1,
		loop: true,
		autoplay: true,
		effect:'fade',
		autoplay: {
			delay: 4000,
		},
		navigation: {
			prevEl: '.arrow-prev',
			nextEl: '.arrow-next',
		},
        pagination: {
			el: '.swiper-pagination-custom',
			type: 'progress'
		},
		on: {
			init: function () {
				updateCustomFraction(this);
			},
			slideChange: function () {
				updateCustomFraction(this);
			},
		},	

	});	

	//  slider 03 Swiper Js
	const slider3swiper = new Swiper('.it-slider-3-active', {
		slidesPerView: 1,
		loop: true,
		autoplay: true,
		effect:'fade',
		autoplay: {
			delay: 4000,
		},
		on: {
			init: function () {
			updateCustomFraction(this);
			},
			slideChange: function () {
			updateCustomFraction(this);
			},
		},
	});

	//  Custom Fraction Js
	function updateCustomFraction(swiper) {

		const wrapper = swiper.el.closest('.fraction-wrapper') || document;
		
		const currentEl = wrapper.querySelector('.swiper-current');
		const totalEl = wrapper.querySelector('.swiper-total');
		const progressEl = wrapper.querySelector('.swiper-progress-bar');

		if (!currentEl || !totalEl || !progressEl) return;

		const current = swiper.realIndex + 1;
		const total = swiper.slides.length - swiper.loopedSlides * 2;

		currentEl.textContent = current < 10 ? '0' + current : current;
		totalEl.textContent = total < 10 ? '0' + total : total;

		const progressPercent = (current / total) * 100;
		progressEl.style.width = progressPercent + '%';
	}

	//  postbox Swiper Js
	const postBoxswiper = new Swiper('.postbox-thumb-slider-active', {
		speed: 1500,
		loop: true,
		slidesPerView: 1,
		spaceBetween: 20,
		autoplay: true,
		breakpoints: {
			'1400': {
				slidesPerView: 1,
			},
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		navigation: {
			prevEl: '.postbox-arrow-prev',
			nextEl: '.postbox-arrow-next',
		},
		
	})

})(jQuery);