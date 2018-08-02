
    var accordion = (function(){

        var $accordion = $('.js-accordion');
        var $accordion_header = $accordion.find('.js-accordion-header');
        var $accordion_item = $('.js-accordion-item');

        // default settings
        var settings = {
            // animation speed
            speed: 400,

            // close all other accordion items if true
            oneOpen: false
        };

        return {
            // pass configurable object literal
            init: function($settings) {
                $accordion_header.on('click', function() {
                    accordion.toggle($(this));
                });

                $.extend(settings, $settings);

                // ensure only one accordion is active if oneOpen is true
                if(settings.oneOpen && $('.js-accordion-item.active').length > 1) {
                    $('.js-accordion-item.active:not(:first)').removeClass('active');
                }

                // reveal the active accordion bodies
                $('.js-accordion-item.active').find('> .js-accordion-body').show();
            },
            toggle: function($this) {

                if(settings.oneOpen && $this[0] != $this.closest('.js-accordion').find('> .js-accordion-item.active > .js-accordion-header')[0]) {
                    $this.closest('.js-accordion')
                        .find('> .js-accordion-item')
                        .removeClass('active')
                        .find('.js-accordion-body')
                        .slideUp()
                }

                // show/hide the clicked accordion item
                $this.closest('.js-accordion-item').toggleClass('active');
                $this.next().stop().slideToggle(settings.speed);
            }
        }
    })();




$(document).ready(function(){
    accordion.init({ speed: 300, oneOpen: true });
});

$('.advantages-slider__wrapper').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 1000,
    slidesToShow: 1,
    autoplay: true,
    fade: true,
    cssEase: 'linear'
});


var slickParameters = {
    dots: false,
    arrows: false,
    autoplay: true,
    infinite: true,
    speed: 1000,
    slidesToShow: 1,
    centerMode: true,
    focusOnSelect: true
};


$(".our-videos__wrapper").slick({
    dots: false,
    arrows: true,
    autoplay: true,
    infinite: true,
    speed: 1000,
    slidesToShow: 2,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                slidesToShow: 1
            }
        }

    ]
});

$('.main-slider-production').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.nav-slider-production',
    responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToScroll: 1,
                centerMode: true,
                focusOnSelect: true,
                fade: false
            }
        }
    ]
});
$('.nav-slider-production').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    asNavFor: '.main-slider-production',
    dots: false,
    arrows: false,
    autoplay: true,
    centerMode: false,
    focusOnSelect: true,
    responsive: [
        {
            breakpoint: 1469,
            settings: {
                // slidesToShow: 5,
                // slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                // arrows: false,
                // slidesToShow: 1
            }
        }

    ]

});


function slickUnslickCategory() {
    var windowWidth = $(window).width();
    if (windowWidth < 992) {
        if (!$('.category-wrapper').hasClass('slick-slider')) {
            $('.category-wrapper').slick(slickParameters);
        }
    } else {
        if ($('.category-wrapper').hasClass('slick-slider')) {
            $('.category-wrapper').slick('unslick');
        }
    }
}

slickUnslickCategory();


function slickUnslick() {
    var windowWidth = $(window).width();
    if (windowWidth < 992) {
        if (!$('.vagonchiki').hasClass('slick-slider')) {
            $('.vagonchiki').slick(slickParameters);
        }
    } else {
        if ($('.vagonchiki').hasClass('slick-slider')) {
            $('.vagonchiki').slick('unslick');
        }
    }
}

slickUnslick();


function slickUnslickGallery() {
    var windowWidth = $(window).width();
    if (windowWidth < 992) {
        if (!$('.gallery-container__wrapper').hasClass('slick-slider')) {
            $('.gallery-container__wrapper').slick(slickParameters);
        }
    } else {
        if ($('.gallery-container__wrapper').hasClass('slick-slider')) {
            $('.gallery-container__wrapper').slick('unslick');
        }
    }
}

slickUnslickGallery();

$(window).on('resize', function () {
    slickUnslick();
    slickUnslickGallery();
    slickUnslickCategory();

});

var menu = document.querySelector("#menu-burger")

menu.addEventListener("click", function () {
    this.classList.toggle("active");
});


$('#order-btn').on('click',function(){
    var price = $(this).attr('data-price');
    $('#order-value').val(price);

});



// Init AOS
AOS.init();





