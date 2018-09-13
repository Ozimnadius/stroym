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
                            <a href="#tab1" title="Профиль" class="cabinet__switch active">
                                <svg class="cabinet__switch-svg">
                                    <use xlink:href="images/icons/sprite.svg#user"></use>
                                </svg>
                                <span class="cabinet__switch-text">
                              Профиль
                            </span>
                            </a>
                            <a href="#tab2" title="Мои заказы" class="cabinet__switch">
                                <svg class="cabinet__switch-svg">
                                    <use xlink:href="images/icons/sprite.svg#bag"></use>
                                </svg>
                                <span class="cabinet__switch-text">
                               Мои заказы
                            </span>
                            </a>
                            <a href="#tab3" title="Избранное" class="cabinet__switch">
                                <svg class="cabinet__switch-svg">
                                    <use xlink:href="images/icons/sprite.svg#izbrznnoe"></use>
                                </svg>
                                <span class="cabinet__switch-text">
                                Избранное
                            </span>
                            </a>
                            <a href="#tab4" title="Сравнение" class="cabinet__switch">
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
                            <a href="" class="cabinet__controls_exit">Выйти из аккаунта</a> / <a href="" class="cabinet__controls_delete">Удалить</a>
                        </div>
                        <!-- END controls -->

                    </div>
                    <!-- END left -->


                    <!-- right -->
                    <div class="cabinet__right">
                        <!-- tabs -->
                        <div class="cabinet__tabs">
                            <!-- tab -->
                            <div class="cabinet__tab" id="tab1">

                                <!-- personal -->
                                <div class="personal">

                                    <form action="" method="post" class="personal__form"
                                          enctype="multipart/form-data">
                                        <div class="personal__title">
                                            Настройки личных данных
                                        </div>

                                        <div class="personal__data">
                                            <div class="row">

                                                <!-- left -->
                                                <div class="personal__left">
                                                    <div class="personal__photo">
                                                        <label class="personal__photo-label">
                                                            <img class="personal__photo-img" src="images/icons/photo.png"
                                                                 alt="">
                                                            <input type="file" name="photo" class="personal__photo-input"
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
                                                                <input type="email" name="email" value="info99@gmail.com"
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
                                                                <input type="text" name="name" placeholder="Введите адрес"
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
                                        <div class="personal__title">
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
                                                 Сохранить изменения
                                            </span>
                                            </button>


                                        </div>
                                    </form>

                                </div>
                                <!-- END personal -->

                            </div>
                            <!-- END tab -->
                            <!-- tab -->
                            <div class="cabinet__tab  active" id="tab2">
                                <!-- orders -->
                                <div class="orders">
                                    <div class="orders__title">
                                        Мои заказы
                                    </div>

                                    <div class="orders__list">
                                        <div class="row">
                                            <? for ($j = 1; $j < 7; $j++): ?>
                                                <div class="order">

                                                    <!-- repeat -->
                                                    <div class="order__repeat">
                                                        <a href="" class="order__repeat-link">
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
                                                            <a href="product.php" class="order__product">
                                                                Лампа светодиодная 6вт
                                                                Е14 Gauss Elementary 34126
                                                            </a>
                                                            <a href="product.php" class="order__product">
                                                                Лампа светодиодная 6вт
                                                                Е14 Gauss Elementary 34126
                                                            </a>
                                                            <div class="order__hidden">
                                                                <div class="order__products">
                                                                    <? for ($i = 0; $i < 12; $i++): ?>
                                                                        <a href="product.php" class="order__product">
                                                                            Лампа светодиодная 6вт
                                                                            Е14 Gauss Elementary 34126
                                                                        </a>
                                                                    <? endfor; ?>
                                                                </div>
                                                            </div>
                                                            <a role="button" class="order__more link">
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
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi asperiores atque
                                autem consequuntur delectus deleniti dolorum exercitationem explicabo harum id, inventore
                                ipsum labore magni molestias nihil officiis quibusdam quisquam sapiente sequi sunt, tempora
                                totam! Alias aperiam culpa excepturi nam nemo placeat porro recusandae, unde? Ad aliquam
                                aspernatur aut commodi culpa, ea eos esse fugiat itaque iusto mollitia necessitatibus nulla
                                obcaecati officiis perspiciatis possimus, quibusdam quis reiciendis repellendus sequi sit
                                temporibus totam vel. Ab deleniti doloribus ea fuga, illo minus nesciunt porro quam
                                reprehenderit rerum, similique voluptate voluptates voluptatibus. Ab accusamus animi
                                asperiores corporis, cumque dolor dolores et facilis non odit pariatur perspiciatis
                                praesentium recusandae sapiente tempore veritatis, voluptas! Accusantium doloremque hic in
                                quibusdam repellendus? Aperiam consectetur dicta doloribus explicabo facilis iure
                                temporibus. Alias aliquam autem beatae corporis dicta distinctio dolore eius excepturi
                                expedita fugiat ipsam magni minus molestiae, nesciunt nostrum quos reiciendis repellat sed
                                voluptates voluptatibus! Illo inventore ipsa maiores odit repudiandae saepe, voluptas?
                                Aspernatur cupiditate dolore error quasi quia. Assumenda consequuntur delectus eius facere
                                facilis impedit laborum modi numquam odit omnis quia, repudiandae, totam veniam vero
                                voluptate? Amet commodi distinctio doloribus eos harum nemo nobis nostrum quibusdam repellat
                                voluptatibus. Eos esse, quibusdam! Consectetur esse laboriosam natus placeat tempore.
                            </div>
                            <!-- END tab -->
                            <!-- tab -->
                            <div class="cabinet__tab" id="tab4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi nisi quos voluptas
                                voluptatibus? Ab, alias amet aspernatur blanditiis cumque, dolor error illum incidunt maxime
                                molestiae nisi, perspiciatis quaerat quisquam ratione similique sunt tempora velit! Ad,
                                aperiam at commodi cupiditate delectus deleniti dignissimos dolores ea, earum eligendi id
                                incidunt, ipsa ipsum iusto laboriosam libero maiores maxime minus nemo nesciunt numquam
                                porro repellendus sapiente temporibus tenetur ut voluptates voluptatibus. Corporis ea fugit
                                magni, nisi numquam tenetur! Accusamus ad at consequatur consequuntur cum cupiditate
                                dignissimos dolor eligendi error ex exercitationem facere, id impedit incidunt iusto labore
                                libero magnam maiores minus nihil nulla obcaecati odio officiis, omnis, optio provident qui
                                quia quidem quisquam quo sapiente sed sunt tempore ut veniam voluptates voluptatum! Animi
                                architecto eaque excepturi expedita provident. Aspernatur assumenda corporis dicta, nihil
                                suscipit voluptatem. Aliquid delectus dolorum, earum enim laudantium saepe unde. Doloremque
                                ea excepturi, illo illum, inventore libero minima molestias obcaecati reiciendis
                                reprehenderit repudiandae sunt. Ab accusantium aspernatur at consectetur delectus earum
                                eligendi est ex id impedit in ipsam laborum laudantium necessitatibus omnis recusandae
                                repellendus saepe sapiente, similique ullam veritatis vero voluptate. Ab adipisci amet
                                asperiores corporis, cum delectus doloremque doloribus eveniet expedita incidunt iusto
                                labore laudantium libero magnam, maxime nam necessitatibus nemo nesciunt nihil nisi odio
                                odit porro praesentium quasi quod recusandae temporibus totam unde vel veniam. Accusamus
                                aliquam amet architecto atque autem commodi culpa debitis dolore dolores eius, error est ex
                                hic illum iste libero minus nam necessitatibus nostrum nulla omnis quae quo similique sunt,
                                voluptatem voluptates voluptatibus! Aliquam aliquid architecto aut autem cum cumque dicta
                                dolor doloremque dolores et explicabo facere illum inventore ipsa ipsum iure laudantium
                                mollitia nam nemo nihil, nisi obcaecati odit quae quam quisquam ratione rem repellat soluta
                                ullam velit vero voluptate voluptatem voluptatibus. A autem earum, nemo non obcaecati
                                officiis quam quod rerum temporibus ut!
                            </div>
                            <!-- END tab -->

                        </div>
                        <!-- END tabs -->
                    </div>
                    <!-- END right -->


                </div>
            </div>
            <!-- END cabinet -->


        </div>
    </section>

</main>