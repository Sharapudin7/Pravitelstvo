$('.about-gallery').slick({
    infinite: true,
    responsive: [
        {
            breakpoint: 992,
            settings: {
              arrows: false,
              dots: true,
            }
        }
    ]
});

$('.kultura-gallery').slick({
    infinite: true,
    responsive: [
        {
            breakpoint: 992,
            settings: {
              arrows: false,
              dots: true,
            }
        }
    ]
});

$('.news__items').slick({
    dots: true,
    autoplay: false,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
  
});


$('.dag-peoples-gallery').slick({
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 992,
            settings: {
                arrows: false,
                dots: true,
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                dots: true,
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                dots: true,
                slidesToShow: 2,
            }
        }
    ]
});


// show mob menu

$('.show-mob-menu').click(function() {
    $(this).toggleClass('active');
    $('.nav-menu').toggleClass('show');
    $('body').toggleClass('not-scroll');
});

if ($(window).width() < 991) {
    $('.top-menu__root-item-link').after('<span class="top-menu__dropdown-mob"></span>');
    $('.top-menu__dropdown-mob').click(function() {
        $(this).parent().toggleClass('active');
    });
}
$(function() {
    var link = $('.map-block__districts a');
    link.mouseover(function() {
        $('.map-block__info-title').text($(this).find('h3').html());
        $('.map-block__info-text').text($(this).find('.map-field__text').html());
    });   
})
