$(function () {

    /*FUNCTIONS*/
    function calcSum(item) {
        // var count = parseInt(item.find('.count__val').val()),
        //     price = parseInt(item.data('price')),
        //     sum = count * price,
        //     sumObj = item.find('.basket__item-sum');
        //
        // sumObj.text(sum.toLocaleString() + ' руб');

        calcTotal();
    }

    function calcTotal() {
        var items = $('.basket__item'),
            totalCount = 0;

        items.each(function (indx, elem) {
            var item = $(elem),
                price = parseInt(item.data('price')),
                count = parseInt(item.find('.count__val').val()),
                sum = price * count;
            totalCount += count;

        });

        refreshCart(totalCount);
    }

    function refreshCart(count) {
        var cart = $('.cart'),
            countObj = cart.find('.cart__count');

        countObj.text(count);
    }

    function addCart(add) {
        var cart = $('.cart'),
            countObj = cart.find('.cart__count'),
            count = parseInt(countObj.text());

        count += add;
        countObj.text(count);
    }

    /*END FUNCTIONS*/


    /*POPUP*/
    $('.jsPopupOpen').on('click', function (e) {
        e.preventDefault();
        var popup = $('.popup'),
            content = popup.find('.popup__content'),
            action = $(this).data('action'),
            data = {
                action: action
            };

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    content.html(result.html);
                    popup.addClass('active');
                    $('input[type=tel]').mask('+7 (999) 999-99-99');
                    $('.popup__form').validate({
                        rules: {
                            name: {
                                required: true,
                            },
                            tel: {
                                required: true,
                            },
                            email: {
                                required: true,
                                email: true
                            },
                            password: {
                                required: true,
                                minlength: 6
                            }

                        },
                        messages: {
                            name: {
                                required: "Введите вашу Фамилию Имя",
                            },
                            tel: {
                                required: "Введите ваш телефон",
                            },
                            email: {
                                required: "Введите ваш email",
                                email: "Введите корректный email"
                            },
                            password: {
                                required: "Введите ваш пароль",
                                minlength: "Длина пароля не менне 6-ти символов"
                            }
                        },
                        submitHandler: function (form) {
                            var form = $(form),
                                ajaxUrl = 'ajax.php',
                                data = form.serialize();

                            $.ajax({
                                dataType: "json",
                                type: "POST",
                                url: ajaxUrl,
                                data: data,
                                success: function (result) {
                                    if (result.status) {
                                        var bottom = $('.popup__bottom'),
                                            height = bottom.outerHeight();
                                        bottom.css({
                                            height: height
                                        });

                                        if (result.reload) {
                                            bottom.html(result.html);
                                            setTimeout(function () {
                                                window.location.reload()
                                            }, 2000);
                                        } else {
                                            bottom.html(result.html);
                                        }

                                    } else {
                                        alert('Что-то пошло не так, попробуйте еще раз!!!');
                                    }
                                },
                                error: function (result) {
                                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                                }
                            });
                        }
                    });
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    });

    $('.popup').on('click', '.popup__registration', function (e) {
        var button = $(this),
            popup = button.closest('.popup'),
            content = popup.find('.popup__content'),
            action = 'registration',
            data = {
                action: action
            };

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    content.html(result.html);
                    popup.addClass('active');
                    $('input[type=tel]').mask('+7 (999) 999-99-99');
                    $('.popup__form').validate({
                        rules: {
                            name: {
                                required: true,
                            },
                            tel: {
                                required: true,
                            },
                            email: {
                                required: true,
                                email: true
                            },
                            password: {
                                required: true,
                                minlength: 6
                            }

                        },
                        messages: {
                            name: {
                                required: "Введите вашу Фамилию Имя",
                            },
                            tel: {
                                required: "Введите ваш телефон",
                            },
                            email: {
                                required: "Введите ваш email",
                                email: "Введите корректный email"
                            },
                            password: {
                                required: "Введите ваш пароль",
                                minlength: "Длина пароля не менне 6-ти символов"
                            }
                        },
                        submitHandler: function (form) {
                            var form = $(form),
                                ajaxUrl = 'ajax.php',
                                data = form.serialize();

                            $.ajax({
                                dataType: "json",
                                type: "POST",
                                url: ajaxUrl,
                                data: data,
                                success: function (result) {
                                    if (result.status) {
                                        var bottom = $('.popup__bottom'),
                                            height = bottom.outerHeight();
                                        bottom.css({
                                            height: height
                                        });

                                        if (result.reload) {
                                            bottom.html(result.html);
                                            setTimeout(function () {
                                                window.location.reload()
                                            }, 2000);
                                        } else {
                                            bottom.html(result.html);
                                        }

                                    } else {
                                        alert('Что-то пошло не так, попробуйте еще раз!!!');
                                    }
                                },
                                error: function (result) {
                                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                                }
                            });
                        }
                    })
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    });

    $('.popup').on('click', '.jsPopupClose', function () {
        var close = $(this),
            popup = close.closest('.popup');
        popup.removeClass('active');
    });

    $('.popup').on('click', function (e) {
        var popup = $(this);
        if ($(e.target).hasClass('popup')) {
            popup.removeClass('active');
        }
    });
    /*END POPUP*/


    /*PRODUCT*/
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
    /*END PRODUCT*/


    /*CATALOG*/
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
    /*END CATALOG*/

    /*FILTERS*/
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

    $('.filter__title').on('click', function (e) {
        var button = $(this),
            filter = button.closest('.filter');

        filter.toggleClass('open');
    });
    /*END FILTERS*/

    /*CABINET*/
    $('.cabinet__switch').on('click', function (e) {
        e.preventDefault();

        var button = $(this),
            href = button.attr('href'),
            buttons = $('.cabinet__switch').not(button),
            tab = $(href),
            tabs = $('.cabinet__tab').not(tab);

        buttons.removeClass('active');
        tabs.removeClass('active');
        button.addClass('active');
        tab.addClass('active');
        if (href == "#tab4") {
            compareSwiper.update();
            setHeight();
        }



    });

    $('.personal__photo-input').on('change', function (e) {
        let img = document.querySelector('.personal__photo-img');
        img.src = URL.createObjectURL(this.files[0]);
    });

    $('.personal__select').selectmenu();

    $('.personal__form_password').validate({
        rules: {
            password: {
                required: true,
                minlength: 6
            },
            confirmPassword: {
                required: true,
                minlength: 6,
                equalTo: "#password"
            },

        },
        messages: {
            password: {
                required: "Введите ваш пароль",
                minlength: "Не менее 6-ти символов"
            },
            confirmPassword: {
                required: "Введите ваш пароль",
                minlength: "Не менее 6-ти символов",
                equalTo: "Пароли не совпадают"
            }
        }
    });

    $('.order__more').on('click', function (e) {
        let button = $(this),
            hidden = button.prev();

        hidden.slideToggle();
    });

    setHeight();

    function setHeight() {
        if ($('#tab4').hasClass('active')) {
            var arrayHeight = {};

            $('.compare__col').each(function (indx, elem) {
                var col = $(elem),
                    cells = col.find('.compare__cell');

                cells.each(function (indx2, elem2) {
                    var cell = $(elem2),
                        height = cell.outerHeight();

                    // debugger;

                    if (arrayHeight[indx2] < height || arrayHeight[indx2] == undefined) {
                        arrayHeight[indx2] = height;
                    }
                });

            });

            $('.compare__col').each(function (indx, elem) {
                var col = $(elem),
                    cells = col.find('.compare__cell');

                cells.each(function (indx2, elem2) {
                    var cell = $(elem2);

                    cell.css({
                        height: arrayHeight[indx2]
                    })

                });

            });
        }
    }

    /*END CABINET*/

    /*GENERAL*/
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

    $('.jsDelete').on('click', function (e) {
        e.preventDefault();

        var button = $(this),
            item = button.closest('.jsItem'),
            id = item.data('id'),
            data = {
                action: 'deleteBasketItem',
                id: id
            };

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    item.remove();

                    if ((item).hasClass('basket__item')) {
                        calcTotal();
                    } else {
                        compareSwiper.update();
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

    $('.count__down').on('click', function (e) {

        var $this = $(this),
            item = $this.closest('.basket__item'),
            countObj = item.find('.count__val'),
            count = parseInt(countObj.val());

        if (count > 0) {
            count--;
        } else {
            count = 0;
        }

        countObj.val(count);
        calcSum(item);
    });

    $('.count__up').on('click', function (e) {
        // e.preventDefault();

        var $this = $(this),
            item = $this.closest('.basket__item'),
            countObj = item.find('.count__val'),
            count = parseInt(countObj.val());


        count++;
        countObj.val(count);
        calcSum(item);
    });

    $('.count__val').on('change', function (e) {
        var $this = $(this),
            item = $this.closest('.basket__item');

        calcSum(item);
    });

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
                    if (action == 'add') {
                        addCart(1);
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

    /*END GENERAL*/

    /*VENDORS*/

    /*END VENDORS*/

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

    var compareSwiper = new Swiper('.compare__container', {
        slidesPerView: 2,
        spaceBetween: 30,
        navigation: {
            nextEl: '.compare__next .arrow',
            prevEl: '.compare__prev .arrow',
        },
    });

    var certsSwiper = new Swiper('.certs__container', {
        slidesPerView: 4,
        spaceBetween: 30,
        navigation: {
            nextEl: '.certs__next .arrow',
            prevEl: '.certs__prev .arrow',
        },
    });
    /*END SLIDERS*/
});