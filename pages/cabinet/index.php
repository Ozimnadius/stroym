<main class="main">

    <section class="section">
        <div class="container">

            <? include 'pages/common/breadcrumbs.php' ?>

            <!-- top -->
            <div class="section__top">

                <!-- title -->
                <div class="title">
                    Личный кабинет
                </div>
                <!-- END title -->
            </div>
            <!-- END top -->

            <!-- cabinet -->
            <div class="cabinet">
                <div class="row">

                    <!-- left -->
                    <div class="cabinet__left">

                        <!-- switches -->
                        <div class="cabinet__switches">
                            <a role="button" href="#tab1" title="Профиль" class="cabinet__switch active">
                                <svg class="cabinet__switch-svg">
                                    <use xlink:href="images/icons/sprite.svg#user"></use>
                                </svg>
                                <span class="cabinet__switch-text">
                              Профиль
                            </span>
                            </a>
                            <a role="button" href="#tab2" title="Мои заказы" class="cabinet__switch">
                                <svg class="cabinet__switch-svg">
                                    <use xlink:href="images/icons/sprite.svg#bag"></use>
                                </svg>
                                <span class="cabinet__switch-text">
                               Мои заказы
                            </span>
                            </a>
                            <a role="button" href="#tab3" title="Избранное" class="cabinet__switch">
                                <svg class="cabinet__switch-svg">
                                    <use xlink:href="images/icons/sprite.svg#izbrznnoe"></use>
                                </svg>
                                <span class="cabinet__switch-text">
                                Избранное
                            </span>
                            </a>
                            <a role="button" href="#tab4" title="Сравнение" class="cabinet__switch">
                                <svg class="cabinet__switch-svg">
                                    <use xlink:href="images/icons/sprite.svg#sravnenie"></use>
                                </svg>
                                <span class="cabinet__switch-text">
                                Сравнение
                            </span>
                            </a>
                        </div>
                        <!-- END switches -->

                        <!-- controls -->
                        <div class="cabinet__controls">
                            <a role="link" href="" class="cabinet__controls_exit">Выйти из аккаунта</a> / <a role="link" href=""
                                                                                                 class="cabinet__controls_delete">Удалить</a>
                        </div>
                        <!-- END controls -->

                    </div>
                    <!-- END left -->


                    <!-- right -->
                    <div class="cabinet__right">
                        <!-- tabs -->
                        <div class="cabinet__tabs">
                            <!-- tab -->
                            <div class="cabinet__tab active" id="tab1">

                                <!-- personal -->
                                <div class="personal">

                                    <form action="" method="post" class="personal__form"
                                          enctype="multipart/form-data">
                                        <div class="personal__title  cabinet__title">
                                            Настройки личных данных
                                        </div>

                                        <div class="personal__data">
                                            <div class="row">

                                                <!-- left -->
                                                <div class="personal__left">
                                                    <div class="personal__photo">
                                                        <label class="personal__photo-label">
                                                            <img class="personal__photo-img"
                                                                 src="images/icons/photo.png"
                                                                 alt="">
                                                            <input type="file" name="photo"
                                                                   class="personal__photo-input"
                                                                   accept="image/jpeg,image/png,image/gif,image/svg+xml">
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- END left -->

                                                <!-- right -->
                                                <div class="personal__right">

                                                    <!-- fields -->
                                                    <div class="personal__fields">
                                                        <div class="personal__block">

                                                            <div class="personal__photo personal__photo_md">
                                                                <label class="personal__photo-label">
                                                                    <img class="personal__photo-img"
                                                                         src="images/icons/photo.png"
                                                                         alt="">
                                                                    <input type="file" name="photo"
                                                                           class="personal__photo-input"
                                                                           accept="image/jpeg,image/png,image/gif,image/svg+xml">
                                                                </label>
                                                            </div>

                                                            <label class="personal__field">
                                                                <span class="personal__label"> Ф.И.О.</span>
                                                                <input type="text" name="name"
                                                                       value="Радионов Александр Станиславович"
                                                                       class="personal__input personal__input_name">
                                                            </label>
                                                        </div>
                                                        <div class="personal__block">
                                                            <label class="personal__field">
                                                                <span class="personal__label">Почта</span>
                                                                <input type="email" name="email"
                                                                       value="info99@gmail.com"
                                                                       class="personal__input personal__input_email">
                                                            </label>
                                                            <label class="personal__field">
                                                                <span class="personal__label">Телефон</span>
                                                                <input type="tel" name="tel" value="8 (916) 144-58-88"
                                                                       class="personal__input">
                                                            </label>
                                                        </div>
                                                        <div class="personal__block">
                                                            <label class="personal__field">
                                                                <span class="personal__label">Город</span>
                                                                <select name="city" class="personal__select">
                                                                    <option value="Выберите город" selected disabled>
                                                                        Выберите город
                                                                    </option>
                                                                    <option value="Город1">Город1</option>
                                                                    <option value="Город2">Город2</option>
                                                                    <option value="Город3">Город3</option>
                                                                </select>
                                                            </label>
                                                        </div>
                                                        <div class="personal__block">
                                                            <label class="personal__field">
                                                                <span class="personal__label">Адрес доставки</span>
                                                                <input type="text" name="name"
                                                                       placeholder="Введите адрес"
                                                                       class="personal__input">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- END fields -->

                                                    <button type="submit" class="button personal__submit">
                                                    <span class="button__text">
                                                         Сохранить изменения
                                                    </span>
                                                    </button>
                                                </div>
                                                <!-- END right -->

                                            </div>
                                        </div>

                                    </form>

                                    <form action="" method="post" class="personal__form personal__form_password"
                                          enctype="multipart/form-data">
                                        <div class="personal__title cabinet__title">
                                            Смена пароля
                                        </div>

                                        <div class="personal__data">

                                            <!-- fields -->
                                            <div class="personal__fields personal__fields_password">
                                                <div class="personal__block">
                                                    <label class="personal__field">
                                                    <span class="personal__label">Новый пароль<span
                                                                class="personal__label_req">*</span></span>
                                                        <input type="password" name="password"
                                                               value="***********"
                                                               class="personal__input">
                                                    </label>
                                                    <label class="personal__field">
                                                    <span class="personal__label">Повторите пароль<span
                                                                class="personal__label_req">*</span></span>
                                                        <input type="password" name="confirmPassword"
                                                               value="***********"
                                                               class="personal__input">
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- END fields -->

                                            <button type="submit" class="button personal__submit">
                                            <span class="button__text">
                                                 Сохранить пароль
                                            </span>
                                            </button>


                                        </div>
                                    </form>

                                </div>
                                <!-- END personal -->

                            </div>
                            <!-- END tab -->
                            <!-- tab -->
                            <div class="cabinet__tab" id="tab2">
                                <!-- orders -->
                                <div class="orders">
                                    <div class="orders__title cabinet__title">
                                        Мои заказы
                                    </div>

                                    <div class="orders__list">
                                        <div class="row">
                                            <? for ($j = 1; $j < 7; $j++): ?>
                                                <div class="order">

                                                    <!-- repeat -->
                                                    <div class="order__repeat">
                                                        <a role="link" title="Повторить" href="" class="order__repeat-link">
                                                            Повторить
                                                        </a>
                                                    </div>
                                                    <!-- END repeat -->

                                                    <!-- title -->
                                                    <div class="order__title">
                                                        Заказ № 1234
                                                    </div>
                                                    <!-- END title -->

                                                    <!-- products -->
                                                    <div class="order__item">
                                                        <div class="order__caption">
                                                            Состав:
                                                        </div>
                                                        <div class="order__products">
                                                            <a role="link" title="Лампа светодиодная 6вт Е14 Gauss Elementary 34126" href="product.php" class="order__product">
                                                                Лампа светодиодная 6вт
                                                                Е14 Gauss Elementary 34126
                                                            </a>
                                                            <a role="link" title="Лампа светодиодная 6вт Е14 Gauss Elementary 34126" href="product.php" class="order__product">
                                                                Лампа светодиодная 6вт
                                                                Е14 Gauss Elementary 34126
                                                            </a>
                                                            <div class="order__hidden">
                                                                <div class="order__products">
                                                                    <? for ($i = 0; $i < 12; $i++): ?>
                                                                        <a role="link" title="Лампа светодиодная 6вт Е14 Gauss Elementary 34126" href="product.php" class="order__product">
                                                                            Лампа светодиодная 6вт
                                                                            Е14 Gauss Elementary 34126
                                                                        </a>
                                                                    <? endfor; ?>
                                                                </div>
                                                            </div>
                                                            <a role="button" title="Смотреть еще" class="order__more link">
                                                                <span class="link__text">
                                                                    Смотреть еще <b>(12)</b>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- END products -->

                                                    <!-- status -->
                                                    <div class="order__item">
                                                        <div class="order__caption">
                                                            Статус:
                                                        </div>
                                                        <? if ($j % 2): ?>
                                                            <div class="order__status">
                                                                Оплачен
                                                            </div>
                                                        <? else: ?>
                                                            <div class="order__status order__status_not">
                                                                Не оплачен
                                                            </div>
                                                        <? endif; ?>
                                                    </div>
                                                    <!-- END status -->

                                                    <!-- date -->
                                                    <div class="order__item">
                                                        <div class="order__caption">
                                                            Дата:
                                                        </div>
                                                        <div class="order__date">
                                                            29.08.2018
                                                        </div>
                                                    </div>
                                                    <!-- END date -->

                                                </div>
                                            <? endfor; ?>
                                        </div>
                                        <div class="orders__pagination">
                                            <? include 'pages/common/pagination.php' ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- END orders -->
                            </div>
                            <!-- END tab -->
                            <!-- tab -->
                            <div class="cabinet__tab" id="tab3">
                                <!-- favourites -->
                                <div class="favs">
                                    <div class="favs__title cabinet__title">
                                        Избранное
                                    </div>

                                    <div class="favs__list">
                                        <? for ($i = 0; $i < 4; $i++): ?>
                                            <div class="fav jsItem" data-id="<?= $i ?>">
                                                <!-- img -->
                                                <div class="fav__img">
                                                    <img src="/images/content/products/product.png" title="Product1"
                                                         alt="Product1"
                                                         class="fav__pic">
                                                </div>
                                                <!-- END img -->

                                                <!-- desc -->
                                                <div class="fav__desc">
                                                    <a role="link" href="product.php" title="Светодиодная лампа" class="fav__title">
                                                        Светодиодная лампа
                                                    </a>
                                                    <div class="fav__text">
                                                        Navigator 94 338 <br>
                                                        NLL-T75-25-230-840-E27
                                                    </div>

                                                </div>
                                                <!-- END desc -->

                                                <!-- button -->
                                                <button role="button" class="fav__button button button_yellow">
                                            <span class="button__text">
                                                Узнать стоимость
                                            </span>
                                                </button>
                                                <!-- END button -->

                                                <!-- controls -->
                                                <div class="fav__controls">
                                                    <button role="button" class="fav__control jsControl"
                                                            data-action="compare">
                                                        <svg class="fav__control-svg">
                                                            <use xlink:href="images/icons/sprite.svg#sravnenie"></use>
                                                        </svg>
                                                    </button>
                                                    <button role="button" class="fav__control jsControl"
                                                            data-action="add">
                                                        <svg class="fav__control-svg">
                                                            <use xlink:href="images/icons/sprite.svg#basket"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <!-- END controls -->
                                            </div>
                                        <? endfor; ?>
                                    </div>

                                    <div class="favs__pagination">
                                        <? include 'pages/common/pagination.php' ?>
                                    </div>
                                </div>
                                <!-- END favourites -->
                            </div>
                            <!-- END tab -->
                            <!-- tab -->
                            <div class="cabinet__tab" id="tab4">
                                <div class="compare">
                                    <div class="cabinet__title">
                                        Сравнение
                                    </div>

                                    <!-- table -->
                                    <div class="compare__table">
                                        <div class="row">

                                            <!-- head -->
                                            <div class="compare__head compare__col">

                                                <div class="compare__th compare__cell">
                                                    <div class="compare__header">
                                                        <div class="compare__header-title">
                                                            Основные характеристики:
                                                        </div>
                                                        <a role="link" title="Очистить характеристики" href="" class="compare__header-button">
                                                            Очистить характеристики
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="compare__th compare__cell">
                                                    Бренд
                                                </div>
                                                <div class="compare__th compare__cell">
                                                    Страна
                                                </div>
                                                <div class="compare__th compare__cell">
                                                    Коллекция
                                                </div>
                                                <div class="compare__th compare__cell">
                                                    Артикул
                                                </div>
                                                <div class="compare__th compare__cell">
                                                    Высота, мм
                                                </div>
                                                <div class="compare__th compare__cell">
                                                    Диаметр, мм
                                                </div>
                                                <div class="compare__th compare__cell">
                                                    Мощность лампы, W
                                                </div>
                                                <div class="compare__th compare__cell">
                                                    Общая мощность, W
                                                </div>
                                                <div class="compare__th compare__cell">
                                                    Площадь освещения, м2
                                                </div>
                                                <div class="compare__th compare__cell">
                                                    Тип лампочки
                                                </div>
                                                <div class="compare__th compare__cell">
                                                    Световой поток, lm
                                                </div>
                                                <div class="compare__th compare__cell">
                                                    Тип цоколя
                                                </div>
                                                <div class="compare__th compare__cell">
                                                    Напряжение, V
                                                </div>
                                                <div class="compare__th compare__cell">
                                                    Виды материалов
                                                </div>
                                                <div class="compare__th compare__cell">
                                                    Цвет арматуры
                                                </div>
                                                <div class="compare__th compare__cell">
                                                    Гарантия
                                                </div>

                                            </div>
                                            <!-- END head -->

                                            <!-- body -->
                                            <div class="compare__body">

                                                <div class="swiper-container compare__container">
                                                    <div class="swiper-wrapper">
                                                        <? for ($i = 1; $i < 13; $i++): ?>
                                                            <div class="swiper-slide compare__item compare__col jsItem"
                                                                 data-id="<?= $i ?>">

                                                                <!-- delete -->
                                                                <div class="compare__delete">
                                                                    <button role="button"
                                                                            class="delete delete_grey jsDelete">
                                                                        <svg class="delete__svg">
                                                                            <use xlink:href="images/icons/sprite.svg#del"></use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <!-- END delete -->

                                                                <div class="compare__list">
                                                                    <div class="compare__td compare__td_border compare__cell">
                                                                        <div class="compare__desc">
                                                                            <div class="compare__img">
                                                                                <img src="/images/content/products/product.png"
                                                                                     alt="Светодиодная лампа"
                                                                                     title="Светодиодная лампа"
                                                                                     class="compare__pic">
                                                                            </div>
                                                                            <a role="link" href="product.php"
                                                                               title="Светодиодная лампа"
                                                                               class="compare__title">
                                                                                Светодиодная лампа<?= $i ?>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="compare__td compare__cell">
                                                                        <div class="compare__td-title">
                                                                            Бренд
                                                                        </div>
                                                                        Voltega
                                                                    </div>
                                                                    <div class="compare__td compare__cell">
                                                                        <div class="compare__td-title">
                                                                            Страна
                                                                        </div>
                                                                        Германия
                                                                    </div>
                                                                    <div class="compare__td compare__cell">
                                                                        <div class="compare__td-title">
                                                                            Коллекция
                                                                        </div>
                                                                        Simple</div>
                                                                    <div class="compare__td compare__cell">
                                                                        <div class="compare__td-title">
                                                                            Артикул
                                                                        </div>
                                                                        4711</div>
                                                                    <div class="compare__td compare__cell">
                                                                        <div class="compare__td-title">
                                                                            Высота, мм
                                                                        </div>
                                                                        85</div>
                                                                    <div class="compare__td compare__cell">
                                                                        <div class="compare__td-title">
                                                                            Диаметр, мм
                                                                        </div>
                                                                        50</div>
                                                                    <div class="compare__td compare__cell">
                                                                        <div class="compare__td-title">
                                                                            Мощность лампы, W
                                                                        </div>
                                                                        5,5</div>
                                                                    <div class="compare__td compare__cell">
                                                                        <div class="compare__td-title">
                                                                            Общая мощность, W
                                                                        </div>
                                                                        5,5</div>
                                                                    <div class="compare__td compare__cell">
                                                                        <div class="compare__td-title">
                                                                            Площадь
                                                                            освещения, м2
                                                                        </div>
                                                                        2,8</div>
                                                                    <div class="compare__td compare__cell">
                                                                        <div class="compare__td-title">
                                                                            Тип лампочки
                                                                        </div>
                                                                        Светодиодная
                                                                    </div>
                                                                    <div class="compare__td compare__cell">
                                                                        <div class="compare__td-title">
                                                                            Световой поток, lm
                                                                        </div>
                                                                        480</div>
                                                                    <div class="compare__td compare__cell">
                                                                        <div class="compare__td-title">
                                                                            Тип цоколя
                                                                        </div>
                                                                        Е14</div>
                                                                    <div class="compare__td compare__cell">
                                                                        <div class="compare__td-title">
                                                                            Напряжение, V
                                                                        </div>
                                                                        220</div>
                                                                    <div class="compare__td compare__cell">
                                                                        <div class="compare__td-title">
                                                                            Виды материалов
                                                                        </div>
                                                                        Пластиковые
                                                                    </div>
                                                                    <div class="compare__td compare__cell">
                                                                        <div class="compare__td-title">
                                                                            Цвет арматуры
                                                                        </div>
                                                                        Металл</div>
                                                                    <div class="compare__td compare__cell">
                                                                        <div class="compare__td-title">
                                                                            Гарантия
                                                                        </div>
                                                                        2 года</div>
                                                                </div>
                                                                <button class="compare__button button button_yellow jsPopupOpen"
                                                                        data-action="callorder">
                                                    <span class="button__text">
                                                        Узнать стоимость
                                                    </span>
                                                                </button>
                                                            </div>
                                                        <? endfor; ?>
                                                    </div>


                                                    <div class="compare__prev">
                                                        <button role="button" class="arrow arrow_violet">
                                                            <svg class="arrow__svg">
                                                                <use xlink:href="images/icons/sprite.svg#left"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="compare__next">
                                                        <button role="button" class="arrow arrow_violet">
                                                            <svg class="arrow__svg">
                                                                <use xlink:href="images/icons/sprite.svg#right"></use>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                </div>


                                            </div>
                                            <!-- END body -->
                                        </div>
                                    </div>
                                    <!-- END table -->
                                </div>
                            </div>
                            <!-- END tab -->

                        </div>
                        <!-- END tabs -->

                        <!-- controls -->
                        <div class="cabinet__controls cabinet__controls_lg">
                            <a role="link" title="Выйти из аккаунта" href="" class="cabinet__controls_exit">Выйти из аккаунта</a> / <a role="link" title="Удалить" href=""
                                                                                                 class="cabinet__controls_delete">Удалить</a>
                        </div>
                        <!-- END controls -->
                    </div>
                    <!-- END right -->


                </div>
            </div>
            <!-- END cabinet -->


        </div>
    </section>

</main>