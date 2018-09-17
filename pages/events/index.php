<main class="main">

    <? include 'pages/common/banner3.php' ?>

    <section class="section">

        <div class="container">
            <!-- top -->
            <div class="section__top">

                <!-- title -->
                <div class="title">
                    Новости
                </div>
                <!-- END title -->

                <? include 'pages/common/sort.php' ?>

            </div>
            <!-- END top -->

            <!-- events -->
            <div class="events">
                <!-- list -->
                <div class="events__list">
                    <div class="row">
                        <div class="events__item">
                            <a href="event.php" title="В американском аэропорту все лампы заменят на LED"
                               class="events__item-img">
                                <img src="images/content/events/events1.jpg"
                                     title="В американском аэропорту все лампы заменят на LED"
                                     alt="В американском аэропорту все лампы заменят на LED" class="events__item-pic">
                                <button class="events__button">
                                    <span class="events__button-text">
                                        Подробнее
                                    </span>
                                    <svg class="events__button-svg">
                                        <use xlink:href="images/icons/sprite.svg#right"></use>
                                    </svg>
                                </button>
                                <span class="events__item-date">
                                    29 августа
                                </span>
                            </a>
                            <div class="events__item-desc">
                                <div class="events__item-title">
                                    В американском аэропорту все лампы заменят на LED
                                </div>
                                <div class="events__item-text">
                                    В Международном аэропорту Финикс Скай-Харбор (Sky Harbor), расположенном в
                                    американском городе Phoenix (штат Аризона), близится к завершению установка более
                                    трёх тысяч светодиодных ламп.
                                </div>
                            </div>
                        </div>
                        <? for ($i=2;$i<6;$i++): ?>
                            <div class="events__item events__item_2">
                                <a href="event.php" title="В американском аэропорту все лампы заменят на LED"
                                   class="events__item-img">
                                    <img src="images/content/events/events<?=$i?>.jpg"
                                         title="В американском аэропорту все лампы заменят на LED"
                                         alt="В американском аэропорту все лампы заменят на LED" class="events__item-pic">
                                    <button class="events__button">
                                    <span class="events__button-text">
                                        Подробнее
                                    </span>
                                        <svg class="events__button-svg">
                                            <use xlink:href="images/icons/sprite.svg#right"></use>
                                        </svg>
                                    </button>
                                    <span class="events__item-date">
                                    29 августа
                                </span>
                                </a>
                                <div class="events__item-desc">
                                    <div class="events__item-title">
                                        В американском аэропорту все лампы заменят на LED
                                    </div>
                                    <div class="events__item-text">
                                        В Международном аэропорту Финикс Скай-Харбор (Sky Harbor), расположенном в
                                        американском городе Phoenix (штат Аризона), близится к завершению установка более
                                        трёх тысяч светодиодных ламп.
                                    </div>
                                </div>
                            </div>
                        <? endfor; ?>
                    </div>
                </div>
                <!-- END list -->

                <!-- pagination -->
                <div class="events__pagination">
                    <? include 'pages/common/pagination.php'?>
                </div>
                <!-- END pagination -->

            </div>
            <!-- END events -->
        </div>


    </section>


</main>