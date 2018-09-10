<main class="main">
    <!-- banner2 -->
    <div class="banner2" style="background-image: url(../images/bg/bg-banner2-1.jpg);">
        <div class="container banner2__container">
            <div class="banner2__bread">
                <? include 'pages/common/breadcrumbs_white.php' ?>
            </div>
        </div>

        <div class="banner2__bg" style="background-image: url(../images/bg/bg-banner2-2.jpg);">
            <div class="banner2__content">
                <div class="banner2__img">
                    <img src="images/content/banner2.png" alt="Баннер2" title="Banner2" class="banner2__pic">
                </div>
                <svg class="banner2__svg" width="180" height="48"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 170 48">
                    <text x="0" y="35">Скидка</text>
                </svg>

                <div class="banner2__desc">
                    <div class="banner2__percent">
                        -15%
                    </div>
                    <div class="banner2__text">
                        на светодиодные <br>
                        светильники
                    </div>
                </div>

                <a href="" title="Подробнее об акции" class="button banner2__button">
                    <span class="button__text">Подробнее об акции</span>
                </a>
            </div>

        </div>
    </div>
    <!-- END banner2 -->

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
</main>