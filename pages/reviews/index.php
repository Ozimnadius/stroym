<main class="main">

    <? include 'pages/common/banner3.php' ?>

    <section class="section">

        <div class="container">
            <!-- top -->
            <div class="section__top">

                <!-- title -->
                <div class="title">
                    Отзывы
                </div>
                <!-- END title -->

            </div>
            <!-- END top -->

            <!-- reviews -->
            <div class="reviews">
                <!-- list -->
                <div class="reviews__list">
                    <? for ($i=1;$i<6;$i++): ?>
                        <div class="review">
                            <div class="row">
                                <!-- left -->
                                <div class="review__left">
                                    <div class="review__img">
                                        АК
                                    </div>
                                    <div class="review__title">
                                        Александ Кротов
                                    </div>
                                </div>
                                <!-- END left -->

                                <!-- right -->
                                <div class="review__right">
                                    <!-- rating -->
                                    <div class="review__rating">
                                        <svg class="review__star active">
                                            <use xlink:href="images/icons/sprite.svg#star"></use>
                                        </svg>
                                        <svg class="review__star active">
                                            <use xlink:href="images/icons/sprite.svg#star"></use>
                                        </svg>
                                        <svg class="review__star active">
                                            <use xlink:href="images/icons/sprite.svg#star"></use>
                                        </svg>
                                        <svg class="review__star">
                                            <use xlink:href="images/icons/sprite.svg#star"></use>
                                        </svg>
                                        <svg class="review__star">
                                            <use xlink:href="images/icons/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <!-- END rating -->

                                    <!-- text -->
                                    <div class="review__text">
                                        Долго выбирала хрустальную люстру и бра в интернете. Но мне помогла менеджер Елизавета, очень вежоиво
                                        и заинтересованно меня выслушала,грамотно дала нужный совет. Спасибо огромное Вам Елизавета!!! Спасибо Кире !!!
                                        Хочу выразить благодарность Александру, быстро доставил и установил! Очень довольна,советую всем обращаться в этот интернет магазин СПАСИБО!!!
                                    </div>
                                    <!-- END text -->

                                    <!-- bottom -->
                                    <div class="review__bottom">
                                        <!-- author -->
                                        <div class="review__author">
                                            alex.krotckov, 01 августа 2018
                                        </div>
                                        <!-- END author -->

                                        <!-- vote -->
                                        <div class="review__vote">
                                            <div class="review__vote-title">
                                                Отзыв полезен?
                                            </div>
                                            <div class="review__hands">
                                                <!-- like -->
                                                <button role="button" class="review__hand jsVote" data-id="<?=$i?>">
                                                    <span class="review__hand-int jsVote__int">1</span>
                                                    <svg class="review__hand-svg" viewBox="0 0 49.94 49.94">
                                                        <use xlink:href="images/icons/sprite.svg#like"></use>
                                                    </svg>
                                                </button>
                                                <!-- END like -->

                                                <!-- dislike -->
                                                <button role="button" class="review__hand review__hand_dislike jsVote" data-id="<?=$i?>">
                                                    <span class="review__hand-int jsVote__int">3</span>
                                                    <svg class="review__hand-svg" viewBox="0 0 49.94 49.94">
                                                        <use xlink:href="images/icons/sprite.svg#dislike"></use>
                                                    </svg>
                                                </button>
                                                <!-- END dislike -->

                                            </div>
                                        </div>
                                        <!-- END vote -->


                                    </div>
                                    <!-- END bottom -->
                                </div>
                                <!-- END right -->
                            </div>
                        </div>
                    <? endfor; ?>
                </div>
                <!-- END list -->

                <!-- pagination -->
                <div class="reviews__pagination">
                    <div class="row">
                        <div class="reviews__pagination-wrapper">
                            <? include 'pages/common/pagination.php'?>
                        </div>
                    </div>
                </div>
                <!-- END pagination -->

                <!-- form -->
                <form action="" method="post" class="reviews__form">
                    <!-- top -->
                    <div class="reviews__form-top">
                        <!-- title -->
                        <div class="reviews__form-title">
                            Оставить отзыв
                        </div>
                        <!-- END title -->

                    </div>
                    <!-- END top -->

                    <!-- bottom -->
                    <div class="reviews__form-bottom">
                        <div class="row">
                            <div class="reviews__block">
                                <input type="text" name="name" class="reviews__input" placeholder="Фамилия Имя">
                            </div>
                            <div class="reviews__block">
                                <input type="email" name="email" class="reviews__input" placeholder="Ваш e-mail">
                            </div>
                            <div class="reviews__block">
                                <!-- rating -->
                                <div class="rating">

                                    <div class="rating__title">
                                        Ваша оценка
                                    </div>

                                    <div class="rating__wrapper">
                                        <? for ($i = 5; $i > 0; $i--): ?>
                                            <input type="radio" class="rating__input"
                                                   id="rating-<?= $i ?>"
                                                   name="rating" value="<?= $i ?>">
                                            <label for="rating-<?= $i ?>" class="rating__star">
                                                <svg class="rating__star-svg" viewBox="0 0 49.94 49.94">
                                                    <use xlink:href="images/icons/sprite.svg#star"></use>
                                                </svg>
                                            </label>
                                        <? endfor; ?>
                                    </div>
                                </div>
                                <!-- END rating -->
                            </div>
                        </div>

                        <!-- label -->
                        <label class="reviews__form-label">
                            <textarea name="comment"
                                      class="reviews__form-input"
                                      placeholder="Добавьте комментарий"></textarea>
                            Все отзывы проходят модерацию
                        </label>
                        <!-- END label -->

                        <!-- buttons -->
                        <div class="reviews__form-buttons">
                            <input type="submit" value="Отправить" class="reviews__form-submit">
                            <input type="reset" value="Отмена" class="reviews__form-reset">
                        </div>
                        <!-- END buttons -->

                    </div>
                    <!-- END bottom -->

                </form>
                <!-- END form -->

            </div>
            <!-- END reviews -->

        </div>


    </section>


</main>