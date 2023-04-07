/* Template: Leno - Mobile App HTML Landing Page Template
   Author: Inovatik
   Created: Mar 2019
   Description: Custom JS file
*/


(function ($) {
    "use strict"; 
	

    /* Card Slider - Swiper */
	var cardSlider = new Swiper('.card-slider', {
	 /*	autoplay: {
            delay: 10000,
            disableOnInteraction: false
		},*/
        loop: true,
        navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev'
		},
		slidesPerView: 3.2,
		spaceBetween: 20,
        breakpoints: {
            // when window is <= 992px
            992: {
                slidesPerView: 3
            },
            // when window is <= 768px
            768: {
                slidesPerView: 1
            } 
        }
    });

    
    /* Image Slider - Swiper */
    var imageSlider = new Swiper('.image-slider', {
//        autoplay: {
//            delay: 2000,
//            disableOnInteraction: false
//		},
        loop: false,
        navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
        spaceBetween: 30,
        slidesPerView: 5,
		breakpoints: {
            // when window is <= 380px
            380: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            // when window is <= 516px
            516: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            // when window is <= 768px
            768: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            // when window is <= 992px
            992: {
                slidesPerView: 4,
                spaceBetween: 30
            },
            // when window is <= 1200px
            1200: {
                slidesPerView: 5,
                spaceBetween: 30
            },
        }
    });

})(jQuery);