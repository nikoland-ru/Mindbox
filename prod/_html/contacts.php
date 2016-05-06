<!DOCTYPE html>
<html lang="ru">
<?php
$pageName = "Контакты";
include 'base/head.php';?>
<body>

<div class="page page-contacts js-page-contacts page--gray-bg">
    <div class="page-inner">
        <?php include 'base/header.php';?>

        <div class="page-body">

            <div class="contacts">
                <div class="contacts__info">
                    <h1 class="h1-l">Свяжитесь <br> с нами</h1>
                    <div class="contacts-info">
                        <div class="contacts-info__line">
                            <div class="contacts-info__name">
                                Телефон
                            </div>
                            <div class="contacts-info__text">
                                +7 495 921-36-44
                            </div>
                        </div>
                        <div class="contacts-info__line">
                            <div class="contacts-info__name">
                                Эл. Почта
                            </div>
                            <div class="contacts-info__text">
                                <a href="mailto:info@mindbox.ru" class="link link--green">info@mindbox.ru</a>
                            </div>
                        </div>
                        <div class="contacts-info__line">
                            <div class="contacts-info__name">
                                Адрес 
                            </div>
                            <div class="contacts-info__text">
                                125040, Москва, Ленинградский проспект, дом 30, строение 2, этаж 2
                            </div>
                        </div>
                    </div>
                    <div class="contacts-social">
                        <div class="soc-line">
                            <a href="#!" target="_blank" class="soc-line__item">
                                <div class="soc-line__item-img">
                                    <img src="../images/habr.png" alt="" draggable="false">
                                </div>
                                <span class="soc-line__item-txt">
                                    Блог на хабре
                                </span>
                            </a>
                            <a href="#!" target="_blank" class="soc-line__item" draggable="false">
                                <div class="soc-line__item-img">
                                    <img src="../images/facebook.png" alt="" draggable="false">
                                </div>
                                <span class="soc-line__item-txt">
                                    Мы в Facebook
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="contacts-more js-side-popup-btn" data-popup-name="demo">
                        <span class="link link--black-green">Написать нам</span>
                    </div>
                </div>
                <div class="contacts__map">
                    <div class="contacts-map js-contacts-map" id="js-contacts-map">
                        
                    </div>
                    <div class="contacts-map-btn js-contacts-map-btn">
                        <a class="btn btn--default btn--default-white js-rout-def _active" href="#!"> Yandex карта</a>
                        <a class="btn btn--default btn--default-white js-rout-bel" href="#!"> Пешком от м. Белорусская</a>
                        <a class="btn btn--default btn--default-white js-rout-din" href="#!"> Пешком от м. Динамо</a>
                    </div>
                </div>
                <div class="contacts-map-mob">
                    <div class="contacts-info__line">
                        <div class="contacts-info__name">
                            Схема проезда 
                        </div>
                        <div class="contacts-info__text">
                            <div class="contacts-map-mob__line">
                                <a class="link link--green link--dotted js-mob-map-btn" href="#!"> Yandex карта</a>
                                <div class="contacts-map-mob__hide" id="js-mob-def"></div>
                            </div>

                            <div class="contacts-map-mob__line">
                                <a class="link link--green link--dotted js-mob-map-btn" href="#!"> Пешком от м. Белорусская</a>
                                <div class="contacts-map-mob__hide" id="js-mob-bel"></div>
                            </div>
                            <div class="contacts-map-mob__line">
                                <a class="link link--green link--dotted js-mob-map-btn" href="#!"> Пешком от м. Динамо</a>
                                <div class="contacts-map-mob__hide" id="js-mob-din"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div><!-- /page-body -->

        <?php include 'base/footer.php';?>

        <div class="page-inner__overlay">
        </div>
    </div><!-- /page-inner -->

    <?php include 'base/popups.php';?>

    <!-- popups -->

</div><!-- /page -->

<?php include 'base/scripts.php'; ?>
</body>
</html>
