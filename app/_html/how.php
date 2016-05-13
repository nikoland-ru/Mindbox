<!DOCTYPE html>
<html lang="ru">
<?php
$pageName = "Как мы работаем";
include 'base/head.php';?>
<body>

<div class="page page-product">
    <div class="page-inner">
        <?php include 'base/header.php';?>

        <div class="page-body">

            <section class="promo-txt promo-txt--how js-anim-elem">
                <div class="wrapper">

                    <div class="promo-txt__main-col">
                        <h1 class="h1-l h1-l--corner">Как мы работаем</h1>

                        <h2 class="h2-l promo-txt__subtitle">
                            Agile: без формальных ТЗ и многомесячных внедрений.
                        </h2>

                        <div class="promo-txt__main-txt">
                            <div class="cols cols--ss">
                                <div class="col col--50">
                                    <h3 class="h2-l">
                                        С вас — идеи
                                    </h3>

                                    <ul class="ul">
                                        <li>
                                            <b>Маркетолог</b> задает стратегию и приоритеты и создает контент
                                            предложений
                                        </li>
                                        <li>
                                            <b>Контакт по интеграции</b> — разовые интеграции (вот API) и сырые данные в
                                            удобном вам виде
                                        </li>

                                    </ul>
                                </div>
                                <div class="col col--50">
                                    <h3 class="h2-l">
                                        С нас — работа
                                    </h3>

                                    <ul class="ul">
                                        <li>
                                            <b>Технический инструмент</b> задает управление кампаниями и аналитику
                                        </li>
                                        <li>
                                            <b>Умные руки</b> — Маркетолог додумает кампании и гипотезы, Менеджер
                                            настроит нужные интеграции с IT и запустит кампании. Аналитик —
                                            проанализирует результаты и предложит улучшения
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <span class="markered">
                            Кампании запускаются с первых дней
                        </span>

                    </div>

                    <img src="../images/ppl-handshake.png" alt="" draggable="false" class="promo-txt__bg-img">

                </div>
            </section>

            <section class="meeting js-anim-elem">
                <div class="wrapper">
                    <h3 class="h2-l">
                        Первым делом организуем встречу
                    </h3>
                    <p class="meeting__subtitle">
                        Определим цели проекта в цифрах, какие кампании будем<br>
                        запускать, порядок интеграции и сроки работ, обсудим нестандартные мехники работы.
                    </p>

                    <button type="button" class="btn btn--default btn--default-green btn--corner btn--lg">
                        Организовать встречу
                    </button>
                </div>
            </section>


            <div class="plan-gr">

                <div class="plan-week js-anim-elem">
                    <div class="wrapper">
                        <h4 class="h3-l letter-hl-str">
                            <span class="letter-hl-str__lt">В</span> первую неделю после встречи
                        </h4>
                        <p class="h2-l">
                            Наведем порядок с ручными рассылками и базами контактов
                        </p>

                    </div>

                    <div class="wrapper plan-week-sl js-anim-elem">
                        <div class="plan-week-sl__slider js-plan-week-sl">
                            <div class="plan-week-sl__slide">
                                <div class="plan-week-sl__slide-inner">

                                    <p class="plan-week-sl__desc js-plan-week-sl_txt">
                                        Загрузим, почистим и объединим контакты из всех баз данных: из интернет-магазина, оффлайн БД
                                        и других инструментов.
                                    </p>

                                    <div class="demo-img demo-img--sm">
                                        <img src="../images/userfiles/demo-customize1.jpg" alt="">
                                        <a href="../images/userfiles/demo-customize1.jpg"
                                           class="gall-link js-gall"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="plan-week-sl__slide">
                                <div class="plan-week-sl__slide-inner">

                                    <p class="plan-week-sl__desc js-plan-week-sl_txt">
                                        Настроим сбор новых контактов в реальном времени через JS и REST API.
                                    </p>

                                    <div class="demo-img demo-img--sm">
                                        <img src="../images/userfiles/demo-customize2.jpg" alt="">
                                        <a href="../images/userfiles/demo-customize2.jpg"
                                           class="gall-link js-gall"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="plan-week-sl__slide">
                                <div class="plan-week-sl__slide-inner">

                                    <p class="plan-week-sl__desc js-plan-week-sl_txt">
                                        Наладим централизованную точку отписки и подписки.
                                    </p>

                                    <div class="demo-img demo-img--sm">
                                        <img src="../images/userfiles/demo-customize3.jpg" alt="">
                                        <a href="../images/userfiles/demo-customize3.jpg"
                                           class="gall-link js-gall"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="plan-week-sl__slide">
                                <div class="plan-week-sl__slide-inner">

                                    <p class="plan-week-sl__desc js-plan-week-sl_txt">
                                        Перенесем SMS-, e-mail-, push-рассылки, которые делаются «вручную» в платформу.
                                    </p>

                                    <div class="demo-img demo-img--sm">
                                        <img src="../images/userfiles/demo-customize4.jpg" alt="">
                                        <a href="../images/userfiles/demo-customize4.jpg"
                                           class="gall-link js-gall"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="plan-result">
                    <div class="wrapper">
                        <div class="plan-result__inner">
                            <div class="plan-result__txt-col">
                                <p class="h2-l">
                                    Результат
                                </p>
                                <div class="plan-result__txt">
                                    <p>
                                        Улучшение доставляемости e-mail писем, рост выручки
                                        с e-mail-канала, снижение числа жалоб от покупателей.
                                        Отчеты по подписчикам: каналы-источники, мониторинг отписки.
                                    </p>
                                </div>
                            </div>

                            <div class="plan-result__company-col">
                                <div class="plan-result__company">
                                    <div class="plan-result__comp-logo-wr">
                                        <img src="../images/userfiles/logo10.png" alt="">
                                    </div>
                                    <div class="plan-result__comp-txt">
                                        <p class="plan-result__comp-name">
                                            HOFF
                                        </p>
                                        <a href="//www.slideshare.net/slideshow/embed_code/key/4cIWBR2Y1JxJJC" class="link link--green link--dotted js-video-popup">
                                            Посмотреть кейс
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="plan-gr">

                <div class="plan-week js-anim-elem">
                    <div class="wrapper">
                        <h4 class="h3-l letter-hl-str">
                            <span class="letter-hl-str__lt letter-hl-str__lt--yel">На</span> второй неделе
                        </h4>
                        <p class="h2-l">
                            Запустим автоматизированные рассылки
                        </p>

                    </div>

                    <div class="wrapper plan-week-sl js-anim-elem">
                        <div class="plan-week-sl__slider js-plan-week-sl">
                            <div class="plan-week-sl__slide">
                                <div class="plan-week-sl__slide-inner">

                                    <p class="plan-week-sl__desc js-plan-week-sl_txt">
                                        Загрузим заказы и товарную номенклатуру.
                                    </p>

                                    <div class="demo-img demo-img--sm">
                                        <img src="../images/userfiles/plan-auto1.jpg" alt="">
                                        <a href="../images/userfiles/plan-auto1.jpg"
                                           class="gall-link js-gall"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="plan-week-sl__slide">
                                <div class="plan-week-sl__slide-inner">

                                    <p class="plan-week-sl__desc js-plan-week-sl_txt">
                                        Интегрируемся через JS и REST API, импорт YML или другим способом.
                                    </p>

                                    <div class="demo-img demo-img--sm">
                                        <img src="../images/userfiles/plan-auto2.jpg" alt="">
                                        <a href="../images/userfiles/plan-auto2.jpg"
                                           class="gall-link js-gall"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="plan-week-sl__slide">
                                <div class="plan-week-sl__slide-inner">

                                    <p class="plan-week-sl__desc js-plan-week-sl_txt">
                                        Запустим цепочки триггеров, объединяющие e-mail, SMS, push'и ретаргетинг.
                                    </p>

                                    <div class="demo-img demo-img--sm">
                                        <img src="../images/userfiles/plan-auto3.jpg" alt="">
                                        <a href="../images/userfiles/plan-auto3.jpg"
                                           class="gall-link js-gall"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="plan-week-sl__slide">
                                <div class="plan-week-sl__slide-inner">

                                    <p class="plan-week-sl__desc js-plan-week-sl_txt">
                                        Настроим А/Б тесты и контрольные группы.
                                    </p>

                                    <div class="demo-img demo-img--sm">
                                        <img src="../images/userfiles/plan-auto4.jpg" alt="">
                                        <a href="../images/userfiles/plan-auto4.jpg"
                                           class="gall-link js-gall"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="plan-result">
                    <div class="wrapper">
                        <div class="plan-result__inner">
                            <div class="plan-result__txt-col">
                                <p class="h2-l">
                                    Результат
                                </p>
                                <div class="plan-result__txt">
                                    <p>
                                        Улучшение доставляемости e-mail писем, рост выручки
                                        с e-mail-канала, снижение числа жалоб от покупателей.
                                        Отчеты по подписчикам: каналы-источники, мониторинг отписки.
                                    </p>
                                </div>
                            </div>

                            <div class="plan-result__company-col">
                                <div class="plan-result__company">
                                    <div class="plan-result__comp-logo-wr">
                                        <img src="../images/userfiles/logo11.png" alt="">
                                    </div>
                                    <div class="plan-result__comp-txt">
                                        <p class="plan-result__comp-name">
                                            Danone
                                        </p>
                                        <a href="../images/userfiles/case2.jpg" data-width="801" data-height="472"
                                           class="link link--green link--dotted js-gall">
                                            Посмотреть кейс
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="plan-gr">

                <div class="plan-week js-anim-elem">
                    <div class="wrapper">
                        <h4 class="h3-l letter-hl-str">
                            <span class="letter-hl-str__lt letter-hl-str__lt--orng">За</span> третью неделю
                        </h4>
                        <p class="h2-l">
                            Персонализируем сайт и другие точки контакта
                        </p>

                    </div>

                    <div class="wrapper plan-week-sl js-anim-elem">
                        <div class="plan-week-sl__slider js-plan-week-sl">
                            <div class="plan-week-sl__slide">
                                <div class="plan-week-sl__slide-inner">

                                    <p class="plan-week-sl__desc js-plan-week-sl_txt">
                                        Настроенные сегменты и другие данные покупателя доступны для персонализации сайта через JS и REST API в реальном времени.
                                    </p>

                                    <div class="demo-img demo-img--sm">
                                        <img src="../images/userfiles/plan-person1.jpg" alt="">
                                        <a href="../images/userfiles/plan-person1.jpg"
                                           class="gall-link js-gall"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="plan-week-sl__slide">
                                <div class="plan-week-sl__slide-inner">

                                    <p class="plan-week-sl__desc js-plan-week-sl_txt">
                                        Возможность подключения касс, оффлайн и онлайн планшетов и мобильных приложений для вывода персональных предложений и сообщений покупателю.
                                    </p>

                                    <div class="demo-img demo-img--sm">
                                        <img src="../images/userfiles/plan-person2.jpg" alt="">
                                        <a href="../images/userfiles/plan-person2.jpg"
                                           class="gall-link js-gall"></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="plan-result">
                    <div class="wrapper">
                        <div class="plan-result__inner">
                            <div class="plan-result__txt-col">
                                <p class="h2-l">
                                    Результат
                                </p>
                                <div class="plan-result__txt">
                                    <p>
                                        Персональные предложения, оптимизация выдачи товаров, цены,
                                        начисляемых баллов, триггерные цепочки в зависимости
                                        от предложений и поведения покупателей.
                                    </p>
                                </div>
                            </div>

                            <div class="plan-result__company-col">
                                <div class="plan-result__company">
                                    <div class="plan-result__comp-logo-wr">
                                        <img src="../images/userfiles/logo12.png" alt="">
                                    </div>
                                    <div class="plan-result__comp-txt">
                                        <p class="plan-result__comp-name">
                                            Простоквашино
                                        </p>
                                        <a href="../images/userfiles/case4.jpg" data-width="801" data-height="446"
                                           class="link link--green link--dotted js-gall">
                                            Посмотреть кейс
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="plan-gr">

                <div class="plan-week js-anim-elem">
                    <div class="wrapper">
                        <h4 class="h3-l letter-hl-str">
                            <span class="letter-hl-str__lt letter-hl-str__lt--pink">В</span> конце месяца после встречи
                        </h4>
                        <p class="h2-l">
                            Построим прибыльную программу лояльности
                        </p>

                    </div>

                    <div class="wrapper plan-week-sl js-anim-elem">
                        <div class="plan-week-sl__slider js-plan-week-sl">
                            <div class="plan-week-sl__slide">
                                <div class="plan-week-sl__slide-inner">

                                    <p class="plan-week-sl__desc js-plan-week-sl_txt">
                                        Сквозное узнавание покупателя во всех каналах (SSO).
                                    </p>

                                    <div class="demo-img demo-img--sm">
                                        <img src="../images/userfiles/plan-loyal1.jpg" alt="">
                                        <a href="../images/userfiles/plan-loyal1.jpg"
                                           class="gall-link js-gall"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="plan-week-sl__slide">
                                <div class="plan-week-sl__slide-inner">

                                    <p class="plan-week-sl__desc js-plan-week-sl_txt">
                                        Авторизация на кассах картой или по мобильному телефону.
                                    </p>

                                    <div class="demo-img demo-img--sm">
                                        <img src="../images/userfiles/plan-loyal2.jpg" alt="">
                                        <a href="../images/userfiles/plan-loyal2.jpg"
                                           class="gall-link js-gall"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="plan-week-sl__slide">
                                <div class="plan-week-sl__slide-inner">

                                    <p class="plan-week-sl__desc js-plan-week-sl_txt">
                                        Кроссканальная бонусная или скидочная механика.
                                    </p>

                                    <div class="demo-img demo-img--sm">
                                        <img src="../images/userfiles/plan-loyal3.jpg" alt="">
                                        <a href="../images/userfiles/plan-loyal3.jpg"
                                           class="gall-link js-gall"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="plan-week-sl__slide">
                                <div class="plan-week-sl__slide-inner">

                                    <p class="plan-week-sl__desc js-plan-week-sl_txt">
                                        Измеримые персональные предложения и акции.
                                    </p>

                                    <div class="demo-img demo-img--sm">
                                        <img src="../images/userfiles/plan-loyal4.jpg" alt="">
                                        <a href="../images/userfiles/plan-loyal4.jpg"
                                           class="gall-link js-gall"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="plan-result">
                    <div class="wrapper">
                        <div class="plan-result__inner">
                            <div class="plan-result__txt-col">
                                <p class="h2-l">
                                    Результат
                                </p>
                                <div class="plan-result__txt">
                                    <p>
                                        Рост выручки, прибыльности и лояльности покупателей.
                                        Понятная достоверная автоматизированная отчетность,
                                        возможность быстро проверять новые маркетинговые
                                        идеи без ограничений со стороны IT.
                                    </p>
                                </div>
                            </div>

                            <div class="plan-result__company-col">
                                <div class="plan-result__company">
                                    <div class="plan-result__comp-logo-wr">
                                        <img src="../images/userfiles/logo13.png" alt="">
                                    </div>
                                    <div class="plan-result__comp-txt">
                                        <p class="plan-result__comp-name">
                                            Black Star
                                        </p>
                                        <a href="../images/userfiles/case3.jpg" data-width="" data-height=""
                                           class="link link--green link--dotted js-gall">
                                            Посмотреть кейс
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <section class="itogs">
                    <div class="wrapper">
                        <h3 class="h2-wide fadeInUp js-anim-elem">
                            Итог
                        </h3>
                        <p class="itogs__subtitle  fadeInUp js-anim-elem">
                            Рост бизнеса и маркетинговых показателей
                        </p>

                        <div class="itogs__list js-anim-elem">
                            <div class="itogs__li">
                                <div class="itogs__li-img-wr">
                                    <img src="../images/itog1.jpg" alt="">
                                </div>
                                <div class="itogs__li-txt-wr">
                                <span class="numb numb--lg">
                                    +18%
                                </span>
                                    <p class="itogs__li-desc">
                                        Маржинальность продаж
                                    </p>
                                </div>
                            </div>

                            <div class="itogs__li">
                                <div class="itogs__li-img-wr">
                                    <img src="../images/itog2.jpg" alt="">
                                </div>
                                <div class="itogs__li-txt-wr">
                                <span class="numb numb--lg">
                                    +31%
                                </span>
                                    <p class="itogs__li-desc">
                                        Средний чек
                                    </p>
                                </div>
                            </div>

                            <div class="itogs__li">
                                <div class="itogs__li-img-wr">
                                    <img src="../images/itog3.jpg" alt="">
                                </div>
                                <div class="itogs__li-txt-wr">
                                <span class="numb numb--lg">
                                    +246%
                                </span>
                                    <p class="itogs__li-desc">
                                        Выручка с e-mail-канала
                                    </p>
                                </div>
                            </div>

                            <div class="itogs__li">
                                <div class="itogs__li-img-wr">
                                    <img src="../images/itog4.jpg" alt="">
                                </div>
                                <div class="itogs__li-txt-wr">
                                <span class="numb numb--lg">
                                    +190%
                                </span>
                                    <p class="itogs__li-desc">
                                        Конверсии с SMS-рассылки
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>


            <?php include "components/we-answer.php";?>

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
