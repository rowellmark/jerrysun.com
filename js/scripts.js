(function ($, w, d, h, b) {
	$(document).ready(function () {

		/**
		 * Construct.
		 */
		__construct = () => {
			initNavigation();
			onScrollFixed();
			
			/// specific for homepage
			if ($(b).hasClass('home')) {
				runQuickSearch();
				runCounter();
				runFeaturedListings();
				runLuxuryListings();
			}
			AOS.init({ disable: 'mobile' });
		}

		initNavigation = () => {
			const $nav = $('#nav')
			if ($nav.length > 0) $nav.navTabDoubleTap();
		}
		onScrollFixed = () => {
			this.onScrollFixed = () => {
				const $header = $('.header');

				$(w).on('load scroll', function () {
					let currentScroll = w.pageYOffset || d.documentElement.scrollTop;
					let isDesktop = w.matchMedia('(min-width: 992px)').matches;

					if (isDesktop) {
						if (currentScroll > 0) {
							$header.addClass('--headerFixed');
						}
						else {
							$header.removeClass('--headerFixed');
						}
					}
					else {
						$header.removeClass('--headerFixed');
					}

				});
			}
			this.onScrollFixed();
		}
		runQuickSearch = () => {
			$qcTrigger = $('.quickSearch--title');
			$qcForm = $('.quickSearch ');


			$qcTrigger.on('click', function () {
				$qcForm.addClass('active');
			});
			
		}
		commaSeparateNumber = (val) => {
			while (/(\d+)(\d{3})/.test(val.toString())) {
				val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
			}
			return val;
		}
		runCounter = () => {

			if ($('body').hasClass('home')) {
				function isScrolledIntoView(elem) {
					const docViewTop = jQuery(window).scrollTop();
					let docViewBottom = docViewTop + jQuery(window).height();

					let elemTop = jQuery(elem).offset().top;
					let elemBottom = elemTop + jQuery(elem).height();

					return elemBottom <= docViewBottom && elemTop >= docViewTop;
				}

				var shown = false;

				$(w).scroll(function () {
					var myelement = $(".hpProvenPerformance__wrap");
					if (isScrolledIntoView(myelement)) {
						if (!shown) {
							$(".hpProvenPerformance__lists em").each(function () {
								var $this = $(this);
								const limit = parseInt($this.attr("data-number"));

								$({ Counter: 0 }).animate(
									{ Counter: limit },
									{
										duration: 1000,
										easing: "swing",
										step: function () {
											$this.text(commaSeparateNumber(Math.ceil(this.Counter)));
										},
									}
								);
							});
						}
						shown = true;
					}
				});
			}
		}
		runFeaturedListings = () => {
		
			const $pagination = $('.featuredListings__pagination button');
			let featuredListings = new Splide('.featuredListings', {
				type: 'loop',
				perPage: 3,
				rewind: true,
				pagination: false,
				arrows: false,
				breakpoints: {
					991: {
						perPage:1
					},
				
				},
			});


			$pagination.on('click', function (e) {
				e.preventDefault();
				var $this = jQuery(this);
				var type = $this.attr('data-arrow');

				console.log(type);
				// for prev
				if (type == 'prev') {
					featuredListings.go('<');
				}
				if (type == 'next') {
					featuredListings.go('>');
				}
			});
			featuredListings.mount();
		}

		runLuxuryListings = () => {
			
			const $pagination = $('.LuxuryListings__pagination button');
			let LuxuryListings = new Splide('.LuxuryListings', {
				type: 'loop',
				perPage: 3,
				rewind: true,
				pagination: false,
				arrows: false,
				breakpoints: {
					991: {
						perPage: 1
					},

				},
			});


			$pagination.on('click', function (e) {
				e.preventDefault();
				var $this = jQuery(this);
				var type = $this.attr('data-arrow');

				console.log(type);
				// for prev
				if (type == 'prev') {
					LuxuryListings.go('<');
				}
				if (type == 'next') {
					LuxuryListings.go('>');
				}
			});
			LuxuryListings.mount();

		}
		/**
		 * Instant Initiate
		 */
		__construct();

	});

	$(window).on('load', function () {
		$('body').addClass('site-loaded');

	});

})(jQuery, window, document, 'html', 'body');