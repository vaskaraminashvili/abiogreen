(function ($) {
	"use strict";

	var windowOn = $(window);
	///////////////////////////////////////////////////
	//  PreLoader Js
	windowOn.on('load', function () {
		$('#preloader').fadeOut(500);
	});


	///////////////////////////////////////////////////
	//  Sticky Header Js
	windowOn.on('scroll', function () {
		var scroll = windowOn.scrollTop();
		if (scroll < 400) {
			$("#header-sticky").removeClass("header-sticky");
		} else {
			$("#header-sticky").addClass("header-sticky");
		}
	});

	if ($('.it-header-height').length > 0) {
		var headerHeight = document.querySelector(".it-header-height");
		var setHeaderHeight = headerHeight.offsetHeight;
		$(".it-header-height").each(function () {
			$(this).css({
				'height': setHeaderHeight + 'px'
			});
		});

		$(".it-header-height .header-sticky").each(function () {
			$(this).css({
				'height': inherit,
			});
		});
	}

	// Nice Select Js
	$('select').niceSelect();

	//  Data CSS Js
	$("[data-background").each(function () {
		$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
	});

	$("[data-width]").each(function () {
		$(this).css("width", $(this).attr("data-width"));
	});

	$("[data-bg-color]").each(function () {
		$(this).css("background-color", $(this).attr("data-bg-color"));
	});

	// accordion
	$(".accordion-items").on("click", function () {
		if ($(this).hasClass("active")) {
			$(this).removeClass("active");
		} else {
			$(this).addClass("active").siblings().removeClass("active");
		}
	});


	////////////////////////////////////////////////////
	// Counter Js
	if ($(".purecounter").length) {
		new PureCounter({
			filesizing: true,
			selector: ".filesizecount",
			pulse: 2,
		});
		new PureCounter();
	}
	////////////////////////////////////////////////////
	//  magnificPopup Js
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	////////////////////////////////////////////////////
	//  MagnificPopup video view Js
	$(".popup-video").magnificPopup({
		type: "iframe",
	});

	////////////////////////////////////////////////////
	//  isotope
	$('.grid').imagesLoaded(function () {
		// init Isotope
		var $grid = $('.grid').isotope({
			itemSelector: '.grid-item',
			percentPosition: true,
			masonry: {
				columnWidth: '.grid-item',
			},

		});
		// filter items on button click
		$('.masonary-menu').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({
				filter: filterValue,
				animationOptions: {
					duration: 100,
					easing: "linear",
					queue: true
				}
			});

		});
		//for menu active class
		$('.masonary-menu button').on('click', function (event) {
			$(this).siblings('.active').removeClass('active');
			$(this).addClass('active');
			event.preventDefault();
		});

	});


	if ($('.it-menu-content').length && $('.it-menu-mobile').length) {
		let navContent = document.querySelector(".it-menu-content").outerHTML;
		let mobileNavContainer = document.querySelector(".it-menu-mobile");
		mobileNavContainer.innerHTML = navContent;

		let arrow = $(".it-menu-mobile .has-dropdown > a");

		arrow.each(function () {
			let self = $(this);
			let arrowBtn = document.createElement("BUTTON");
			arrowBtn.classList.add("dropdown-toggle-btn");
			arrowBtn.innerHTML = "<i class='fal fa-angle-right'></i>";
			self.append(function () {
				return arrowBtn;
			});

			self.find("button").on("click", function (e) {
				e.preventDefault();
				let self = $(this);
				self.toggleClass("dropdown-opened");
				self.parent().toggleClass("expanded");
				self.parent().parent().addClass("dropdown-opened").siblings().removeClass("dropdown-opened");
				self.parent().parent().children(".it-submenu").slideToggle();
			});

		});
	}

	///////////////////////////////////////////////////
	// scroll-to-target 
	windowOn.on('scroll', function () {
		var scroll = windowOn.scrollTop();
		if (scroll < 500) {
			$('.scroll-to-target').removeClass('open');

		} else {
			$('.scroll-to-target').addClass('open');
		}
	});

	///////////////////////////////////////////////////
	// Scroll Up Js
	if ($('.scroll-to-target').length) {
		$(".scroll-to-target").on('click', function () {
			var target = $(this).attr('data-target');
			// animate
			$('html, body').animate({
				scrollTop: $(target).offset().top
			}, 1000);

		});
	}

	////////////////////////////////////////////////////
	// Sidebar Js
	$(".it-menu-bar").on("click", function () {
		$(".itoffcanvas").addClass("opened");
		$(".body-overlay").addClass("apply");
	});
	$(".close-btn").on("click", function () {
		$(".itoffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
	});
	$(".body-overlay").on("click", function () {
		$(".itoffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
		$(".search__popup").removeClass("search-opened");
	});

	////////////////////////////////////////////////////
	//  Search Js
    if($('.search-box-outer').length) {
		$('.search-box-outer').on('click', function() {
			$('.search-popup').addClass('search-active');
			$(".body-overlay").addClass("apply");
		});
		$('.close-search').on('click', function() {
			$('.search-popup').removeClass('search-active');
			$(".body-overlay").removeClass("apply");
		});
	}

	///////////////////////////////////////////////////
	// wow animation
	var wow = new WOW(
		{
		  mobile: true,
		}
	  );
	  wow.init();
	var windowOn = $(window);


	////////////////////////////////////////////////////
	//  Cart Quantity Js
	$('.cart-minus').on('click', function () {
		var $input = $(this).parent().find('input');
		var count = parseInt($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});

	$('.cart-plus').on('click', function () {
		var $input = $(this).parent().find('input');
		$input.val(parseInt($input.val()) + 1);
		$input.change();
		return false;
	});


	// Show Login Toggle Js
	$('#showlogin').on('click', function () {
		$('#checkout-login').slideToggle(900);
	});


	$('#cbox').on('click', function () {

		$('#cbox_info').slideToggle(900);
	
	});


	$('#showcoupon').on('click', function () {

		$('#checkout_coupon').slideToggle(900);
	});


	// for range
	$(".slider-range").slider({
		range: true,
		min: 0,
		max: 1200,
		values: [80, 700],
		slide: function (event, ui) {
			$(".amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
		}
	});
	$(".amount").val("$" + $(".slider-range").slider("values", 0) +
		" - $" + $(".slider-range").slider("values", 1));

	

	// Jquery Appear raidal
	if (typeof ($.fn.knob) != 'undefined') {
		$('.knob').each(function () {
		var $this = $(this),
		knobVal = $this.attr('data-rel');

		$this.knob({
		'draw': function () {
			$(this.i).val(this.cv + '%')
		}
		});

		$this.appear(function () {
		$({
			value: 0
		}).animate({
			value: knobVal
		}, {
			duration: 2000,
			easing: 'swing',
			step: function () {
			$this.val(Math.ceil(this.value)).trigger('change');
			}
		});
		}, {
		accX: 0,
		accY: -150,
		});
	});
	}

	// before-after
	if ($(".before-after").length > 0) {
		$('.before-after').beforeAfter({
			movable: true,
			clickMove: true,
			position: 50,
			separatorColor: '#fafafa',
			bulletColor: '#fafafa',
			onMoveStart: function (e) {
				console.log(event.target);
			},
			onMoving: function () {
				console.log(event.target);
			},
			onMoveEnd: function () {
				console.log(event.target);
			},
		});
	}

	// price tab
	if ($('#lineMarker').length > 0) {

		function it_tab_bg() {
			let marker = document.querySelector('#lineMarker');
			let item = document.querySelectorAll('.it-marker-tab ul li button');
			let itemActive = document.querySelector('.it-marker-tab ul li .nav-links.active');
			function indicator(e) {
				marker.style.left = e.offsetLeft + "px";
				marker.style.width = e.offsetWidth + "px";
			}
			item.forEach(link => {
				link.addEventListener('click', (e) => {
					indicator(e.target);
				});
			});

			let activeNav = $('.it-marker-tab ul li .nav-links.active');
			let activewidth = $(activeNav).width();
			let activePadLeft = parseFloat($(activeNav).css('padding-left'));
			let activePadRight = parseFloat($(activeNav).css('padding-right'));
			let totalWidth = activewidth + activePadLeft + activePadRight;

			let precedingAnchorWidth = anchorWidthCounter();


			$(marker).css('display', 'block');

			$(marker).css('width', totalWidth);

			function anchorWidthCounter() {
				let anchorWidths = 0;
				let a;
				let aWidth;
				let aPadLeft;
				let aPadRight;
				let aTotalWidth;
				$('.it-marker-tab ul li button').each(function (index, elem) {
					let activeTest = $(elem).hasClass('active');
					marker.style.left = elem.offsetLeft + "px";
					if (activeTest) {
						return false;
					}
					a = $(elem).find('button');
					aWidth = a.width();
					aPadLeft = parseFloat(a.css('padding-left'));
					aPadRight = parseFloat(a.css('padding-right'));
					aTotalWidth = aWidth + aPadLeft + aPadRight;
					anchorWidths = anchorWidths + aTotalWidth;

				});

				return anchorWidths;
			}
		}
		it_tab_bg();
	}

	// split text animation
	if ($('.it-split-text').length > 0) {
		gsap.registerPlugin(SplitText);

		const animationConfigs = {
			'it-split-in-right': { opacity: 0, x: 50, ease: "back.out" },
			'it-split-in-left': { opacity: 0, x: -50, ease: "circ.out" },
			'it-split-in-up': { opacity: 0, y: 80, ease: "circ.out" },
			'it-split-in-down': { opacity: 0, y: -80, ease: "circ.out" }
		};

		$(".it-split-text").each(function (_, el) {
			el.split = new SplitText(el, { type: "lines,words,chars", linesClass: "it-split-line" });
			gsap.set(el, { perspective: 400 });

			// Find which class matches and set initial state
			for (let cls in animationConfigs) {
				if ($(el).hasClass(cls)) {
					gsap.set(el.split.chars, animationConfigs[cls]);
					break;
				}
			}

			el.anim = gsap.to(el.split.chars, {
				scrollTrigger: {
					trigger: el,
					start: "top 90%",
				},
				x: 0,
				y: 0,
				rotateX: 0,
				scale: 1,
				opacity: 1,
				duration: 0.4,
				stagger: 0.02
			});
		});
	}

	// IT Fade Animation 
	let fadeArray_items = document.querySelectorAll(".it-fade-anim");
	if (fadeArray_items.length > 0) {
		const fadeArray = gsap.utils.toArray(".it-fade-anim")
		fadeArray.forEach((item, i) => {

			var fade_direction = "bottom"
			var onscroll_value = 1
			var duration_value = 1.15
			var fade_offset = 50
			var delay_value = 0.15
			var ease_value = "power2.out"

			if (item.getAttribute("data-fade-offset")) {
				fade_offset = item.getAttribute("data-fade-offset");
			}
			if (item.getAttribute("data-duration")) {
				duration_value = item.getAttribute("data-duration");
			}

			if (item.getAttribute("data-fade-from")) {
				fade_direction = item.getAttribute("data-fade-from");
			}
			if (item.getAttribute("data-on-scroll")) {
				onscroll_value = item.getAttribute("data-on-scroll");
			}
			if (item.getAttribute("data-delay")) {
				delay_value = item.getAttribute("data-delay");
			}
			if (item.getAttribute("data-ease")) {
				ease_value = item.getAttribute("data-ease");
			}

			let animation_settings = {
				opacity: 0,
				ease: ease_value,
				duration: duration_value,
				delay: delay_value,
			}

			if (fade_direction == "top") {
				animation_settings['y'] = -fade_offset
			}
			if (fade_direction == "left") {
				animation_settings['x'] = -fade_offset;
			}

			if (fade_direction == "bottom") {
				animation_settings['y'] = fade_offset;
			}

			if (fade_direction == "right") {
				animation_settings['x'] = fade_offset;
			}

			if (onscroll_value == 1) {
				animation_settings['scrollTrigger'] = {
					trigger: item,
					start: 'top 85%',
				}
			}
			gsap.from(item, animation_settings);
		})
	}

	// Reveal Animation 
	const anim_reveal = document.querySelectorAll(".it_text_reveal_anim");
	anim_reveal.forEach(areveal => {
	
		var duration_value = 1.5
		var onscroll_value = 1
		var stagger_value = 0.02
		var data_delay = 0.05
	
		if (areveal.getAttribute("data-duration")) {
			duration_value = areveal.getAttribute("data-duration");
		}
		if (areveal.getAttribute("data-on-scroll")) {
			onscroll_value = areveal.getAttribute("data-on-scroll");
		}
		if (areveal.getAttribute("data-stagger")) {
			stagger_value = areveal.getAttribute("data-stagger");
		}
		if (areveal.getAttribute("data-delay")) {
			data_delay = areveal.getAttribute("data-delay");
		}
	
		areveal.split = new SplitText(areveal, {
			type: "lines,words,chars",
			linesClass: "it-reveal-line"
		});
	
		if (onscroll_value == 1) {
			areveal.anim = gsap.from(areveal.split.chars, {
				scrollTrigger: {
					trigger: areveal,
					start: 'top 85%',
				},
				duration: duration_value,
				delay: data_delay,
				ease: "circ.out",
				y: 80,
				stagger: stagger_value,
				opacity: 0,
			});
		} else {
			areveal.anim = gsap.from(areveal.split.chars, {
				duration: duration_value,
				delay: data_delay,
				ease: "circ.out",
				y: 80,
				stagger: stagger_value,
				opacity: 0,
			});
		}
	
	});

		// testimonial
	$('.it-testimonial-slider-active').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: $('.arrow-prev'),
		nextArrow: $('.arrow-next'),
		fade: false,
		speed: 1000,
		asNavFor: '.it-testimonial-info-active'
	});
	
	$('.it-testimonial-info-active').slick({	
		slidesToShow: 4,
		slidesToScroll: 1,
		asNavFor: '.it-testimonial-slider-active',
		dots: false,
		arrows: false,
		focusOnSelect: true,
		centerPadding: '0',
		centerMode: true,
		speed: 1000,
		// infinite: true,
		responsive: [
			{
				breakpoint: 1400,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 480,
				settings: {
					arrows: false,
					slidesToShow: 1,
				}
			}
			
		]
	});

	//One Page navigation
	function scrollNav() {
		$('.it-onepage-menu li a').on('click', function () {
			$(".it-onepage-menu li a").removeClass("active");
			$(this).addClass("active");

			$('html, body').stop().animate({
				scrollTop: $($(this).attr('href')).offset().top - 80
			}, 300);
			return false;
		});
	}
	scrollNav();
	 
})(jQuery);