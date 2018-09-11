$(function () {

    /*ITEMS*/
    $('.jsControl').on('click', function (e) {
        e.preventDefault();

        var button = $(this),
            action = button.data('action'),
            item = button.closest('.jsItem'),
            id = item.data('id'),
            data = {
                id: id,
                action: action
            };

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    button.toggleClass('active');
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    });

    $('.type__button').on('click', function (e) {
        var button = $(this),
            type = button.data('type'),
            parent = button.closest('.type'),
            buttons = parent.find('.type__button').not(button),
            items = $('.items'),
            data = {
                action: 'type',
                type: type
            };


        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    buttons.removeClass('active');
                    button.addClass('active');

                    if (type == 'list') {
                        items.addClass('list');
                    } else {
                        items.removeClass('list');
                    }

                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    });
    /*END ITEMS*/

    /*FILTERS*/

    /*JQ UI*/
    $('.sort__select').selectmenu();

    $('.range__range').each(function (indx, elem) {
        var range = $(elem),
            filter = range.closest('.range'),
            min = filter.data('from'),
            max = filter.data('to'),
            inputFrom = filter.find('.range__input_from'),
            inputTo = filter.find('.range__input_to');

        // debugger;

        range.slider({
            range: true,
            min: min,
            max: max,
            values: [min, max],
            slide: function (event, ui) {
                inputFrom.val(ui.values[0]);
                inputTo.val(ui.values[1]);
            }
        });
    });

    $('.range__input_from').on('input', function (e) {

        var input = $(this),
            val = parseInt(input.val()),
            filter = input.closest('.range'),
            valTo = parseInt(filter.find('.range__input_to').val()),
            range = filter.find('.range__range');


        range.slider("values", [val, valTo]);
    });

    $('.filter__input_to').on('input', function (e) {

        var input = $(this),
            val = parseInt(input.val()),
            filter = input.closest('.range'),
            valFrom = parseInt(filter.find('.range__input_from').val()),
            range = filter.find('.range__range');


        range.slider("values", [valFrom, val]);
    });
    /*END JQ UI*/

    $('.filter__title').on('click', function (e) {
        var button = $(this),
            filter = button.closest('.filter');

        filter.toggleClass('open');
    });
    /*END FILTERS*/

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

    $('.product__switch').on('click', function (e) {
        e.preventDefault();

        var button = $(this),
            href = button.attr('href'),
            buttons = $('.product__switch').not(button),
            tab = $(href),
            tabs = $('.product__tab').not(tab);

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

    $('.product__preview').on('click', function (e) {
        e.preventDefault();
        changeImg($(this));
    });

    setInterval(function (e) {
        var preview = $('.product__preview.active'),
            nextPreview = preview.next('.product__preview');

        if (nextPreview.length == 0) {
            nextPreview = preview.prev('.product__preview');
        }

        changeImg(nextPreview);

    }, 5000);

    function changeImg(button) {
        var preview = button,
            href = preview.attr('href'),
            caption = preview.data('caption'),
            previews = $('.product__preview').not(preview),
            fancy = $('.product__fancybox'),
            fancyImg = fancy.find('.product__pic');

        fancy.attr('href', href).attr('data-caption', caption);
        fancyImg.attr('src', href).attr('alt', caption).attr('title', caption);
        previews.removeClass('active');
        preview.addClass('active');
    }

    $('.com__hand').on('click', function (e) {

        var button = $(this),
            id = button.data('id'),
            countObj = button.find('.com__hand-int'),
            countInt = parseInt(countObj.text()),
            data = {
                id: id,
                action: 'vote'
            };

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    countInt++;
                    countObj.text(countInt);
                    button.prop('disabled', true);
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

    var popularSwiper = new Swiper('.popular__container', {
        loop: true,
        slidesPerView: 4,
        spaceBetween: 30,
        navigation: {
            nextEl: '.popular__next .arrow',
            prevEl: '.popular__prev .arrow',
        },
    });

    var lookSwiper = new Swiper('.look__container', {
        loop: true,
        slidesPerView: 4,
        spaceBetween: 30,
        navigation: {
            nextEl: '.look__next .arrow',
            prevEl: '.look__prev .arrow',
        },
    });
    /*END SLIDERS*/
});