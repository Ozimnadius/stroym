<main class="main">

    <? include 'pages/common/banner3.php' ?>

    <!-- category -->
    <section class="basket section">
        <div class="container">

            <!-- top -->
            <div class="section__top">

                <!-- title -->
                <div class="title">
                    Корзина
                </div>
                <!-- END title -->
            </div>
            <!-- END top -->

            <!-- table -->
            <div class="basket__table">
                <div class="basket__head">
                    <div class="row">
                        <div class="basket__th basket__th_left basket__col-product">
                            Товар
                        </div>
                        <div class="basket__th basket__col-controls">
                            Добавить
                        </div>
                        <div class="basket__th basket__col-count">
                            Количество
                        </div>
                        <div class="basket__th basket__col-delete">
                            Удалить
                        </div>
                    </div>
                </div>
                <div class="basket__body">
                    <? for ($i = 1; $i<4;$i++): ?>
                    <div class="basket__item jsItem" data-id="<?=$i?>">
                        <div class="row">
                            <div class="basket__td basket__col-product">
                                <!-- product -->
                                <a href="product.php" title="Светодиодная лампа<?=$i?>" class="basket__product">
                                    <!-- left -->
                                    <div class="basket__product-left">
                                        <div class="basket__img">
                                            <img src="images/content/products/product.png" alt="Светодиодная лампа<?=$i?>"
                                                 title="Светодиодная лампа<?=$i?>"
                                                 class="basket__pic">
                                        </div>
                                    </div>
                                    <!-- END left -->

                                    <!-- right -->
                                    <div class="basket__product-right">
                                        <div class="basket__title">
                                            Светодиодная лампа<?=$i?>
                                        </div>
                                        <div class="basket__desc">
                                            Navigator 94 338 <br>
                                            NLL-T75-25-230-840-E27
                                        </div>
                                    </div>
                                    <!-- END right -->
                                </a>
                                <!-- END product -->
                            </div>

                            <div class="basket__td basket__col-controls">
                                <!-- controls -->
                                <div class="product__controls basket__controls">
                                    <button role="button" class="product__control jsControl" data-action="favorite">
                                        <svg class="product__control-svg">
                                            <use xlink:href="images/icons/sprite.svg#izbrznnoe"></use>
                                        </svg>
                                    </button>
                                    <button role="button" class="product__control jsControl" data-action="compare">
                                        <svg class="product__control-svg">
                                            <use xlink:href="images/icons/sprite.svg#sravnenie"></use>
                                        </svg>
                                    </button>
                                </div>
                                <!-- END controls -->
                            </div>

                            <div class="basket__td basket__col-count">
                                <div class="basket__count">
                                    <div class="count">
                                        <button type="button" class="count__down">
                                            <svg class="count__svg">
                                                <use xlink:href="images/icons/sprite.svg#remove"></use>
                                            </svg>
                                        </button>
                                        <input type="number" class="count__val" value="2">
                                        <button type="button" class="count__up">
                                            <svg class="count__svg">
                                                <use xlink:href="images/icons/sprite.svg#add"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="basket__td basket__col-delete">
                                <div class="basket__delete">
                                    <button role="button" class="delete jsDelete">
                                        <svg class="delete__svg">
                                            <use xlink:href="images/icons/sprite.svg#del"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <? endfor; ?>
                </div>
            </div>
            <!-- END table -->

            <!-- button -->
            <button role="button" class="basket__button button button_yellow jsPopupOpen" data-action="callorder">
                Узнать стоимость
            </button>
            <!-- END button -->

        </div>
    </section>
    <!-- END category -->


    <? include 'pages/common/popular2.php' ?>

    <? include 'pages/common/look2.php' ?>

</main>