<?php include "galleryPopup.php";?>
<?php include "casesPopups.php";?>

<div class="side-popup js-side-popup" data-popup-name="demo">

    <div class="side-popup__wr  side-popup__main">
        <form>
            <h4 class="h3-l">
                Запрос на подключение
            </h4>

            <div class="form-row">
                <div class="form-row__content-col ">
                    <div class="form-row__content">
                        <div class="input-cont">
                            <input type="text" class="input" placeholder="Ваше имя">
                        </div>
                    </div>
                </div>
            </div> <!-- form-row -->

            <div class="form-row">
                <div class="form-row__content-col ">
                    <div class="form-row__content">
                        <div class="input-cont">
                            <input type="email" class="input" placeholder="E-mail">
                        </div>
                    </div>
                </div>
            </div> <!-- form-row -->

            <div class="form-row">
                <div class="form-row__content-col ">
                    <div class="form-row__content">
                        <div class="input-cont">
                            <input type="tel" class="input" placeholder="Телефон">
                        </div>
                    </div>
                </div>
            </div> <!-- form-row -->

            <div class="form-row">
                <div class="form-row__content-col ">
                    <div class="form-row__content">
                        <div class="input-cont">
                            <textarea class="input" rows="5" placeholder="Краткая постановка задачи"></textarea>
                        </div>

                        <label class="checkbox-label">
                                <span class="checkbox">
                                    <input type="checkbox">
                                    <span class="checkbox__view"></span>
                                </span>

                                <span class="checkbox-label__txt">
                                    Рассылка: советы, статьи, обновления, кейсы.
                                    Редко, но интересно.
                                </span>
                        </label>

                    </div>
                </div>
            </div> <!-- form-row -->


            <div class="form-row form-row--submit">

                <div class="form-row__content-col">
                    <div class="form-row__content">

                        <button type="submit" class="btn btn--default btn--default-green">
                            Отправить запрос
                        </button>

                    </div>
                </div>
            </div> <!-- form-row--inline -->

        </form>

    </div>

    <div class="side-popup__wr side-popup__bottom">
        <div class="person">
            <span class="person__ava">
                <img src="../images/userfiles/person.jpg" alt="">
            </span>

            <p class="person__quote">
                «Этим запросом я займусь лично»
            </p>

            <div class="person__desc-wr">
                <p class="person__name">
                    Иван Боровиков
                </p>
                <p class="person__post">
                    Управляющий партнер
                </p>
            </div>
        </div>

    </div>

    <!--<span class="iconic iconic--cross2 side-popup__cross js-side-popup_closer"></span>-->

    <div class="popup-cross side-popup__cross js-side-popup_closer">
        <svg viewBox="0 0 30 30" preserveAspectRatio="none">
            <g>
                <polyline  points="27.504,3.486 15.004,15.969 14.034,14.997 26.534,2.514 	"/>
                <polyline  points="15.974,15.017 3.474,27.5 2.504,26.529 15.004,14.046 	"/>
                <polyline  points="3.484,2.506 15.966,15.007 14.995,15.977 2.512,3.476 	"/>
                <polyline  points="15.013,14.038 27.496,26.538 26.525,27.508 14.042,15.008 	"/>
            </g>
        </svg>
    </div>
</div>
