$(document).ready(function () {

    let viewportSm;
    let viewportMd;
    let viewportLg;
    let viewportXl;

    let viewportBiggerXl = false;
    let viewportBiggerLg = false;
    let viewportBiggerMd = false;
    let viewportBiggerSm = false;

    let viewportSmallerXl = false;
    let viewportSmallerLg = false;
    let viewportSmallerMd = false;
    let viewportSmallerSm = false;

    let xl = '1200';
    let lg = '992';
    const md = '768';
    let sm = '375';

    let viewportWidth = $(window).width();

    if (viewportWidth < md)
        viewportSm = true;

    if (viewportWidth >= md && viewportWidth < lg)
        viewportMd = true;

    if (viewportWidth >= 1200)
        viewportXl = true;

    if (viewportWidth >= xl)
        viewportLg = true;

    if (viewportWidth > 992)
        viewportBiggerLg = true;

    if (viewportWidth > 768)
        viewportBiggerMd = true;

    if (viewportWidth >= 600)
        viewportBiggerSm = true;


    if (viewportWidth < 1200)
        viewportSmallerXl = true;

    if (viewportWidth < 992)
        viewportSmallerLg = true;

    if (viewportWidth < md)
        viewportSmallerMd = true;

    if (viewportWidth < 600)
        viewportSmallerSm = true;

    /*
        ANCHOR SCROLL
         */
    let header = document.querySelector('.header');
    let headerHeight = parseInt(getComputedStyle(header).height) - 1;
    let offset = 30;

    $("a[href^='#']").click(function(e){
        e.preventDefault();
        let _href = $(this).attr("href");
        let paddingTop = parseInt($(_href).css('paddingTop').replace('px', ''));
        let scrollTop = ($(_href).offset().top - headerHeight + offset)+"px";
        $("html, body").animate({scrollTop: scrollTop}, 1200, 'easeInOutQuart');
    });


    let $hamburger = $('.js-hamburger');
    let $mobileMenu = $('.js-mobile_nav');
    $hamburger.on('click', function () {
        $hamburger.toggleClass('is-active');
        $mobileMenu.fadeToggle();
    });

    let $nav = $('.header__nav_mobile');
    let $navLinks = $('nav a');
    $navLinks.on('click', function () {
        if(viewportWidth < md) {
            $nav.fadeOut();
            $hamburger.removeClass('is-active');
        }
    });

    /*
    STICKY HEADER
     */
    if(viewportSm) {
        let $header = $('header');
        let scrollToStick = 500;
        $(window).on('scroll', function () {
            let scroll = $(this).scrollTop();
            if(scroll >= scrollToStick) {
                $header.addClass('header_sticky');
            } else {
                $header.removeClass('header_sticky');
            }
        });
    }

});
