<footer class="footer-wr">
    <?php
        if(isset($footerFull) == 'true' ){
        include "base/footerTop.php";
        }
    ?>

    <div class="footer">
        <div class="wrapper">
            <div class="footer__top">
                <div class="footer__subs-wr">

                    <div class="subscribe">

                        <form class="subscribe__main">
                            <input type="email" class="input subscribe__input" placeholder="Ваш e-mail">
                            <button type="submit" class="btn btn--default btn--default-green">Подписаться</button>
                        </form>

                        <p class="subscribe__desc">
                            Cоветы, статьи, обновления, кейсы. Редко, но интересно.
                        </p>
                    </div>

                </div>

                <div class="footer__soc-wr">

                    <a href="#!" target="_blank" class="footer__soc-item">
                        <div class="footer__soc-item-img">
                            <span class="iconic iconic--habr"></span>
                        </div>
                        <span class="footer__soc-item-txt">
                            Блог на хабре
                        </span>
                    </a>
                    <a href="#!" target="_blank" class="footer__soc-item" draggable="false">
                        <div class="footer__soc-item-img">
                            <span class="iconic iconic--fb-round"></span>
                        </div>
                        <span class="footer__soc-item-txt">
                            Мы в Facebook
                        </span>
                    </a>

                </div>

            </div>

            <div class="footer__main">
                <div class="footer__logo-col">
                    <a href="#!" class="footer__logo">
                        <img src="../images/logo-wh.png" alt="">
                    </a>
                </div>
                <div class="footer__nav-cols">
                    <div class="footer__nav-col">
                        <h6 class="h6">
                            Маркетинг
                        </h6>
                        <ul class="footer__nav-list">
                            <li>
                                <a href="#!">
                                    Обучающие презентации
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    Блог
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    О нас пишут
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__nav-col">
                        <h6 class="h6">
                            О компании
                        </h6>
                        <ul class="footer__nav-list">
                            <li>
                                <a href="#!">
                                    История
                                </a>
                            </li>

                            <li>
                                <a href="#!">
                                    Документы
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    Вакансии
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="footer__copyright">
                    <p class="footer__copyright-title">
                        MindBox © 2016
                    </p>
                    <p class="footer__copyright-txt">
                        Mindbox — российская
                        ИТ-компания и бутиковое
                        аналитическое агентство.
                    </p>
                </div>

                <div class="footer__dev">
                    Разработка сайта — <a href="#!" target="_blank">NIKOLAND</a>
                </div>
            </div>
        </div>
    </div>
</footer>