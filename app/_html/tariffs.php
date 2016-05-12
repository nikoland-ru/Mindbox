<!DOCTYPE html>
<html lang="ru">
<?php
$pageName = "Документы - приложение";
include 'base/head.php';?>
<body>

<div class="page page-documents page--gray-bg">
    <div class="page-inner">
        <?php include 'base/header.php';?>

        <div class="page-body">

            <div class="documents-wr">
                <div class="wrapper">
                    <div class="wrapper-inner">
                    
                        <div class="documents">

                            <div class="documents__right">
                                <div class="sidebar">
                                    <div class="sidebar-mob">
                                        <form>
                                            <div class="selector js-selector">
                                                <span class="selector__option-current js-selector-current">
                                                     Договор
                                                </span>
                                                <ul class="selector__options-list js-selector-options">
                                                    <li class="selector__option js-selector-option">
                                                        Договор
                                                    </li>
                                                    <li class="selector__option js-selector-option">
                                                        Приложение
                                                    </li>
                                                    <li class="selector__option js-selector-option">
                                                        Реквизиты 
                                                    </li>
                                                    <li class="selector__option js-selector-option">
                                                        SLA
                                                    </li>
                                                    <li class="selector__option js-selector-option">
                                                        Политика
                                                    </li>
                                                    <li class="selector__option js-selector-option">
                                                        Публичная оферта
                                                    </li>
                                                    <li class="selector__option js-selector-option">
                                                        Стандартная интеграция
                                                    </li>
                                                </ul>
                                                <input type="hidden" value="" name="">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="sidebar-menu">
                                        <div class="sidebar-menu__title">
                                            <h3 class="h3-l">Условия оказания услуг</h3>
                                        </div>
                                        <ul class="sidebar-nav">
                                            <li class="sidebar-nav__item active">
                                                <a class="sidebar-nav__link" href="#!">Договор</a>
                                            </li>
                                            <li class="sidebar-nav__item">
                                                <a class="sidebar-nav__link" href="#!">Приложение</a>
                                            </li>
                                            <li class="sidebar-nav__item">
                                                <a class="sidebar-nav__link" href="#!">Реквизиты</a>
                                            </li>
                                            <li class="sidebar-nav__item">
                                                <a class="sidebar-nav__link" href="#!">SLA</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sidebar-menu">
                                        <div class="sidebar-menu__title">
                                            <h3 class="h3-l">Персональные данные</h3>
                                        </div>
                                        <ul class="sidebar-nav">
                                            <li class="sidebar-nav__item">
                                                <a class="sidebar-nav__link" href="#!">Политика</a>
                                            </li>
                                            <li class="sidebar-nav__item">
                                                <a class="sidebar-nav__link" href="#!">Публичная оферта</a>
                                            </li>
                                            <li class="sidebar-nav__item">
                                                <a class="sidebar-nav__link" href="#!">Стандартная интеграция</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="documents__left">
                                <div class="documents__inner typography">
                                    <h1 class="h1">Тарифы</h1>
                                    <h2 class="h2-l">Базовый тариф:</h2>

                                    <div class="table-default-wr">
                                        <table class="table-default table-default--fix">
                                            <colgroup>
                                                <col width="40%">
                                                <col width="30%">
                                                <col width="30%">
                                            </colgroup>
                                            <tr>
                                                <th>Кол-во клиентов Заказчика в&nbsp;базе данных на Сервисе</th>
                                                <th>Стоимость подписки (базовый тариф), рублей без НДС</th>
                                                <th>Стоимость разовой проверки БД сервисом mailvalidator.ru, рублей без НДС</th>
                                            </tr>
                                            <tr>
                                                <td>100 000</td>
                                                <td>71 499</td>
                                                <td>12 000</td>
                                            </tr>
                                            <tr>
                                                <td>150 000</td>
                                                <td>79 852</td>
                                                <td>18 000</td>
                                            </tr>
                                            <tr>
                                                <td>200 000</td>
                                                <td>88 035</td>
                                                <td>24 000</td>
                                            </tr>
                                            <tr>
                                                <td>250 000</td>
                                                <td>96 110</td>
                                                <td>30 000</td>
                                            </tr>
                                            <tr>
                                                <td>300 000</td>
                                                <td>104 111</td>
                                                <td>36 000</td>
                                            </tr>
                                            <tr>
                                                <td>350 000</td>
                                                <td>112 055</td>
                                                <td>42 000</td>
                                            </tr>
                                            <tr>
                                                <td>400 000</td>
                                                <td>119 955</td>
                                                <td>48 000</td>
                                            </tr>
                                            <tr>
                                                <td>450 000</td>
                                                <td>127 821</td>
                                                <td>54 000</td>
                                            </tr>
                                            <tr>
                                                <td>500 000</td>
                                                <td>135 659</td>
                                                <td>30 000</td>
                                            </tr>
                                            <tr>
                                                <td>600 000</td>
                                                <td>151 245</td>
                                                <td>36 000</td>
                                            </tr>
                                            <tr>
                                                <td>700 000</td>
                                                <td>166 766</td>
                                                <td>42 000</td>
                                            </tr>
                                            <tr>
                                                <td>800 000</td>
                                                <td>182 236</td>
                                                <td>48 000</td>
                                            </tr>
                                            <tr>
                                                <td>900 000</td>
                                                <td>197 666</td>
                                                <td>54 000</td>
                                            </tr>
                                            <tr>
                                                <td>1 000 000</td>
                                                <td>213 061</td>
                                                <td>60 000</td>
                                            </tr>
                                            <tr>
                                                <td>1 200 000</td>
                                                <td>243 749</td>
                                                <td>72 000</td>
                                            </tr>
                                            <tr>
                                                <td>1 400 000</td>
                                                <td>274 360</td>
                                                <td>84 000</td>
                                            </tr>
                                            <tr>
                                                <td>1 600 000</td>
                                                <td>304 912</td>
                                                <td>96 000</td>
                                            </tr>
                                            <tr>
                                                <td>1 800 000</td>
                                                <td>335 415</td>
                                                <td>108 000</td>
                                            </tr>
                                            <tr>
                                                <td>2 000 000</td>
                                                <td>365 879</td>
                                                <td>120 000</td>
                                            </tr>
                                            <tr>
                                                <td>2 400 000</td>
                                                <td>426 686</td>
                                                <td>144 000</td>
                                            </tr>
                                            <tr>
                                                <td>2 800 000</td>
                                                <td>487 403</td>
                                                <td>168 000</td>
                                            </tr>
                                            <tr>
                                                <td>3 200 000</td>
                                                <td>548 049</td>
                                                <td>192 000</td>
                                            </tr>
                                            <tr>
                                                <td>3 600 000</td>
                                                <td>608 640</td>
                                                <td>216 000</td>
                                            </tr>
                                            <tr>
                                                <td>4 000 000</td>
                                                <td>669 184</td>
                                                <td>240 000</td>
                                            </tr>
                                            <tr>
                                                <td>4 500 000</td>
                                                <td>744 806</td>
                                                <td>270 000</td>
                                            </tr>
                                            <tr>
                                                <td>5 000 000</td>
                                                <td>820 379</td>
                                                <td>300 000</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <h2 class="h2-l">Тарифные опции:</h2>
                                    <div class="table-default-wr">
                                        <table class="table-default table-default--fix">
                                            <colgroup>
                                                <col width="70%">
                                                <col width="30%">
                                            </colgroup>
                                            <tr>
                                                <th>Тарифная опция</th>
                                                <th>% увеличения базового тарифа</th>
                                            </tr>
                                            <tr>
                                                <td>SMS рассылки (шлюз Mindbox или интеграция по протоколу Mindbox)</td>
                                                <td>10%</td>
                                            </tr>
                                            <tr>
                                                <td>Обработка входящих на короткий номер SMS (в зависимости от типа номера*)</td>
                                                <td>15% + стоимость номера</td>
                                            </tr>
                                            <tr>
                                                <td>Интеграция с мобильным приложением, push-рассылки</td>
                                                <td>15%</td>
                                            </tr>
                                            <tr>
                                                <td>Ретаргетинг в триггерных цепочках и операциях</td>
                                                <td>15%</td>
                                            </tr>
                                            <tr>
                                                <td>Персонализация сайта в реальном времени</td>
                                                <td>10%</td>
                                            </tr>
                                            <tr>
                                                <td>Интеграция с колл-центром (в т.ч. операторы поддержки и обратной связи)</td>
                                                <td>20%</td>
                                            </tr>
                                            <tr>
                                                <td>Программа лояльности (процессинг, баллы или скидки, акции, collect&get)</td>
                                                <td>50%</td>
                                            </tr>
                                            <tr>
                                                <td>Мультибрендовый проект</td>
                                                <td>30%</td>
                                            </tr>
                                            <tr>
                                                <td>Сбор данных через offline приложение для персонала или импорт бумажных анкет</td>
                                                <td>30%</td>
                                            </tr>
                                            <tr>
                                                <td>Система авторизации и аутентификации (многоканальный Single-Sign-On)</td>
                                                <td>50%</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">* Стоимость типа номера:</td>
                                            </tr>
                                            <tr>
                                                <td>Разделяемый номер</td>
                                                <td>15 000 рублей, без НДС</td>
                                            </tr>
                                            <tr>
                                                <td>Эксклюзивный номер</td>
                                                <td>60 000 рублей, без НДС</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <h2 class="h2-l">SMS-трафик:</h2>
                                    <div class="table-default-wr">
                                        <table class="table-default table-default--fix">
                                            <colgroup>
                                                <col width="70%">
                                                <col width="30%">
                                            </colgroup>
                                            <tr>
                                                <th>Наименование услуги</th>
                                                <th>Стоимость, рублей с НДС</th>
                                            </tr>
                                            <tr>
                                                <td>SMS-трафик</td>
                                                <td>По тарифам операторов сотовой связи</td>
                                            </tr>
                                            <tr>
                                                <td>Услуги по подключению имени отправителя оператором сотовой связи</td>
                                                <td>По тарифам операторов сотовой связи</td>
                                            </tr>
                                            <tr>
                                                <td>Абонентская плата за предоставленные оператором сотовой связи имена отправителя</td>
                                                <td>По тарифам операторов сотовой связи</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
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
