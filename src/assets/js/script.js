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





function slickUnslickCategory() {
    var windowWidth =  $(window).width();
    if(windowWidth < 992) {
        if(!$('.category-wrapper').hasClass('slick-slider')) {
            $('.category-wrapper').slick(slickParameters);
        }
    } else {
        if($('.category-wrapper').hasClass('slick-slider')) {
            $('.category-wrapper').slick('unslick');
        }
    }
}
slickUnslickCategory();


function slickUnslick() {
    var windowWidth =  $(window).width();
    if(windowWidth < 992) {
        if(!$('.vagonchiki').hasClass('slick-slider')) {
            $('.vagonchiki').slick(slickParameters);
        }
    } else {
        if($('.vagonchiki').hasClass('slick-slider')) {
            $('.vagonchiki').slick('unslick');
        }
    }
}
slickUnslick();


function slickUnslickGallery() {
    var windowWidth =  $(window).width();
    if(windowWidth < 992) {
        if(!$('.gallery-container__wrapper').hasClass('slick-slider')) {
            $('.gallery-container__wrapper').slick(slickParameters);
        }
    } else {
        if($('.gallery-container__wrapper').hasClass('slick-slider')) {
            $('.gallery-container__wrapper').slick('unslick');
        }
    }
}

slickUnslickGallery();

$(window).on('resize', function() {
    slickUnslick();
    slickUnslickGallery();
    slickUnslickCategory();

});

var menu = document.querySelector("#menu-burger")

menu.addEventListener("click", function () {
    this.classList.toggle("active");
});

$('#myAffix').affix({
    offset: {
        top: 100,
        bottom: function () {
            return (this.bottom = $('.footer').outerHeight(true))
        }
    }
});


// Init AOS
AOS.init();





