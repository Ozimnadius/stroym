<main class="main">

    <? include 'pages/common/banner3.php' ?>

    <section class="section">

        <div class="container">
            <!-- top -->
            <div class="section__top">

                <!-- title -->
                <div class="title">
                    Мы работаем с брендами
                </div>
                <!-- END title -->

            </div>
            <!-- END top -->

            <!-- brands -->
                <div class="brands">

                    <div class="brands__list">
                        <div class="row">
                            <? for ($i=1;$i<9; $i++): ?>
                                <a href="brand-select.php" title="Brand<?=$i?>" class="brand">
                                    <img src="/images/content/brands/brand<?=$i?>.png" alt="Brand<?=$i?>" title="Brand<?=$i?>" class="brand__img">
                                </a>
                            <? endfor; ?>
                            <? for ($i=1;$i<9; $i++): ?>
                                <a href="brand-select.php" title="Brand<?=$i?>" class="brand">
                                    <img src="/images/content/brands/brand<?=$i?>.png" alt="Brand<?=$i?>" title="Brand<?=$i?>" class="brand__img">
                                </a>
                            <? endfor; ?>
                        </div>
                    </div>

                    <div class="brands__pagination">
                        <? include 'pages/common/pagination.php'; ?>
                    </div>

                </div>
            <!-- END brands -->

        </div>


    </section>


</main>