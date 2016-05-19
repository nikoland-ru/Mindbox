<!DOCTYPE html>
<html lang="ru">
<?php
$pageName = "Главная";
include 'base/head.php';?>
<body class="_loading">

<div class="page page-index">
    <div class="page-inner">
        <?php include 'base/header.php';?>

        <div class="page-body">

            <section class="i-promo js-anim-elem js-index-promo">
                <div class="wrapper">
                    <div class="i-promo__main-wr">
                        <div class="i-promo__title-gr">
                            <h1 class="h1-l">
                                Виртуозно управляем
                                вашим маркетингом
                            </h1>
                            <p class="i-promo__title-gr-txt">
                                ВАШИ КЛИЕНТЫ, МАРКЕТИНГОВЫЕ КАМПАНИИ, ОТЧЕТНОСТЬ
                                И ВСЕ-ВСЕ-ВСЕ В ОДНОМ МЕСТЕ
                            </p>
                        </div>

                        <a href="http://player.vimeo.com/video/122020511?api=1&amp;autoplay=1" class="video-link js-video-popup">
                            <!--<span class="iconic iconic--play"></span>-->
                            <span class="link link--black link--dotted">
                                Обо всем за 4 минуты
                            </span>
                        </a>
                        <a class="mouse-link js-scroll-trigger" href="#examples">
                            <span class="iconic iconic--mouse"></span>
                            <span class="iconic iconic--arr-b"></span>
                        </a>
                    </div>
                </div>

                <img src="../images/promo-bg-center.png" draggable="false" alt=""
                     class="i-promo__bg-img i-promo__bg-img--center">
                <img src="../images/promo-bg-left.png" draggable="false" alt=""
                     class="i-promo__bg-img i-promo__bg-img--left">
                <img src="../images/promo-bg-right.png" draggable="false" alt=""
                     class="i-promo__bg-img i-promo__bg-img--right">
            </section>

            <section id="examples" class="examples-wr js-anim-elem" data-vp-percent="0.35">
                <div class="wrapper">

                    <h3 class="examples-wr__title h1-l">
                        Например,
                    </h3>

                    <div class="examples-slider reg-slider reg-slider--anim examples js-examples-sl" >
                        <div>

                            <p class="examples-wr__inner-title">
                                Персонализируйте и сегментируйте
                            </p>

                            <div class="examples__group">
                                <div class="examples__li">

                                    <div class="examples__li-ico-wr">
                                        <div class="ico-w-circle ico-w-circle--green ico-w-circle--r-b">
                                            <span class="iconic iconic--email-like"></span>
                                        </div>
                                    </div>

                                    <div class="examples__li-txt-wr">

                                        <p class="examples__li-title">
                                            Рассылки
                                        </p>
                                        <p class="examples__li-txt">
                                            e-mail, sms и push,<br>
                                            ручные, триггерные и <br>транзакционные
                                        </p>
                                    </div>
                                </div>

                                <div class="examples__li">

                                    <div class="examples__li-ico-wr">
                                        <div class="ico-w-circle ico-w-circle--yel2 ico-w-circle--l-t">
                                            <span class="iconic iconic--site"></span>
                                        </div>
                                    </div>

                                    <div class="examples__li-txt-wr">

                                        <p class="examples__li-title">
                                            Свой сайт
                                        </p>
                                        <p class="examples__li-txt">
                                            поп-апы, рекомендации,<br> баннеры, товарную <br>выдачу и контент
                                        </p>
                                    </div>
                                </div>

                                <div class="examples__li">

                                    <div class="examples__li-ico-wr examples__li-ico-wr--pull2">
                                        <div class="ico-w-circle ico-w-circle--yel ico-w-circle--b ">
                                            <span class="iconic iconic--ppl-cards"></span>
                                        </div>
                                    </div>

                                    <div class="examples__li-txt-wr">

                                        <p class="examples__li-title">
                                            Программу лояльности
                                        </p>
                                        <p class="examples__li-txt">
                                            процессинг скидок и <br>баллов, акции и промокоды
                                        </p>
                                    </div>
                                </div>

                                <div class="examples__li">

                                    <div class="examples__li-ico-wr">
                                        <div class="ico-w-circle ico-w-circle--blueL ico-w-circle--r-t">
                                            <span class="iconic iconic--graphs"></span>
                                        </div>
                                    </div>

                                    <div class="examples__li-txt-wr">

                                        <p class="examples__li-title">
                                            Другие каналы:
                                        </p>
                                        <p class="examples__li-txt">
                                            колл-центр, мобильные <br>
                                            приложения, offline точки, чеки
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div>

                            <p class="examples-wr__inner-title">
                                Интугрируйте все инструменты
                            </p>

                            <div class="examples__group">
                                <div class="examples__li">

                                    <div class="examples__li-ico-wr examples__li-ico-wr--pull2">
                                        <div class="ico-w-circle ico-w-circle--orng2 ico-w-circle--like ">
                                            <span class="iconic iconic--like-ico"></span>
                                        </div>
                                    </div>

                                    <div class="examples__li-txt-wr">

                                        <p class="examples__li-title">
                                            Товарные <br>рекомендации
                                        </p>
                                        <p class="examples__li-txt">
                                            из рекомендательных<br> платформ
                                        </p>
                                    </div>
                                </div>

                                <div class="examples__li">

                                    <div class="examples__li-ico-wr">
                                        <div class="ico-w-circle ico-w-circle--green4 ico-w-circle--b">
                                            <span class="iconic iconic--marker"></span>
                                        </div>
                                    </div>

                                    <div class="examples__li-txt-wr">

                                        <p class="examples__li-title">
                                            Данные по цене <br>товара у конкурентов
                                        </p>
                                        <p class="examples__li-txt">
                                            из сравнительных<br> сервисов
                                        </p>
                                    </div>
                                </div>

                                <div class="examples__li">

                                    <div class="examples__li-ico-wr examples__li-ico-wr--pull3">
                                        <div class="ico-w-circle ico-w-circle--yel2 ico-w-circle--r">
                                            <span class="iconic iconic--geolocation"></span>
                                        </div>
                                    </div>

                                    <div class="examples__li-txt-wr">

                                        <p class="examples__li-title">
                                            Источник звонка
                                        </p>
                                        <p class="examples__li-txt">
                                            из коллтрекинговых <br>систем
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div>

                            <p class="examples-wr__inner-title">
                                Оценивайте эффект
                            </p>

                            <div class="examples__group">

                                <div class="examples__li">

                                    <div class="examples__li-ico-wr examples__li-ico-wr--pull">
                                        <div class="ico-w-circle ico-w-circle--green ico-w-circle--b2">
                                            <span class="iconic iconic--funnel"></span>
                                        </div>
                                    </div>

                                    <div class="examples__li-txt-wr">

                                        <p class="examples__li-title">
                                            Воронка продаж
                                        </p>
                                        <p class="examples__li-txt">
                                            по каналам и отдельным<br> кампаниям, когорты
                                        </p>
                                    </div>
                                </div>

                                <div class="examples__li">

                                    <div class="examples__li-ico-wr examples__li-ico-wr--pull3">
                                        <div class="ico-w-circle ico-w-circle--yel2 ico-w-circle--abc">
                                            <span class="iconic iconic--abc"></span>
                                        </div>
                                    </div>

                                    <div class="examples__li-txt-wr">

                                        <p class="examples__li-title">
                                            А/Б тесты
                                        </p>
                                        <p class="examples__li-txt">
                                            и контрольные группы <br>на конверсию до<br> выручки
                                        </p>
                                    </div>
                                </div>

                                <div class="examples__li">

                                    <div class="examples__li-ico-wr  examples__li-ico-wr--pull4">
                                        <div class="ico-w-circle ico-w-circle--yel ico-w-circle--scripts">
                                            <span class="iconic iconic--scripts"></span>
                                        </div>
                                    </div>

                                    <div class="examples__li-txt-wr">

                                        <p class="examples__li-title">
                                            Программируемая <br>аттрибуция
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </section>


            <section class="platforms">
                <div class="wrapper">
                    <div class="platforms__title-gr fadeInDown js-anim-elem">
                        <h4 class="h1-l h-c-green">
                            Возможности корпоративных платформ
                        </h4>
                        <p class="platforms__after-title">
                            со скоростью облачного сервиса
                        </p>
                    </div>

                    <div class="platforms__main">

                        <div class="platforms__feature fadeInUp js-anim-elem">
                            <div class="platforms__f-img">
                                <span class="iconic iconic--board"></span>
                            </div>
                            <h5 class="h2-l">
                                7 дней на старт
                                первой кампании
                            </h5>
                            <p>
                                300 обновлений в месяц
                            </p>
                        </div>

                        <div class="platforms__feature fadeInUp js-anim-elem">
                            <div class="platforms__f-img">
                                <span class="iconic iconic--cup"></span>
                            </div>
                            <h5 class="h2-l">
                                Оплата<br>
                                за результат
                            </h5>
                            <p>
                                Гарантия запуска любых кампаний в рамках подписки
                            </p>
                        </div>


                        <a href="#!" class="btn btn--default btn--default-green btn--corner btn--lg js-anim-elem">
                            Попробовать бесплатно
                        </a>
                    </div>

                </div>
            </section>

            <section class="slider-cases-wr">
                <div class="wrapper">

                    <div class="ind-title-gr fadeInUp js-anim-elem">
                        <h2 class="h1-l">
                            <a href="#!" class="link link--green">
                                Кейсы
                            </a>
                        </h2>
                        <p class="ind-title-gr__after">
                            Более 350 внедрений
                        </p>
                    </div>

                    <div class="cases-grid cases-slider reg-slider reg-slider--anim js-cases-sl js-anim-elem">

                        <div class="cases-slider__col js-cases-sl__slide">
                            <div class="cases-grid__col js-cases-sl__col">
                                <div class="case case--no-hover">
                                    <div class="case__main-link" >
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo1.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                        <span class="numb">
                                            +1400%
                                        </span>
                                            <p class="case__txt">
                                                Автоматизировали маркетинг в e-comm: 50+ кампаний и несколько А/Б тестов в месяц поддерживает один менеджер<br />
                                                +2 звезды на Яндекс.Маркете<br />
                                                +15% покупок брошенной корзины<br />
                                                +156% клик рейт в письмах
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cases-grid__col js-cases-sl__col">
                                <a class="case " href="https://www.yandex.ru/" target="_blank">
                                    <div class="case__main-link">
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo5.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                        <span class="numb">
                                            +190%
                                        </span>
                                            <p class="case__txt">
                                                выручка с SMS-рассылки
                                            </p>
                                        </div>
                                    </div>
                                    <div class="case__bottom">
                                        <span class="link link--green">
                                            Смотреть кейс
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-slider__col js-cases-sl__slide">
                            <div class="cases-grid__col js-cases-sl__col ">
                                <a class="case " href="https://www.yandex.ru/" target="_blank">
                                    <div class="case__main-link">
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo2.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                            <span class="numb">
                                                +109%
                                            </span>
                                            <p class="case__txt">
                                                выручка с email-рассылки
                                            </p>
                                        </div>
                                    </div>
                                    <div class="case__bottom">
                                        <span class="link link--green">
                                            Смотреть кейс
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <div class="cases-grid__col js-cases-sl__col">
                                <a class="case " href="https://www.yandex.ru/" target="_blank">
                                    <div class="case__main-link">
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo4.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                            <span class="numb">
                                                +150%
                                            </span>
                                            <p class="case__txt">
                                                выручка с email-рассылки
                                            </p>
                                        </div>
                                    </div>
                                    <div class="case__bottom">
                                        <span class="link link--green">
                                            Смотреть кейс
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-slider__col   js-cases-sl__slide">

                            <div class="cases-grid__col  js-cases-sl__col">
                                <div class="case case--comment js-popup-btn" data-mfp-src="#case-comment1">
                                    <div class="case__main-link" >
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo5.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                            <span class="numb">
                                                +123%
                                            </span>
                                            <p class="case__txt">
                                                конверсия offline — online
                                            </p>
                                        </div>
                                    </div>

                                    <div class="case__bottom">
                                        <span class="link link--green">
                                            Читать отзыв
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="cases-grid__col js-cases-sl__col">
                                <a class="case " href="https://www.yandex.ru/" target="_blank">
                                    <div class="case__main-link">
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo6.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                            <span class="numb">
                                                +190%
                                            </span>
                                            <p class="case__txt">
                                                выручка с SMS-рассылки
                                            </p>
                                        </div>
                                    </div>
                                    <div class="case__bottom">
                                        <span class="link link--green">
                                            Смотреть кейс
                                        </span>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="cases-slider__col js-cases-sl__slide">
                            <div class="cases-grid__col js-cases-sl__col" >
                                <div class="case case--no-hover">
                                    <div class="case__main-link">
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo3.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                        <span class="numb">
                                            +155%
                                        </span>
                                            <p class="case__txt">
                                                Построили эффективную программу лояльности: несколько миллионов участников, сотни миллионов транзакций<br />
                                                +18% маржинальности<br />
                                                240% ROI контекста
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cases-grid__col js-cases-sl__col">
                                <a class="case " href="https://www.yandex.ru/" target="_blank">
                                    <div class="case__main-link">
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo7.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                        <span class="numb">
                                            +120%
                                        </span>
                                            <p class="case__txt">
                                                выручка с SMS-рассылки
                                            </p>
                                        </div>
                                    </div>
                                    <div class="case__bottom">
                                        <span class="link link--green">
                                            Смотреть кейс
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="cases-slider__col js-cases-sl__slide">
                            <div class="cases-grid__col js-cases-sl__col ">
                                <a class="case " href="https://www.yandex.ru/" target="_blank">
                                    <div class="case__main-link">
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo2.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                        <span class="numb">
                                            +1190%
                                        </span>
                                            <p class="case__txt">
                                                выручка с SMS-рассылки
                                            </p>
                                        </div>
                                    </div>
                                    <div class="case__bottom">
                                        <span class="link link--green">
                                            Смотреть кейс
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <div class="cases-grid__col js-cases-sl__col">
                                <a class="case " href="https://www.yandex.ru/" target="_blank">
                                    <div class="case__main-link">
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo4.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                            <span class="numb">
                                                +190%
                                            </span>
                                            <p class="case__txt">
                                                выручка с SMS-рассылки
                                            </p>
                                        </div>
                                    </div>
                                    <div class="case__bottom">
                                        <span class="link link--green">
                                            Смотреть кейс
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-slider__col   js-cases-sl__slide">

                            <div class="cases-grid__col  js-cases-sl__col">
                                <div class="case case--comment js-popup-btn" data-mfp-src="#case-comment1">
                                    <div class="case__main-link" >
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo5.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                            <span class="numb">
                                                +123%
                                            </span>
                                            <p class="case__txt">
                                                конверсия offline — online
                                            </p>
                                        </div>
                                    </div>

                                    <div class="case__bottom">
                                        <span class="link link--green">
                                            Читать отзыв
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="cases-grid__col js-cases-sl__col">
                                <div class="case case--no-hover">
                                    <div class="case__main-link">
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo6.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                        <span class="numb">
                                            +190%
                                        </span>
                                            <p class="case__txt">
                                                выручка с SMS-рассылки
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="cases-slider__col js-cases-sl__slide">
                            <div class="cases-grid__col js-cases-sl__col" >
                                <a class="case " href="https://www.yandex.ru/" target="_blank">
                                    <div class="case__main-link">
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo1.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                            <span class="numb">
                                                +133%
                                            </span>
                                            <p class="case__txt">
                                                выручка с email-рассылки
                                            </p>
                                        </div>
                                    </div>
                                    <div class="case__bottom">
                                        <span class="link link--green">
                                            Смотреть кейс
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <div class="cases-grid__col js-cases-sl__col">
                                <div class="case case--no-hover">
                                    <div class="case__main-link">
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo8.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                        <span class="numb">
                                            +190%
                                        </span>
                                            <p class="case__txt">
                                                Построили эффективную программу лояльности: несколько миллионов участников, сотни миллионов транзакций<br />
                                                +18% маржинальности<br />
                                                240% ROI контекста
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cases-slider__col   js-cases-sl__slide">

                            <div class="cases-grid__col  js-cases-sl__col">
                                <div class="case case--comment js-popup-btn" data-mfp-src="#case-comment1">
                                    <div class="case__main-link" >
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo5.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                            <span class="numb">
                                                +123%
                                            </span>
                                            <p class="case__txt">
                                                конверсия offline — online
                                            </p>
                                        </div>
                                    </div>

                                    <div class="case__bottom">
                                        <span class="link link--green">
                                            Читать отзыв
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="cases-grid__col js-cases-sl__col">
                                <div class="case case--no-hover">
                                    <div class="case__main-link">
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo6.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                        <span class="numb">
                                            +190%
                                        </span>
                                            <p class="case__txt">
                                                выручка с SMS-рассылки
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="cases-slider__col js-cases-sl__slide">
                            <div class="cases-grid__col js-cases-sl__col ">
                                <a class="case " href="https://www.yandex.ru/" target="_blank">
                                    <div class="case__main-link">
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo2.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                        <span class="numb">
                                            +1190%
                                        </span>
                                            <p class="case__txt">
                                                выручка с SMS-рассылки
                                            </p>
                                        </div>
                                    </div>
                                    <div class="case__bottom">
                                        <span class="link link--green">
                                            Смотреть кейс
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <div class="cases-grid__col js-cases-sl__col">
                                <a class="case " href="https://www.yandex.ru/" target="_blank">
                                    <div class="case__main-link">
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo4.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                            <span class="numb">
                                                +190%
                                            </span>
                                            <p class="case__txt">
                                                выручка с SMS-рассылки
                                            </p>
                                        </div>
                                    </div>
                                    <div class="case__bottom">
                                        <span class="link link--green">
                                            Смотреть кейс
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-slider__col   js-cases-sl__slide">

                            <div class="cases-grid__col  js-cases-sl__col">
                                <div class="case case--comment js-popup-btn" data-mfp-src="#case-comment1">
                                    <div class="case__main-link" >
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo5.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                            <span class="numb">
                                                +123%
                                            </span>
                                            <p class="case__txt">
                                                конверсия offline — online
                                            </p>
                                        </div>
                                    </div>

                                    <div class="case__bottom">
                                        <span class="link link--green">
                                            Читать отзыв
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="cases-grid__col js-cases-sl__col">
                                <div class="case case--no-hover">
                                    <div class="case__main-link">
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo6.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                        <span class="numb">
                                            +190%
                                        </span>
                                            <p class="case__txt">
                                                выручка с SMS-рассылки
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="cases-slider__col   js-cases-sl__slide">

                            <div class="cases-grid__col  js-cases-sl__col">
                                <div class="case case--comment js-popup-btn" data-mfp-src="#case-comment1">
                                    <div class="case__main-link" >
                                        <div class="case__img-wr">
                                            <img src="../images/userfiles/logo5.png" alt="">
                                        </div>
                                        <div class="case__txt-wr">
                                            <span class="numb">
                                                +123%
                                            </span>
                                            <p class="case__txt">
                                                конверсия offline — online
                                            </p>
                                        </div>
                                    </div>

                                    <div class="case__bottom">
                                        <span class="link link--green">
                                            Читать отзыв
                                        </span>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </section>

            <section class="promo-how-wr">
                <div class="wrapper">

                    <div class="ind-title-gr fadeInUp js-anim-elem">
                        <h2 class="h1-l">
                            <a href="#!" class="link link--green">
                                Как мы работаем
                            </a>
                        </h2>
                        <p class="ind-title-gr__after">
                            Без формальных ТЗ и многомесячных внедрений. Кампании запускаются с первых дней
                        </p>
                    </div>

                    <div class="promo-how fadeIn js-anim-elem">
                        <div class="promo-how__group promo-how__group--left fadeInUp js-anim-elem">

                            <div class="promo-how__title-gr">
                                <p class="promo-how__pre-title">
                                    От вас
                                </p>
                                <p class="promo-how__title">
                                    Идеи
                                </p>
                            </div>

                            <div class="promo-how__lists-wr">

                                <div class="promo-how__list-gr">
                                    <p class="promo-how__list-title">
                                        Маркетолог
                                    </p>

                                    <ul class="ul">
                                        <li>
                                            Задает стратегию и приоритеты
                                        </li>
                                        <li>
                                            Создает контент предложений
                                        </li>
                                    </ul>
                                </div>

                                <div class="promo-how__list-gr">
                                    <p class="promo-how__list-title">
                                        Контакт по<br>
                                        интеграции
                                    </p>

                                    <ul class="ul">
                                        <li>
                                            Разовые интеграции
                                        </li>
                                        <li>
                                            Сырые данные в удобном вам виде
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                        <div class="promo-how__group promo-how__group--right fadeInUp js-anim-elem">

                            <div class="promo-how__title-gr">
                                <p class="promo-how__pre-title">
                                    От нас
                                </p>
                                <p class="promo-how__title">
                                    Работа
                                </p>
                            </div>

                            <div class="promo-how__lists-wr">

                                <div class="promo-how__list-gr">
                                    <p class="promo-how__list-title">
                                        Технический инструмент
                                    </p>

                                    <ul class="ul">
                                        <li>
                                            Управление кампаниями
                                        </li>
                                        <li>
                                            Аналитика
                                        </li>
                                    </ul>
                                </div>

                                <div class="promo-how__list-gr">
                                    <p class="promo-how__list-title">
                                        Умные руки
                                    </p>

                                    <ul class="ul">
                                        <li>
                                            Маркетолог додумает кампании и гипотезы
                                        </li>
                                        <li>
                                            Менеджер настроит нужные интеграции с IT и запустит кампании
                                        </li>
                                        <li>
                                            Аналитик — проанализирует результаты и предложит улучшения
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <?php include "components/before-after.php";?>


            <section class="product-sl-wr js-anim-elem">
                <div class="wrapper">
                    <div class="ind-title-gr">
                        <h2 class="h1-l">
                            <a href="#!" class="link link--green">
                                Продукт
                            </a>
                        </h2>
                        <p class="ind-title-gr__after">
                            Омниканальная платформа автоматизации маркетинга
                        </p>
                    </div>

                    <div class="prod-slider reg-slider reg-slider--anim js-prod-slider">

                        <div class="prod-slider__slide">

                            <div class="notebook-wr">
                                <div class="notebook">
                                    <div class="notebook__inner">
                                        <a href="../images/userfiles/gall-photo1.jpg" class="gall-link js-gall" data-gall-gr="prod-slider">
                                            <img src="../images/userfiles/gall-photo1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="prod-slider__slide-txt">
                                <h4 class="h2-l">
                                    Управляйте каналами и инструментами в одной платформе
                                </h4>

                                <ul class="ul">
                                    <li>
                                        Объединяйте профили покупателей с разных сайтов, устройств и каналов, чтобы отправлять в разы больше триггеров и уточнять отчетность
                                    </li>
                                    <li>
                                        Делайте кроссканальные кампании: покажите баннер, отправьте SMS или push тем, что прочитал, но не кликнул или кликнул, но не купил
                                    </li>
                                    <li>
                                        Стройте look-alike сегменты в social и ретаргетинг-системах
                                    </li>
                                    <li>
                                        Добавьте персонализацию и рекомендации в скрипты КЦ, формируйте сегменты для обзвона, используйте анализ откликов в коммуникации
                                    </li>
                                    <li>
                                        Реализуйте единый личный кабинет пользователя во всех каналах
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="prod-slider__slide">

                            <div class="notebook-wr">
                                <div class="notebook">
                                    <div class="notebook__inner">
                                        <a href="../images/userfiles/gall-photo1.jpg" class="gall-link js-gall" data-gall-gr="prod-slider">
                                            <img src="../images/userfiles/gall-photo1.jpg" alt="">
                                        </a>
                                    </a>
                                    </div>
                                </div>
                            </div>

                            <div class="prod-slider__slide-txt">
                                <h4 class="h2-l">
                                    Управляйте каналами и инструментами в одной платформе
                                </h4>

                                <ul class="ul">
                                    <li>
                                        Объединяйте профили покупателей с разных сайтов, устройств и каналов, чтобы отправлять в разы больше триггеров и уточнять отчетность
                                    </li>
                                    <li>
                                        Делайте кроссканальные кампании: покажите баннер, отправьте SMS или push тем, что прочитал, но не кликнул или кликнул, но не купил
                                    </li>
                                    <li>
                                        Стройте look-alike сегменты в social и ретаргетинг-системах
                                    </li>
                                    <li>
                                        Добавьте персонализацию и рекомендации в скрипты КЦ, формируйте сегменты для обзвона, используйте анализ откликов в коммуникации
                                    </li>
                                    <li>
                                        Реализуйте единый личный кабинет пользователя во всех каналах
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="prod-slider__slide">

                            <div class="notebook-wr">
                                <div class="notebook">
                                    <div class="notebook__inner">
                                        <a href="../images/userfiles/gall-photo1.jpg" class="gall-link js-gall" data-gall-gr="prod-slider">
                                            <img src="../images/userfiles/gall-photo1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="prod-slider__slide-txt">
                                <h4 class="h2-l">
                                    Управляйте каналами и инструментами в одной платформе
                                </h4>

                                <ul class="ul">
                                    <li>
                                        Объединяйте профили покупателей с разных сайтов, устройств и каналов, чтобы отправлять в разы больше триггеров и уточнять отчетность
                                    </li>
                                    <li>
                                        Делайте кроссканальные кампании: покажите баннер, отправьте SMS или push тем, что прочитал, но не кликнул или кликнул, но не купил
                                    </li>
                                    <li>
                                        Стройте look-alike сегменты в social и ретаргетинг-системах
                                    </li>
                                    <li>
                                        Добавьте персонализацию и рекомендации в скрипты КЦ, формируйте сегменты для обзвона, используйте анализ откликов в коммуникации
                                    </li>
                                    <li>
                                        Реализуйте единый личный кабинет пользователя во всех каналах
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <a href="#!" class="btn btn--default btn--default-green btn--corner btn--lg">
                        Больше возможностей
                    </a>

                </div>
            </section>

            <section class="pr-cost">
                <div class="fake-anchor" id="price"></div>
                <div class="wrapper">
                    <div class="ind-title-gr fadeInUp js-anim-elem">
                        <h2 class="h1-l">
                            <a href="#!" class="link link--green">
                                Сколько стоит
                            </a>
                        </h2>
                        <p class="ind-title-gr__after">
                            Ежемесячная подписка включает гарантию запуска кампаний,
                            стандартную отчетность и e-mail рассылки без ограничения
                            количества писем
                        </p>
                    </div>

                    <div class="calc-bl fadeInUp js-anim-elem">

                        <div class="calc-bl__inner ">

                           <?php include 'components/price-calc-index.php';?>

                            <button type="button"
                               class="btn btn--default btn--default-green btn--corner btn--lg js-side-popup-btn"
                               data-popup-name="demo" data-calc-inject="true">
                                Связаться с нами
                            </button>

                        </div>
                    </div>

                </div>
            </section>

        </div><!-- /page-body -->

        <?php
            $footerFull = 'true';
            include 'base/footer.php';?>

        <div class="page-inner__overlay">
        </div>
    </div><!-- /page-inner -->

    <?php include 'base/popups.php';?>

    <!-- popups -->

</div><!-- /page -->

<?php include 'base/scripts.php'; ?>
</body>
</html>
