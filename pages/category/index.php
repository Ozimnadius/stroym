<main class="main">

    <? include 'pages/common/banner2.php' ?>

    <!-- category -->
    <section class="category section">
        <div class="container">

            <!-- top -->
            <div class="section__top">

                <!-- title -->
                <div class="title">
                    Светодиодные лампы
                </div>
                <!-- END title -->

                <? include 'pages/common/sort.php' ?>

                <? include 'pages/common/type.php' ?>

            </div>
            <!-- END top -->

            <div class="catygory__main">
                <div class="row">
                    <div class="category__list items">
                        <div class="row">
                            <? for ($i = 1; $i < 13; $i++): ?>
                                <a href="product.php" title="Товар<?= $i ?>" class="item jsItem" data-id="<?= $i ?>">
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
                        <div class="category__pagination">
                            <!-- pagination -->
                            <div class="pag">
                                <a href="category.php" title="Предыдущая" class="pag__link">
                                    <svg class="pag__svg">
                                        <use xlink:href="images/icons/sprite.svg#left"></use>
                                    </svg>
                                </a>
                                <a href="category.php" title="Страница1" class="pag__link">
                                    1
                                </a>
                                <a href="category.php" title="Страница2" class="pag__link active">
                                    2
                                </a>
                                <a href="category.php" title="Страница3" class="pag__link">
                                    3
                                </a>
                                <a href="category.php" title="Страница4" class="pag__link">
                                    4
                                </a>
                                <a href="category.php" title="Страница4" class="pag__link">
                                    ...
                                </a>
                                <a href="category.php" title="Страница54" class="pag__link">
                                    54
                                </a>
                                <a href="category.php" title="Предыдущая" class="pag__link">
                                    <svg class="pag__svg">
                                        <use xlink:href="images/icons/sprite.svg#right"></use>
                                    </svg>
                                </a>
                            </div>
                            <!-- END pagination -->

                        </div>
                    </div>

                    <aside class="category__filters">
                        <? include 'pages/common/filters.php' ?>
                    </aside>
                </div>


            </div>

        </div>
    </section>
    <!-- END category -->


    <? include 'pages/common/popular.php' ?>

</main>