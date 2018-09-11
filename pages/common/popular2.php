<!-- popular -->
<div class="popular">
    <div class="container">
        <div class="popular__title">
            Сопутствующие товары
        </div>

        <div class="popular__slider">
            <div class="popular__prev">
                <button class="arrow arrow_yellow">
                    <svg class="arrow__svg">
                        <use xlink:href="images/icons/sprite.svg#left"></use>
                    </svg>
                </button>
            </div>

            <div class="swiper-container popular__container">
                <div class="swiper-wrapper">
                    <? for ($i = 1; $i < 13; $i++): ?>
                        <a href="product.php" title="Товар<?= $i ?>" class="swiper-slide item jsItem" data-id="<?= $i ?>">
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

            <div class="popular__next">
                <button class="arrow arrow_yellow">
                    <svg class="arrow__svg">
                        <use xlink:href="images/icons/sprite.svg#right"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END popular -->