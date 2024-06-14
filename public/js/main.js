(function ($) {
    'use strict';

    $(document).ready(function () {

        // DOM elements
        var $window = $(window),
            $document = $(document),
            $body = $('body'),
            $html = $('html');

        // Initialize all methods
        salActive();
        slickSlider();
        headerSticky();
        counterUp();
        masonryActivation();
        lightboxActivation();
        wowActivation();
        popupMobileMenu();
        bgMarque();

        function bgMarque() {
            $('.background-marque').each(function () {
                var t = 0;
                var i = 1;
                var $this = $(this);
                setInterval(function () {
                    t += i;
                    $this.css('background-position-x', -t + "px");
                }, 10);
            });
        }

        function salActive() {
            sal({
                threshold: 0.01,
                once: true, // Ensure animations trigger only once
            });
        }

        function slickSlider() {
            // Initialize Slick slider
            $('.slider').slick({
                dots: false,
                infinite: true,
                arrows: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                fade: true,
                cssEase: 'linear',
                prevArrow: '<button class="slide-arrow prev-arrow"><i class="icon-arrow-left-line"></i></button>',
                nextArrow: '<button class="slide-arrow next-arrow"><i class="icon-arrow-right-line-right"></i></button>'
            });

            // Initialize testimonials slider
            $('.testimonials_list').slick({
                dots: true,
                infinite: true,
                arrows: false,
                speed: 500,
                slidesToShow: 2,
                slidesToScroll: 2,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            // Initialize partners slider
            $('.partners_list').slick({
                dots: false,
                infinite: true,
                arrows: false,
                speed: 500,
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 6
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            });

            // Reinitialize sal.js after each slide change in all sliders
            $('.slider, .testimonials_list, .partners_list').on('afterChange', function(event, slick, currentSlide){
                salActive(); // Reinitialize sal.js animations
            });
        }

        function headerSticky() {
            $window.scroll(function () {
                if ($(this).scrollTop() > 0) {
                    $('.header-sticky').addClass('sticky');
                } else {
                    $('.header-sticky').removeClass('sticky');
                }
            });
        }

        function counterUp() {
            var odo = $('.odometer');
            odo.each(function () {
                $(this).appear(function () {
                    var countNumber = $(this).attr('data-count');
                    $(this).html(countNumber);
                });
            });
        }

        function masonryActivation() {
            $window.on('load', function () {
                $('.masonary-wrapper-activation').imagesLoaded(function () {
                    // filter items on button click
                    $('.isotop-filter').on('click', 'button', function () {
                        var filterValue = $(this).attr('data-filter');
                        $(this).siblings('.is-checked').removeClass('is-checked');
                        $(this).addClass('is-checked');
                        $grid.isotope({
                            filter: filterValue
                        });
                    });

                    // init Isotope
                    var $grid = $('.mesonry-list').isotope({
                        percentPosition: true,
                        transitionDuration: '0.7s',
                        layoutMode: 'masonry',
                        masonry: {
                            columnWidth: '.resizer',
                        }
                    });
                });
                $('.equal_height').matchHeight();
                $('.equal_height_inner').matchHeight();
            });
        }

        function lightboxActivation() {
            lightGallery(document.getElementById('animated-thumbnials'), {
                thumbnail: true,
                animateThumb: false,
                showThumbByDefault: false
            });
        }

        function wowActivation() {
            new WOW().init();
        }

        function popupMobileMenu() {
            $('.hamberger-button').on('click', function () {
                $('.popup-mobile-menu').addClass('active');
            });
            $('.close-menu').on('click', function () {
                $('.popup-mobile-menu').removeClass('active');
                $('.popup-mobile-menu .mainmenu .has-droupdown > a').siblings('.submenu, .rn-megamenu').removeClass('active').slideUp('400');
                $('.popup-mobile-menu .mainmenu .has-droupdown > a').removeClass('open');
            });
            $('.popup-mobile-menu .mainmenu .has-droupdown > a').on('click', function (e) {
                e.preventDefault();
                $(this).siblings('.submenu, .rn-megamenu').toggleClass('active').slideToggle('400');
                $(this).toggleClass('open');
            });
            $('.popup-mobile-menu').on('click', function (e) {
                if (e.target === this) {
                    $('.popup-mobile-menu').removeClass('active');
                    $('.popup-mobile-menu .mainmenu .has-droupdown > a').siblings('.submenu, .rn-megamenu').removeClass('active').slideUp('400');
                    $('.popup-mobile-menu .mainmenu .has-droupdown > a').removeClass('open');
                }
            });
        }

        lozad('.lozad', {
            load: function(el) {
                el.src = el.dataset.src;
                el.onload = function() {
                    el.classList.add('fadelazy')
                }
            }
        }).observe();

    });

})(jQuery);
