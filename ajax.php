<?php
header('Content-Type: application/json');

$data = $_POST;
$action = $data['action'];
switch ($action) {
    case 'callorder':
        echo json_encode(array(
            'status' => true,
            'html' => '<div class="callorder__success"><h3>Спасибо за заявку!</h3> Скоро с вами свяжется наш менеджер.</div>',
        ));
        exit();
        break;
    case 'favorite':
        echo json_encode(array(
            'status' => true
        ));
        exit();
        break;
    case 'compare':
        echo json_encode(array(
            'status' => true
        ));
        exit();
        break;
    case 'add':
        echo json_encode(array(
            'status' => true
        ));
        exit();
        break;
    case 'type':
        echo json_encode(array(
            'status' => true
        ));
        exit();
        break;
    case 'moreActions':
        echo json_encode(array(
            'status' => true,
            'html' => moreActions()
        ));
        exit();
        break;
    case 'moreCats':
        echo json_encode(array(
            'status' => true,
            'html' => moreCats()
        ));
        exit();
        break;
    case 'vote':
        echo json_encode(array(
            'status' => true,
        ));
        exit();
        break;
    default:
        echo json_encode(array(
            'status' => false,
        ));
        exit();
        break;
}

function moreActions()
{
    ob_start();
    ?>
    <a href="" title="Светодиодные лампы" class="action"
       style="background-image: url(images/content/actions/action1.jpg);">

        <!-- img -->
        <span class="action__img">
                <span class="action__percent">
                    Скидки -15%
                </span>
                <img src="images/content/actions/actionimg1.png" alt="Светодиодные лампы" title="Светодиодные лампы"
                     class="action__pic">
            </span>
        <!-- END img -->

        <!-- title -->
        <span class="action__title">
               Светодиодные лампы
            </span>
        <!-- END title -->
    </a>
    <a href="" title="Энергосберегающие лампы" class="action action-2"
       style="background-image: url(images/content/actions/action2.jpg);">
            <span class="action-2__title">
               Энергосберегающие <br>
                лампы
            </span>
        <span class="action-2__percent">
                Скидка до 15%
            </span>
    </a>
    <a href="" title="Лампы накаливания" class="action action-3"
       style="background-image: url(images/content/actions/action3.jpg);">
        <svg class="action-3__percent"
             xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 300 90">
            <text x="0" y="85">-20%</text>
        </svg>
        <span class="action-3__stick">
                Спецпредложение на опт
            </span>
        <span class="action-3__title">
               Лампы накаливания
            </span>

    </a>
    <a href="" title="Лампы люминесцентные" class="action action-4"
       style="background-image: url(images/content/actions/action4.jpg);">
            <span class="action-4__stick">
                Акция
            </span>
        <span class="action-4__title">
               Лампы люминесцентные
            </span>
    </a>
    <a href="" title="Лампы галогенные" class="action action-5"
       style="background-image: url(images/content/actions/action5.jpg);">

        <!-- img -->
        <span class="action-5__img">
                <span class="action-5__percent">
                    -15%
                </span>
                <img src="images/content/actions/actionimg5.png" alt="Светодиодные лампы" title="Светодиодные лампы"
                     class="action-5__pic">
            </span>
        <!-- END img -->

        <span class="action-5__title">
               Лампы галогенные
            </span>
    </a>
    <a href="" title="Прожекторы и фонари" class="action action-6"
       style="background-image: url(images/content/actions/action6.jpg);">
            <span class="action-6__percent">
                Акция -15%
            </span>
        <span class="action-6__title">
               Прожекторы <br>
                и фонари
            </span>
    </a>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function moreCats()
{
    ob_start();
    ?>
    <div class="cat" style="background-image: url(images/content/cats/category1.jpg);">
        <!-- link -->
        <a href="" title="Светильники светодиодные" class="cat__link">
            Светильники светодиодные
        </a>
        <!-- END link -->
    </div>
    <div class="cat" style="background-image: url(images/content/cats/category2.jpg);">
        <!-- link -->
        <a href="" title="Светильники светодиодные" class="cat__link">
            Светильники светодиодные
        </a>
        <!-- END link -->
    </div>
    <div class="cat cat_3" style="background-image: url(images/content/cats/category3.jpg);">
        <!-- link -->
        <a href="" title="Светильники светодиодные" class="cat__link">
            Лампы
        </a>
        <!-- END link -->
    </div>
    <div class="cat cat_3" style="background-image: url(images/content/cats/category4.jpg);">
        <!-- link -->
        <a href="" title="Светильники светодиодные" class="cat__link">
            Лампы
        </a>
        <!-- END link -->
    </div>
    <div class="cat cat_3" style="background-image: url(images/content/cats/category5.jpg);">
        <!-- link -->
        <a href="" title="Светильники светодиодные" class="cat__link">
            Лампы
        </a>
        <!-- END link -->
    </div>
    <div class="cat" style="background-image: url(images/content/cats/category6.jpg);">
        <!-- link -->
        <a href="" title="Светильники светодиодные" class="cat__link">
            Светильники светодиодные
        </a>
        <!-- END link -->
    </div>
    <div class="cat" style="background-image: url(images/content/cats/category7.jpg);">
        <!-- link -->
        <a href="" title="Светильники светодиодные" class="cat__link">
            Светильники светодиодные
        </a>
        <!-- END link -->
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}