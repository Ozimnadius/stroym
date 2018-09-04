$(function () {

    /*SLIDERS*/
    var bannerSwiper = new Swiper ('.banner__container', {
        loop: true,
        pagination: {
            el: '.banner__pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.banner__next',
            prevEl: '.banner__prev',
        },
    });
    /*END SLIDERS*/
});