$('.works__slider').slick({
    centerMode: true,
    slidesToShow: 1,
    variableWidth: true,
    nextArrow: `<button type="button" class="slick-right"><img src="../img/works-arrowR.svg"></button>`,
    prevArrow: `<button type="button" class="slick-left"><img src="../img/works-arrowL.svg"></button>`,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                variableWidth: false,
            }
        },
    ]
});

$(document).ready(function () {
    $('.triangle').click(function (event) {
        $('.language_switch, .triangle').toggleClass('active');
    });
});

$('.sertificate__slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    nextArrow: `<button type="button" class="slick-right"><img src="../img/works-arrowR.svg"></button>`,
    prevArrow: `<button type="button" class="slick-left"><img src="../img/works-arrowL.svg"></button>`,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});

$('.eq__slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    nextArrow: `<button type="button" class="slick-right"><img src="../img/works-arrowR.svg"></button>`,
    prevArrow: `<button type="button" class="slick-left"><img src="../img/works-arrowL.svg"></button>`,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});

$('.about__slider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    nextArrow: `<button type="button" class="slick-right"><img src="../img/works-arrowR.svg"></button>`,
    prevArrow: `<button type="button" class="slick-left"><img src="../img/works-arrowL.svg"></button>`,
    responsive: [
        {
            breakpoint: 991,
            settings: {
                arrows: false,
                slidesToShow: 3
            }
        },
        {
            breakpoint: 767,
            settings: {
                nextArrow: `<button type="button" class="slick-right"><img src="../img/works-arrowR.svg"></button>`,
                prevArrow: `<button type="button" class="slick-left"><img src="../img/works-arrowL.svg"></button>`,
                slidesToShow: 1
            }
        }
    ]
});

$('.hamburger').on('click', function (e) {
    e.preventDefault;
    $(this).toggleClass('hamburger_active');
    return;
});

$('.hamburger').click(function () {
    if ($(".header__burger-menu").is(":visible") == true) {
        $('.header__burger-menu').hide();
        $('body').css('overflow', 'auto');
    } else {
        $('.header__burger-menu').show();
        $('body').css('overflow', 'hidden')
        $('.header__link').click(function () {
            $('.header__burger-menu').hide();
            $('body').css('overflow', 'auto');
            $('.hamburger_active').removeClass('hamburger_active');
        });
    }
});

$('.paper__more').click(function () {
    $('.modal').fadeIn();
    return false;
});

$('.modal__close').click(function () {
    $(this).parents('.modal').fadeOut();
    return false;
});

$(document).keydown(function (e) {
    if (e.keyCode === 27) {
        e.stopPropagation();
        $('.modal').fadeOut();
    }
});

$('.modal').click(function (e) {
    if ($(e.target).closest('.modal__inner').length == 0) {
        $(this).fadeOut();
    }
});
