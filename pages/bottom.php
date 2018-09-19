<? include 'footer.php' ?>
</div>

<div class="debug">
    <div>
        <div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>

<!-- popup -->
<div class="popup">
    <div class="popup__content">
        <form action="" class="popup__form">

            <div class="popup__close">
                <div class="popup__close-wrapper">
                    <svg class="popup__close-svg">
                        <use xlink:href="images/icons/sprite.svg#close"></use>
                    </svg>
                </div>
            </div>

            <div class="popup__title">
                Заказ обратного звонка
            </div>

            <div class="fields">
                <div class="field">
                    <input type="text" class="field__input" name="name" placeholder="Заказ обратного звонка">
                </div>
                <div class="field">
                    <input type="tel" name="tel" class="field__input" placeholder="Фамилия Имя*">
                </div>
            </div>

            <div class="submit">
                <button type="submit" class="button submit__button">
                <span class="button__text">
                    Отправить
                </span>
                    <svg class="button__svg">
                        <use xlink:href="images/icons/sprite.svg#right"></use>
                    </svg>
                </button>
            </div>


            <div class="accept">
                <input type="checkbox" id="callorderAccept" name="callorderAcept" class="accept__check" checked>
                <div class="accept__wrapper">
                    <label for="callorderAccept" class="accept__label">
                        <span class="accept__fake"></span>
                    </label>
                    <a href="privacy.php" class="accept__link">
                        Политика конфиденциальности
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- END popup -->

