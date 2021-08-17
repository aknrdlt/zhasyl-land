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