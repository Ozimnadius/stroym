<main class="main">

    <? include 'pages/common/banner3.php' ?>

    <section class="section">

        <div class="container">
            <!-- top -->
            <div class="section__top">

                <!-- title -->
                <div class="title">
                    <img src="images/content/brands/brand2.png" alt="" class="title__img">
                </div>
                <!-- END title -->

                <? include 'pages/common/sort.php' ?>

            </div>
            <!-- END top -->

            <!-- brand-select -->
            <div class="brand-select">

                <div class="brand-select__list items">
                    <div class="row">
                        <? for ($i = 1; $i < 17; $i++): ?>
                            <a href="product.php" title="Товар<?= $i ?>" class="item  item_6 jsItem" data-id="<?= $i ?>">
                                <!-- img -->
                                <span class="item__img">
                                        <img src="/images/content/products/product.png" title="Product1" alt="Product1"
                                             class="item__pic">
                                    </span>
                                <!-- END img -->

                                <!-- desc -->
                                <span class="item__desc">
                                    <span class="item__title">
                                        Светодиодная лампа
                                    </span>
                                    <span class="item__text">
                                        Navigator 94 338 <br>
                                        NLL-T75-25-230-840-E27
                                    </span>

                                    <!-- hidden -->
                                    <span class="item__hidden">
                                        <span class="item__hidden-button">
                                            Узнать стоимость
                                        </span>
                                    </span>
                                    <!-- END hidden -->
                                </span>
                                <!-- END desc -->

                                <!-- controls -->
                                <span class="item__controls">
                                    <button role="button" class="item__control jsControl" data-action="favorite">
                                        <svg class="item__control-svg">
                                            <use xlink:href="images/icons/sprite.svg#izbrznnoe"></use>
                                        </svg>
                                    </button>
                                    <button role="button" class="item__control jsControl" data-action="compare">
                                        <svg class="item__control-svg">
                                            <use xlink:href="images/icons/sprite.svg#sravnenie"></use>
                                        </svg>
                                    </button>
                                    <button role="button" class="item__control jsControl" data-action="add">
                                        <svg class="item__control-svg">
                                            <use xlink:href="images/icons/sprite.svg#basket"></use>
                                        </svg>
                                    </button>

                                </span>
                                <!-- END controls -->

                            </a>
                        <? endfor; ?>
                    </div>
                </div>

                <div class="brand-select__pagination">
                    <? include 'pages/common/pagination.php'; ?>
                </div>

            </div>
            <!-- END brand-select -->

        </div>


    </section>


</main>