<!-- mmenu -->
<div class="mmenu">
    <div class="mmenu__shading"></div>
    <div class="mmenu__wrapper">

        <!-- top -->
        <div class="mmenu__top">

            <!-- addr -->
            <div class="mmenu__addr">
                <a target="_blank" href="https://yandex.ru/maps/?text=Москва, ул. Тверская, дом 5, стр 1" class="addr">
                            <span class="addr__icon">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </span>
                    <span class="addr__text">
                                Москва, ул. Тверская, дом 5, стр 1
                            </span>
                </a>
            </div>
            <!-- END addr -->

            <!-- close -->
            <button class="mmenu__close">
                <svg class="mmenu__close-svg">
                    <use xlink:href="images/icons/sprite.svg#close"></use>
                </svg>
            </button>
            <!-- END close -->

            <!-- search -->
            <div class="mmenu__search">
                <form action="" method="post" class="search">
                    <input type="search" name="search" class="search__input" placeholder="Поиск по сайту">
                    <input type="submit" value="Искать" class="search__submit">
                </form>
            </div>
            <!-- END search -->

        </div>
        <!-- END top -->

        <!-- middle -->
        <div class="mmenu__middle">
            <!-- contacts -->
            <div class="header__contacts">

                <!-- phone -->
                <a role="link" href="tel:+7(900)800-80-90" title="+7(900)800-80-90" class="phone">
                    +7 (900) 800-80-90
                </a>
                <!-- END phone -->

                <!-- callorder-button -->
                <button role="button" class="callorder-button jsPopupOpen" data-action="callorder">
                    Заказать обратный звонок
                </button>
                <!-- END callorder-button -->

            </div>
            <!-- END contacts -->
        </div>
        <!-- END middle -->

        <!-- controls -->
        <div class="mmenu__controls">
            <a href="cabinet.php" class="mmenu__control">
                <svg class="mmenu__control-svg">
                    <use xlink:href="images/icons/sprite.svg#user"></use>
                </svg>
                <span class="mmenu__control-text">
                    Demo@user.com
                </span>
            </a>
            <a href="cabinet.php" class="mmenu__control">
                <svg class="mmenu__control-svg">
                    <use xlink:href="images/icons/sprite.svg#izbrznnoe"></use>
                </svg>
                <span class="mmenu__control-text">
                    Избранное
                </span>
            </a>
            <a href="cabinet.php" class="mmenu__control">
                <svg class="mmenu__control-svg">
                    <use xlink:href="images/icons/sprite.svg#sravnenie"></use>
                </svg>
                <span class="mmenu__control-text">
                    Сравнение
                </span>
            </a>
        </div>
        <!-- END controls -->

        <!-- menu -->
        <div class="mmenu__menu">
            <div class="menum">

                <div class="menum__title">
                    <span class="menum__text">
                                Каталог
                            </span>
                    <svg class="menum__svg">
                        <use xlink:href="images/icons/sprite.svg#arrw-3"></use>
                    </svg>
                </div>

                <div class="menum__list">
                    <div class="menum__row">
                        <a href="category2.php" title="Лампы" class="menum__item">
                            <div class="menum__item-img">
                                <img src="images/content/menu/menu1.png" alt="Лампы" title="Лампы" class="menum__item-pic">
                                <img src="images/content/menu/menu1-active.png" alt="Лампы" title="Лампы"
                                     class="menum__item-pic menum__item-pic_active">
                            </div>
                            <div class="menum__item-text">
                                Лампы
                            </div>
                        </a>
                        <a href="category2.php" title="Светильники светодиодные" class="menum__item">
                            <div class="menum__item-img">
                                <img src="images/content/menu/menu2.png" alt="Светильники светодиодные"
                                     title="Светильники светодиодные" class="menum__item-pic">
                                <img src="images/content/menu/menu2-active.png" alt="Светильники светодиодные"
                                     title="Светильники светодиодные"
                                     class="menum__item-pic menum__item-pic_active">
                            </div>
                            <div class="menum__item-text">
                                Светильники <br>
                                светодиодные
                            </div>
                        </a>
                    </div>
                    <div class="menum__row">
                        <a href="category2.php" title="Светильники люминисцентные" class="menum__item">
                            <div class="menum__item-img">
                                <img src="images/content/menu/menu3.png" alt="Светильники люминисцентные"
                                     title="Светильники люминисцентные" class="menum__item-pic">
                                <img src="images/content/menu/menu3-active.png" alt="Светильники люминисцентные"
                                     title="Светильники люминисцентные"
                                     class="menum__item-pic menum__item-pic_active">
                            </div>
                            <div class="menum__item-text">
                                Светильники <br>
                                люминисцентные
                            </div>
                        </a>
                        <a href="category2.php" title="Прожекторы и Фонари" class="menum__item">
                            <div class="menum__item-img">
                                <img src="images/content/menu/menu4.png" alt="Прожекторы и Фонари"
                                     title="Прожекторы и Фонари" class="menum__item-pic">
                                <img src="images/content/menu/menu4-active.png" alt="Прожекторы и Фонари"
                                     title="Прожекторы и Фонари"
                                     class="menum__item-pic menum__item-pic_active">
                            </div>
                            <div class="menum__item-text">
                                Прожекторы <br>
                                и Фонари
                            </div>
                        </a>
                    </div>
                    <div class="menum__row">
                        <a href="category2.php" title="Светодиодная лента" class="menum__item">
                            <div class="menum__item-img">
                                <img src="images/content/menu/menu5.png" alt="Светодиодная лента" title="Светодиодная лента"
                                     class="menum__item-pic">
                                <img src="images/content/menu/menu5-active.png" alt="Светодиодная лента"
                                     title="Светодиодная лента"
                                     class="menum__item-pic menum__item-pic_active">
                            </div>
                            <div class="menum__item-text">
                                Светодиодная <br>
                                лента
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- END menu -->

        <!-- nav -->
        <div class="mmenu__nav">
            <div class="navm">
                <a href="about.php" title="О компании" class="navm__item navm__item_bold">
                    О компании
                </a>
                <a href="delivery.php" title="Доставка" class="navm__item navm__item_bold">
                    Доставка
                </a>
                <a href="contacts.php" title="Контакты" class="navm__item navm__item_bold">
                    Контакты
                </a>
                <a href="events.php" title="Новости" class="navm__item">
                    Новости
                </a>
                <a href="actions.php" title="Акции" class="navm__item">
                    Акции
                </a>
                <a href="reviews.php" title="Отзывы" class="navm__item">
                    Отзывы
                </a>
                <a href="partners.php" title="Наши партнеры" class="navm__item">
                    Наши партнеры
                </a>
                <a href="videos.php" title="Видео" class="navm__item">
                    Видео
                </a>
                <a href="" title="Условия покупки" class="navm__item">
                    Условия покупки
                </a>
                <a href="" title="Политика конфиденциальности" class="navm__item">
                    Политика конфиденциальности
                </a>
                <a href="" title="Реквизиты" class="navm__item">
                    Реквизиты
                </a>
            </div>
        </div>
        <!-- END nav -->

    </div>
</div>
<!-- END mmenu -->

<script src="/js/vendor.min.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="/js/main.js"></script>
</body>
</html>