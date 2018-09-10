<main class="main">
    <section class="catalog section">
        <div class="container">

            <? include 'pages/common/breadcrumbs.php' ?>

            <!-- top -->
            <div class="section__top">

                <!-- title -->
                <div class="title">
                    Светодиодные лампы
                </div>
                <!-- END title -->

                <? include 'pages/common/sort.php' ?>

            </div>
            <!-- END top -->

            <!-- list -->
            <div class="catalog__list">
                <div class="row">
                    <? for ($i = 1; $i < 7; $i++): ?>
                        <div class="catalog__item">
                            <a href="category.php" title="Категория<?= $i ?>" class="catalog__link">
                                Категория<?= $i ?>
                            </a>
                            <div class="catalog__sublist">
                                <? for ($j = 1; $j < 6; $j++): ?>
                                    <a href="category.php" title="Подкатегория<?= $j ?>" class="catalog__subitem">
                                        Подкатегория<?= $j ?> <b>(999)</b>
                                    </a>
                                <? endfor; ?>
                            </div>
                        </div>
                    <? endfor; ?>
                </div>
            </div>
            <!-- END list -->
        </div>
    </section>
</main>