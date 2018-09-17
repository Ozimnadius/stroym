<? include 'footer.php' ?>
</div>

<div class="debug">
    <div>
        <div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>

<!-- popup -->
<div class="popup">
    <div class="popup__content">
        <form action="" class="popup__form">

            <div class="popup__close">
                <div class="popup__close-wrapper">
                    <svg class="popup__close-svg">
                        <use xlink:href="images/icons/sprite.svg#close"></use>
                    </svg>
                </div>
            </div>

            <div class="popup__title">
                Заказ обратного звонка
            </div>

            <div class="fields">
                <div class="field">
                    <input type="text" class="field__input" name="name" placeholder="Заказ обратного звонка">
                </div>
                <div class="field">
                    <input type="tel" name="tel" class="field__input" placeholder="Фамилия Имя*">
                </div>
            </div>

            <div class="submit">
                <button type="submit" class="button submit__button">
                <span class="button__text">
                    Отправить
                </span>
                    <svg class="button__svg">
                        <use xlink:href="images/icons/sprite.svg#right"></use>
                    </svg>
                </button>
            </div>


            <div class="accept">
                <input type="checkbox" id="callorderAccept" name="callorderAcept" class="accept__check" checked>
                <div class="accept__wrapper">
                    <label for="callorderAccept" class="accept__label">
                        <span class="accept__fake"></span>
                    </label>
                    <a href="privacy.php" class="accept__link">
                        Политика конфиденциальности
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- END popup -->

<script src="/js/vendor.min.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="/js/main.js"></script>
</body>
</html>