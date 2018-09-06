$(function () {

    /*OTHER*/
    $('.switch').on('click', function (e) {
        e.preventDefault();

        var button = $(this),
            href = button.attr('href'),
            buttons = $('.switch').not(button),
            tab = $(href),
            tabs = $('.tab').not(tab);

        buttons.removeClass('active');
        tabs.removeClass('active');
        button.addClass('active');
        tab.addClass('active');

    });

    $('.more__button').on('click', function () {

        var button = $(this),
            more = button.closest('.more'),
            hidden = more.find('.more__hidden'),
            action = button.data('action'),
            data = {
                action: action,
            };

        button.addClass('active');

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    hidden.append(result.html);
                    button.removeClass('active');
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });


    });
    /*END OTHER*/

    /*SLIDERS*/
    var bannerSwiper = new Swiper('.banner__container', {
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

    var brandsSwiper = new Swiper('.main-brands__container', {
        loop: true,
        slidesPerView: 4,
        spaceBetween: 15,
        navigation: {
            nextEl: '.main-brands__next .arrow',
            prevEl: '.main-brands__prev .arrow',
        },
    });

    var aboutSwiper = new Swiper('.main-about__container', {
        loop: true,
        slidesPerView: 2,
        spaceBetween: 30,
        pagination: {
            el: '.main-about__pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.main-about__next .arrow',
            prevEl: '.main-about__prev .arrow',
        },
    });
    /*END SLIDERS*/
});