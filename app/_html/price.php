<!DOCTYPE html>
<html lang="ru">
<?php
$pageName = "Сколько стоит";
include 'base/head.php';?>
<body>

<div class="page page-price">
    <div class="page-inner">
        <?php include 'base/header.php';?>

        <div class="page-body">
            <?php include "components/page-head.php";?>

            <div class="price-cols price-calc price-calc--main js-priceCalc"
                 data-min-value="99999" data-max-value="5000000">
                <div class="wrapper">
                    <div class="price-cols__main-col">
                        <form class="price-calc-main ">

                            <div class="ico-w-circle ico-w-circle--green ico-w-circle--r-t">
                                <span class="iconic iconic--ppl"></span>
                            </div>

                            <p class="price-calc__top-txt js-priceCalc_top-node">
                                до 100 000 покупателей
                            </p>

                            <div class="price-calc__ranges-wr">
                                <span class="price-calc__left-txt">
                                    100 000
                                </span>
                                <span class="price-calc__right-txt">
                                    5 000 000
                                </span>
                                <div class="price-calc__ranges js-priceCalc_ranges">
                                    <input type="hidden" class="js-priceCalc_input-users">
                                    <input type="hidden" class="js-priceCalc_input-counter-price">
                                </div>
                            </div>



                            <p class="price-calc__txt">
                                Ежемесячная подписка включает гарантию запуска кампаний, стандартную отчетность
                                и e-mail рассылки без
                                ограничения количества писем
                            </p>

                            <div class="price-calc__options-wr">

                                <div class="calc-options  js-priceCalc__options">

                                    <h4 class="h2-l">
                                        Опции и скидки
                                    </h4>
                                    <div class="cols cols--s">
                                        <div class="col col--50  ">
                                            <div class="calc-options__group">
                                                <h4 class="h6-wide">
                                                    Дополнительные каналы
                                                </h4>

                                                <label class="checkbox-label">
                                                    <span class="checkbox">
                                                        <input type="checkbox" class="js-priceCalc_chkb" value="10%">
                                                        <span class="checkbox__view"></span>
                                                    </span>

                                                    <span class="checkbox-label__txt">
                                                        SMS рассылки (наш шлюз или интеграция по протоколу Mindbox)
                                                    </span>
                                                </label>

                                                <label class="checkbox-label">
                                                    <span class="checkbox">
                                                        <input type="checkbox" class="js-priceCalc_chkb" value="15%">
                                                        <span class="checkbox__view"></span>
                                                    </span>

                                                    <span class="checkbox-label__txt">
                                                        Мобильное приложение и push сообщения
                                                    </span>
                                                </label>

                                                <label class="checkbox-label">
                            <span class="checkbox">
                                <input type="checkbox" class="js-priceCalc_chkb" value="15%">
                                <span class="checkbox__view"></span>
                            </span>

                            <span class="checkbox-label__txt">
                                Ретаргетинг в триггерных цепочках и операциях
                            </span>
                                                </label>

                                                <label class="checkbox-label">
                            <span class="checkbox">
                                <input type="checkbox" class="js-priceCalc_chkb" value="10%">
                                <span class="checkbox__view"></span>
                            </span>

                            <span class="checkbox-label__txt">
                                Персонализация сайта в реальном времени
                            </span>
                                                </label>

                                                <label class="checkbox-label">
                            <span class="checkbox">
                                <input type="checkbox" class="js-priceCalc_chkb" value="20%">
                                <span class="checkbox__view"></span>
                            </span>

                            <span class="checkbox-label__txt">
                                Интеграция с колл-центром (в т.ч. операторы поддержки и обратной связи)
                            </span>
                                                </label>

                                                <label class="checkbox-label">
                            <span class="checkbox">
                                <input type="checkbox" class="js-priceCalc_chkb" value="50%">
                                <span class="checkbox__view"></span>
                            </span>

                            <span class="checkbox-label__txt">
                                Программа лояльности (процессинг, баллы или скидки, акции, collect & get)
                            </span>
                                                </label>

                                            </div>
                                        </div>

                                        <div class="col col--50  ">
                                            <div class="calc-options__group">
                                                <h4 class="h6-wide">
                                                    Для крупного бизнеса и FMCG
                                                </h4>

                                                <label class="checkbox-label">
                            <span class="checkbox">
                                <input type="checkbox" class="js-priceCalc_chkb" value="30%">
                                <span class="checkbox__view"></span>
                            </span>

                            <span class="checkbox-label__txt">
                                Мультибрэндовый проект
                            </span>
                                                </label>

                                                <label class="checkbox-label">
                            <span class="checkbox">
                                <input type="checkbox" class="js-priceCalc_chkb" value="30%">
                                <span class="checkbox__view"></span>
                            </span>

                            <span class="checkbox-label__txt">
                                Сбор данных через offline приложение для персонала или импорт бумажных анкет
                            </span>
                                                </label>

                                                <label class="checkbox-label">
                            <span class="checkbox">
                                <input type="checkbox" class="js-priceCalc_chkb" value="50%">
                                <span class="checkbox__view"></span>
                            </span>

                            <span class="checkbox-label__txt">
                                Система авторизации и аутентификации (многоканальный Single-Sign-On)
                            </span>
                                                </label>

                                            </div>

                                            <div class="calc-options__group">
                                                <h4 class="h6-wide">
                                                    Скидки
                                                </h4>

                                                <label class="checkbox-label">
                            <span class="checkbox">
                                <input type="checkbox" class="js-priceCalc_chkb" value="-15%"
                                       data-final-percent="true">
                                <span class="checkbox__view"></span>
                            </span>

                            <span class="checkbox-label__txt">
                                Неразрывный контракт на год со штрафом в размере скидки: -15%
                            </span>
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>



                        </form>
                    </div>
                    <div class="price-cols__aside-col">

                        <aside class="price-calc-aside">

                            <div class="price-calc-aside__inner price-calc-aside__inner--price">

                                    <div class="p-calc-itog-outside">

                                        <div class="price-calc__main-state">
                                            <div class="p-calc-itog-outside__txt-wr">
                                                <p class="p-calc-itog-outside__title">
                                                    Стоимость
                                                </p>

                                                <p class="p-calc-itog-outside__price">
                                                    <span class="js-priceCalc_itog">75 569</span>
                                                    <span class="iconic iconic--rub"></span>
                                                </p>

                                                <p class="p-calc-itog-outside__after-price">
                                                    в месяц
                                                </p>

                                        <span class="p-calc-itog-outside__small">
                                            без НДС
                                        </span>
                                            </div>
                                        </div>

                                        <div class="price-calc__second-state">
                                            <div class="price-calc__itog-txt-wr">
                                                <p class="price-calc__itog-txt">
                                                    Свяжитесь с нами!
                                                </p>
                                            </div>
                                        </div>

                                        <button type="button"
                                                class="btn btn--default btn--default-green btn--corner btn--lg btn--fs-16">
                                            Отправить запрос
                                        </button>
                                    </div>

                            </div>



                            <div class="price-calc-aside__inner">
                                <a href="#!" class="doc-link">
                                    <span class="doc-link__img">
                                        <span class="iconic iconic--pdf"></span>
                                    </span>
                                    <span class="doc-link__main">
                                        <p class="doc-link__name">Полный список услуг, включенных в цену
                                            подписки</p>
                                        <p class="doc-link__info">
                                            .pdf, 506 KB
                                        </p>
                                    </span>
                                </a>
                            </div>

                        </aside>

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
