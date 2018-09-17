<main class="main">

    <? include 'pages/common/banner3.php' ?>

    <section class="section">
        <div class="container">

            <!-- top -->
            <div class="section__top">

                <!-- title -->
                <div class="title">
                    Контакты
                </div>
                <!-- END title -->

            </div>
            <!-- END top -->

           <!-- contacts -->
            <div class="contacts">
                <div class="contatcs__list">
                    <div class="row">
                        <div class="contact">
                            <div class="contact__title">
                                Телефон:
                            </div>
                            <a role="link" href="tel:+7(900)800-80-90" title="+7(900)800-80-90" class="contact__value">
                                +7 (900) 800-80-90
                            </a>
                        </div>
                        <div class="contact contact_big">
                            <div class="contact__title">
                                Адрес:
                            </div>
                            <a target="_blank"
                               title="Россия, 125040, г. Москва, Ленинский проспект, дом 1, стр. 3"
                               href="https://yandex.ru/maps/?text=Россия, 125040, г. Москва, Ленинский проспект, дом 1, стр. 3"
                               class="contact__value contact__value_small">
                                Россия, 125040, г. Москва, <br>
                                Ленинский проспект, дом 1, стр. 3
                            </a>
                        </div>
                        <div class="contact">
                            <div class="contact__title">
                                Почта:
                            </div>
                            <a role="link" href="mailto:info@220-shop" title="info@220-shop" class="contact__value link">
                                <span class="link__text">
                                    info@220-shop
                                </span>
                            </a>
                        </div>
                        <div class="contact contact_big">
                            <div class="contact__title">
                                Прием звонков:
                            </div>
                            <div class="contact__value contact__value_small">
                                с 9:00 до 20:00 (Пн-Пт)
                            </div>
                        </div>

                        <div class="contact">
                            <form action="" method="post" class="feed">
                                <div class="feed__title">
                                    Ещё остались вопросы?
                                </div>
                                <div class="feed__subtitle">
                                    Закажите обратный звонок
                                </div>
                                <div class="feed__bottom">
                                    <div class="feed__fields">
                                        <div class="field">
                                            <input type="text" class="field__input" name="name" placeholder="Фамилия Имя*">
                                        </div>
                                        <div class="field">
                                            <input type="tel" name="tel" class="field__input" placeholder="Номер телефона*">
                                        </div>
                                        <div class="field">
                                            <textarea name="comment" class="field__input field__input_area" placeholder="Комментарий"></textarea>
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
                                            <a target="_blank" href="privacy.php" class="accept__link">
                                                Политика конфиденциальности
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="contact contact_big">
                            <div class="map" id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
           <!-- END contacts -->

        </div>
    </section>

</main>