<!DOCTYPE html>
<html lang="ru">
<?php
$pageName = "Кейсы наших клиентов";
include 'base/head.php';?>
<body>

<div class="page page-cases">
    <div class="page-inner">
        <?php include 'base/header.php';?>

        <div class="page-body">
            <?php include "components/page-head.php";?>

            <div class="cases-sort js-case-sort">
                <div class="wrapper">

                    <div class="cases-sort__desktop">
                        <div class="cases-sort__nav">
                            <button type="button" class="cases-sort__link js-cSorting-cat _active" >
                                <span class="link link--white link--dotted">
                                    Все отрасли
                                </span>
                            </button>

                            <button type="button" class="cases-sort__link js-cSorting-cat" data-sort-type="meb">
                                <span class="link link--white link--dotted">
                                    Мебель
                                </span>
                            </button>

                            <button type="button" class="cases-sort__link js-cSorting-cat" data-sort-type="adv">
                                <span class="link link--white link--dotted">
                                    Реклама
                                </span>
                            </button>

                            <button type="button" class="cases-sort__link js-cSorting-cat" data-sort-type="finance">
                                <span class="link link--white link--dotted">
                                    Финансы
                                </span>
                            </button>

                            <button type="button" class="cases-sort__link js-cSorting-cat" data-sort-type="estate">
                                <span class="link link--white link--dotted">
                                    Недвижимость
                                </span>
                            </button>

                            <button type="button" class="cases-sort__link js-cSorting-cat" data-sort-type="auto">
                                <span class="link link--white link--dotted">
                                    Авто
                                </span>
                            </button>

                            <button type="button" class="cases-sort__link js-cSorting-cat" data-sort-type="prod">
                                <span class="link link--white link--dotted">
                                    Продукты
                                </span>
                            </button>

                            <button type="button" class="cases-sort__link js-cSorting-cat" data-sort-type="building">
                                <span class="link link--white link--dotted">
                                    Строительство
                                </span>
                            </button>

                            <button type="button" class="cases-sort__link js-cSorting-cat" data-sort-type="oil">
                                <span class="link link--white link--dotted">
                                    Нефть и газ
                                </span>
                            </button>

                            <button type="button" class="cases-sort__link js-cSorting-cat" data-sort-type="comp">
                                <span class="link link--white link--dotted">
                                    Компьютеры
                                </span>
                            </button>

                            <button type="button" class="cases-sort__link js-cSorting-cat" data-sort-type="sport">
                                <span class="link link--white link--dotted">
                                    Спорт
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="cases-sort__mobile">

                        <div class="selector js-selector">
                            <span class="selector__option-current js-selector-current">
                                 Все отрасли
                            </span>
                            <ul class="selector__options-list js-selector-options">
                                <li class="selector__option js-selector-option js-cSorting-cat _active">
                                    Все отрасли
                                </li>
                                <li class="selector__option js-selector-option js-cSorting-cat" data-sort-type="meb">
                                    Мебель
                                </li>
                                <li class="selector__option js-selector-option js-cSorting-cat" data-sort-type="adv">
                                    Реклама
                                </li>
                                <li class="selector__option js-selector-option js-cSorting-cat" data-sort-type="finance">
                                    Финансы
                                </li>
                                <li class="selector__option js-selector-option js-cSorting-cat" data-sort-type="estate">
                                    Недвижимость
                                </li>
                                <li class="selector__option js-selector-option js-cSorting-cat" data-sort-type="auto">
                                    Авто
                                </li>
                                <li class="selector__option js-selector-option js-cSorting-cat" data-sort-type="prod">
                                    Продукты
                                </li>
                                <li class="selector__option js-selector-option js-cSorting-cat" data-sort-type="building">
                                    Строительство
                                </li>
                                <li class="selector__option js-selector-option js-cSorting-cat" data-sort-type="oil">
                                    Нефть и газ
                                </li>
                                <li class="selector__option js-selector-option js-cSorting-cat" data-sort-type="comp">
                                    Компьютеры
                                </li>
                                <li class="selector__option js-selector-option js-cSorting-cat" data-sort-type="sport">
                                    Спорт
                                </li>
                            </ul>
                            <input type="hidden" value="" name="">
                        </div>

                    </div>

                </div>
            </div>

            <div class="cases-catalog js-case-catalog ">
                <div class="wrapper">
                    <div class="cases-grid js-case-catalog-inner">

                        <div class="cases-grid__col  cases-grid__col--double _double js-case-wr" data-sort-type="prod">
                            <div class="case case--comment">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name1">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo4.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                        <span class="numb">
                                            +1400%
                                        </span>
                                        <p class="case__txt">
                                            конверсия offline — online
                                        </p>
                                    </div>
                                </a>

                                <div class="case__comment">
                                    <p class="case__comm-title">
                                        Отзыв
                                    </p>
                                    <p class="case__comm-txt">
                                        Рост выручки, прибыльности и лояльности покупателей. Понятная достоверная
                                        отчетность, новые маркетинговые идеи. Спасибо!
                                    </p>

                                    <div class="case__comm-link-wr">
                                        <a href="#!" class="link link--white js-popup-btn" data-mfp-src="#case-comment1">
                                            Читать весь отзыв
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr" data-sort-type="meb">
                            <div class="case">
                                <a href="#!"  class="case__main-link js-popup-btn" data-mfp-src="#case-name1" >
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo1.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                                <span class="numb">
                                                    +1400%
                                                </span>
                                        <p class="case__txt">
                                            конверсия offline — online
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr" data-sort-type="adv">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name2" >
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo5.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                                <span class="numb">
                                                    +1400% and two words
                                                </span>
                                        <p class="case__txt">
                                            выручка с email-рассылки
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="cases-grid__col js-case-wr " data-sort-type="finance">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name3">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo2.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                        <span class="numb">
                                            +190%
                                        </span>
                                        <p class="case__txt">
                                            выручка с SMS-рассылки
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>



                        <div class="cases-grid__col js-case-wr" data-sort-type="estate">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name4">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo6.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                                <span class="numb">
                                                    +1400 123%
                                                </span>
                                        <p class="case__txt">
                                            конверсия offline — online
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>



                        <div class="cases-grid__col js-case-wr" data-sort-type="building">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name3">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo9.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                            <span class="numb">
                                                +1400%
                                            </span>
                                        <p class="case__txt">
                                            конверсия offline — online
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col  cases-grid__col--double js-case-wr" data-sort-type="prod">
                            <div class="case case--comment">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name1">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo4.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                                <span class="numb">
                                                    +1400%
                                                </span>
                                        <p class="case__txt">
                                            конверсия offline — online
                                        </p>
                                    </div>
                                </a>

                                <div class="case__comment">
                                    <p class="case__comm-title">
                                        Отзыв
                                    </p>
                                    <p class="case__comm-txt">
                                        Рост выручки, прибыльности и лояльности покупателей. Понятная достоверная
                                        отчетность, новые маркетинговые идеи. Спасибо!
                                    </p>

                                    <div class="case__comm-link-wr">
                                        <a href="#!" class="link link--white js-popup-btn" data-mfp-src="#case-comment1">
                                            Читать весь отзыв
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="cases-grid__col js-case-wr" data-sort-type="auto">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name2">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo8.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                            <span class="numb">
                                                +1400%
                                            </span>
                                        <p class="case__txt">
                                            конверсия offline — online
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr" data-sort-type="oil">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name5">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo3.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                            <span class="numb">
                                                +1400%
                                            </span>
                                        <p class="case__txt">
                                            выручка с email-рассылки
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr" data-sort-type="comp">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name6">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo7.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                            <span class="numb">

                                            </span>
                                        <p class="case__txt">
                                            выручка с email-рассылки
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr" data-sort-type="sport">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name6">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo7.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                            <span class="numb">

                                            </span>
                                        <p class="case__txt">
                                            выручка с email-рассылки
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr" data-sort-type="meb">
                            <div class="case">
                                <a href="#!"  class="case__main-link js-popup-btn" data-mfp-src="#case-name1" >
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo1.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                                <span class="numb">
                                                    +1400%
                                                </span>
                                        <p class="case__txt">
                                            конверсия offline — online
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr" data-sort-type="adv">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name2" >
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo5.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                                <span class="numb">
                                                    +1400% and two words
                                                </span>
                                        <p class="case__txt">
                                            выручка с email-рассылки
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr " data-sort-type="finance">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name3">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo2.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                        <span class="numb">
                                            +190%
                                        </span>
                                        <p class="case__txt">
                                            выручка с SMS-рассылки
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr" data-sort-type="estate">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name4">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo6.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                                <span class="numb">
                                                    +1400 123%
                                                </span>
                                        <p class="case__txt">
                                            конверсия offline — online
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="cases-grid__col js-case-wr" data-sort-type="auto">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name2">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo8.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                            <span class="numb">
                                                +1400%
                                            </span>
                                        <p class="case__txt">
                                            конверсия offline — online
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col  cases-grid__col--double _double js-case-wr" data-sort-type="sport">
                            <div class="case case--comment">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name1">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo4.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                                <span class="numb">
                                                    +1400%
                                                </span>
                                        <p class="case__txt">
                                            конверсия offline — online
                                        </p>
                                    </div>
                                </a>

                                <div class="case__comment">
                                    <p class="case__comm-title">
                                        Отзыв
                                    </p>
                                    <p class="case__comm-txt">
                                        Рост выручки, прибыльности и лояльности покупателей. Понятная достоверная
                                        отчетность, новые маркетинговые идеи. Спасибо!
                                    </p>

                                    <div class="case__comm-link-wr">
                                        <a href="#!" class="link link--white js-popup-btn" data-mfp-src="#case-comment1">
                                            Читать весь отзыв
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="cases-grid__col js-case-wr" data-sort-type="building">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name3">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo9.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                            <span class="numb">
                                                +1400%
                                            </span>
                                        <p class="case__txt">
                                            конверсия offline — online
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr" data-sort-type="oil">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name5">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo3.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                            <span class="numb">
                                                +1400%
                                            </span>
                                        <p class="case__txt">
                                            выручка с email-рассылки
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr" data-sort-type="comp">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name6">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo7.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                            <span class="numb">

                                            </span>
                                        <p class="case__txt">
                                            выручка с email-рассылки
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr" data-sort-type="sport">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name6">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo7.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                            <span class="numb">

                                            </span>
                                        <p class="case__txt">
                                            выручка с email-рассылки
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr" data-sort-type="meb">
                            <div class="case">
                                <a href="#!"  class="case__main-link js-popup-btn" data-mfp-src="#case-name1" >
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo1.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                                <span class="numb">
                                                    +1400%
                                                </span>
                                        <p class="case__txt">
                                            конверсия offline — online
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr" data-sort-type="adv">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name2" >
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo5.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                                <span class="numb">
                                                    +1400% and two words
                                                </span>
                                        <p class="case__txt">
                                            выручка с email-рассылки
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr " data-sort-type="finance">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name3">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo2.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                        <span class="numb">
                                            +190%
                                        </span>
                                        <p class="case__txt">
                                            выручка с SMS-рассылки
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr" data-sort-type="estate">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name4">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo6.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                                <span class="numb">
                                                    +1400 123%
                                                </span>
                                        <p class="case__txt">
                                            конверсия offline — online
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="cases-grid__col js-case-wr" data-sort-type="auto">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name2">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo8.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                            <span class="numb">
                                                +1400%
                                            </span>
                                        <p class="case__txt">
                                            конверсия offline — online
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col  cases-grid__col--double _double js-case-wr" data-sort-type="prod">
                            <div class="case case--comment">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name1">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo4.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                                <span class="numb">
                                                    +1400%
                                                </span>
                                        <p class="case__txt">
                                            конверсия offline — online
                                        </p>
                                    </div>
                                </a>

                                <div class="case__comment">
                                    <p class="case__comm-title">
                                        Отзыв
                                    </p>
                                    <p class="case__comm-txt">
                                        Рост выручки, прибыльности и лояльности покупателей. Понятная достоверная
                                        отчетность, новые маркетинговые идеи. Спасибо!
                                    </p>

                                    <div class="case__comm-link-wr">
                                        <a href="#!" class="link link--white js-popup-btn" data-mfp-src="#case-comment1">
                                            Читать весь отзыв
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="cases-grid__col js-case-wr" data-sort-type="building">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name3">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo9.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                            <span class="numb">
                                                +1400%
                                            </span>
                                        <p class="case__txt">
                                            конверсия offline — online
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr" data-sort-type="oil">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name5">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo3.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                            <span class="numb">
                                                +1400%
                                            </span>
                                        <p class="case__txt">
                                            выручка с email-рассылки
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr" data-sort-type="comp">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name6">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo7.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                            <span class="numb">

                                            </span>
                                        <p class="case__txt">
                                            выручка с email-рассылки
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="cases-grid__col js-case-wr" data-sort-type="sport">
                            <div class="case">
                                <a href="#!" class="case__main-link js-popup-btn" data-mfp-src="#case-name6">
                                    <div class="case__img-wr">
                                        <img src="../images/userfiles/logo7.png" alt="">
                                    </div>
                                    <div class="case__txt-wr">
                                            <span class="numb">

                                            </span>
                                        <p class="case__txt">
                                            выручка с email-рассылки
                                            выручка с email-рассылки
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div><!-- /page-body -->

        <?php include 'base/footer.php';?>

        <div class="page-inner__overlay"></div>
    </div><!-- /page-inner -->

    <?php include 'base/popups.php';?>

    <!-- popups -->

</div><!-- /page -->

<?php include 'base/scripts.php'; ?>
</body>
</html>
