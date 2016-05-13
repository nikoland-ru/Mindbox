<?php

use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use common\models\Product;
use common\models\RandomType;
use common\models\Purchase;
use yii\widgets\ActiveForm;
use yii\bootstrap\Html;

/** @var $this \yii\web\View **/
/** @var $productModel \common\models\Product  * */
/** @var $purchaseModel \common\models\PurchaseForm * */
/** @var $userModel \common\models\User * */

$this->title = 'Покупка';

?>
<div class="buy-steps">
    <?php if ($purchaseModel->type == 'product') { ?>
        <h1 class="h1">Покупка игры</h1>
    <?php } elseif ($purchaseModel->type == 'random') { ?>
        <h1 class="h1">Покупка случайной игры</h1>
    <?php } ?>
    <div class="buy-steps__inner">
        <div class="js-steps steps _step0">
            <div class="js-steps-line steps-line">
                <div class="steps-line__row js-steps-row">
                    <div class="steps-line__item">
                        <div class="steps-line__item-number">
                            <span>1</span>
                        </div>
                        <div class="steps-line__item-title">Доставка</div>
                    </div>
                    <div class="steps-line__item">
                        <div class="steps-line__item-number">
                            <span>2</span>
                        </div>
                        <div class="steps-line__item-title">Оплата</div>
                    </div>
                    <div class="steps-line__item">
                        <div class="steps-line__item-number">
                            <span>3</span>
                        </div>
                        <div class="steps-line__item-title">Загрузка игры</div>
                    </div>
                </div>
                <div class="steps-line__row-clone js-steps-row-clone">
                    <div class="steps-line__row">
                        <div class="steps-line__item steps-line__item--1">
                            <div class="steps-line__item-number s-active">
                                <span>1</span>
                            </div>
                        </div>
                        <div class="steps-line__item steps-line__item--2">
                            <div class="steps-line__item-number s-active">
                                <span>2</span>
                            </div>
                        </div>
                        <div class="steps-line__item steps-line__item--3">
                            <div class="steps-line__item-number s-active">
                                <span>3</span>
                            </div>
                        </div>
                    </div>
                    <div class="steps-line__progress p-active"></div>
                </div>
                <div class="steps-line__progress"></div>
            </div>
            <div class="js-steps-block steps-block" style="display:block; height: 1200px">
                <div class="steps-block__inner">
                    <div class="steps-block__item _active">
                        <?php $form = ActiveForm::begin([
                            'action' => '/buy/process',
                            'options' => ['id' => "steps-block1"],
                        ]); ?>
                            <div class="steps-block__item-title">
                                Адрес доставки ключа
                            </div>
                            <div class="steps-block__item-input">
                                <?= $form->field($purchaseModel, 'email')->label(false)->textInput(['class' => 'input input--lg input--ta-cent', 'placeholder' => "Введите ваш email"]); ?>
                            </div>
                            <div class="steps-block__item-btn">
                                <?= Html::submitButton('Продолжить покупку', ['class' => 'btn btn--orng btn--xlg']); ?>
                            </div>
                            <?php if (Yii::$app->user->isGuest): ?>
                                <div class="steps-block__item-out">
                                    <p>Если у вас есть бонусы, <a href="<?= Url::toRoute(['/site/login']); ?>" class="link link--black link--dotted">авторизуйтесь</a>, чтобы оплатить ими покупку</p>
                                </div>
                            <?php endif; ?>

                            <?= Html::activeHiddenInput($purchaseModel, 'payMethod') ?>
                            <?= Html::activeHiddenInput($purchaseModel, 'useBonus') ?>
                            <?= Html::activeHiddenInput($purchaseModel, 'productId') ?>
                            <?= Html::activeHiddenInput($purchaseModel, 'randomId') ?>
                            <?= Html::activeHiddenInput($purchaseModel, 'type') ?>

                        <?php ActiveForm::end(); ?>
                    </div>
                    <div class="steps-block__item">
                        <div class="steps-block__item-row">
                            <div class="steps-block__item-col">
                                <?php if ($productModel !== null) { ?>
                                    <a href="<?= $productModel->getUrl(); ?>" class="search-prod">
                                        <div class="search-prod__img-wr">
                                            <div class="search-prod__img" style="background-image: url('<?= $productModel->getImage('image', Product::size50_72); ?>');">
                                            </div>
                                        </div>

                                        <div class="search-prod__main">
                                            <h4 class="search-prod__name">
                                                <?= $productModel->title; ?>
                                            </h4>

                                            <p class="search-prod__genre">
                                                <?php
                                                    $genres = ArrayHelper::map($productModel->genreCategories, 'id', function ($model) {
                                                        /** @var $model \common\models\ProductCategory * */
                                                        return $model->category->title;
                                                    });
                                                ?>
                                                <?php if ($genres): ?>
                                                    ЖАНР: <span><?= implode(', ', $genres); ?></span>
                                                <?php endif; ?>
                                            </p>

                                            <span class="price price--ssm"><?= $productModel->getFinalPrice(); ?> <span class="rub">Р</span></span>
                                        </div>
                                    </a>
                                <?php } elseif ($randomModel !== null) { ?>
                                    <a href="<?= $randomModel->getUrl(); ?>" class="search-prod">
                                        <div class="search-prod__img-wr">
                                            <div class="search-prod__img" style="background-image: url('<?= $randomModel->getImage('image'); ?>');">
                                            </div>
                                        </div>

                                        <div class="search-prod__main">
                                            <h4 class="search-prod__name">
                                                <?= $randomModel->name; ?>
                                            </h4>
                                            <span class="price price--ssm"><?= (int) $randomModel->price ?> <span class="rub">Р</span></span>
                                        </div>
                                    </a>
                                <?php } ?>
                            </div>
                            <?php if (Yii::$app->user->isGuest === false): ?>
                                <div class="steps-block__item-col">
                                    <p class="steps-block__item-bonus">Бонусный счет: <b>
                                        <?= Yii::$app->i18n->messageFormatter->format(
                                            '{n, plural, one{# балл} few{# баллов} many{# баллов} other{# баллов}}',
                                            ['n' => $userModel->point->point_count],
                                            Yii::$app->language
                                        ); ?>
                                    </b></p>
                                    <a href="#" class="btn btn--xs btn--orngL" data-action="use-bonus">Использовать для оплаты</a>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="steps-block__item-title steps-block__item-title--left">
                            Выбор способа оплаты
                        </div>
                        <div class="payment-types js-payment-types">

                            <div class="payment-types__item _checked" data-type="pay-type" data-value="<?= Purchase::PAY_STORE ?>">
                                <div class="payment-types__item-img">
                                    <span class="icon icon--pay-gabe"></span>
                                </div>
                                <h3 class="h5">Со счета Gabestore</h3>
                                <div class="payment-types__item-text">Моментальная покупка игр</div>
                            </div>

                            <div class="payment-types__item" data-type="pay-type" data-value="<?= Purchase::PAY_CARD ?>">
                                <div class="payment-types__item-img">
                                    <span class="icon icon--pay-card"></span>
                                </div>
                                <h3 class="h5">Банковские карты</h3>
                                <div class="payment-types__item-text">Visa, Mastercard, Maestro</div>
                            </div>

                            <div class="payment-types__item" data-type="pay-type" data-value="<?= Purchase::PAY_CASH ?>">
                                <div class="payment-types__item-img">
                                    <span class="icon icon--pay-money"></span>
                                </div>
                                <h3 class="h5">Наличные</h3>
                                <div class="payment-types__item-text">Более 250 тысяч пунктов оплаты</div>
                            </div>

                            <div class="payment-types__item" data-type="pay-type" data-value="<?= Purchase::PAY_YANDEX ?>">
                                <div class="payment-types__item-img">
                                    <span class="icon icon--pay-emoney"></span>
                                </div>
                                <h3 class="h5">Электронные деньги</h3>
                                <div class="payment-types__item-text">Яндекс.Деньги</div>
                            </div>

                            <div class="payment-types__item" data-type="pay-type" data-value="<?= Purchase::PAY_WEBMONEY ?>">
                                <div class="payment-types__item-img">
                                    <span class="icon icon--pay-emoney"></span>
                                </div>
                                <h3 class="h5">Электронные деньги</h3>
                                <div class="payment-types__item-text">WebMoney</div>
                            </div>

                            <div class="payment-types__item" data-type="pay-type" data-value="<?= Purchase::PAY_QIWI ?>">
                                <div class="payment-types__item-img">
                                    <span class="icon icon--pay-emoney"></span>
                                </div>
                                <h3 class="h5">Электронные деньги</h3>
                                <div class="payment-types__item-text">Qiwi</div>
                            </div>

                            <div class="payment-types__item" data-type="pay-type" data-value="<?= Purchase::PAY_MC ?>">
                                <div class="payment-types__item-img">
                                    <span class="icon icon--pay-phone"></span>
                                </div>
                                <h3 class="h5">Баланс телефона</h3>
                                <div class="payment-types__item-text">Билайн, Мегафон, МТС, Теле2</div>
                            </div>

                            <div class="payment-types__item" data-type="pay-type" data-value="<?= Purchase::PAY_ALFA_CLICK ?>">
                                <div class="payment-types__item-img">
                                    <span class="icon icon--pay-ebank"></span>
                                </div>
                                <h3 class="h5">Интернет банкинг</h3>
                                <div class="payment-types__item-text">Сбербанк Онлайн, Альфа-клик, Промсвязьбанк</div>
                            </div>

                        </div>
                        <div class="steps-block__item-btn">
                            <a class="btn btn--orng btn--xlg" href="#" data-action="pay">Перейти к оплате</a>
                        </div>
                    </div>
                    <div class="steps-block__item">
                        <div class="steps-block__item-title">
                            Оплата произведена успешно
                        </div>
                        <div class="steps-block__item-btn">
                            <a class="btn btn--orng btn--lg" href="#!">Загрузить игру</a>
                        </div>
                        <div class="steps-block__item-out">
                            <p>Игра отправлена на указанную вами почту. </p>
                            <p>Вы всегда сможете скачать игру <a href="<?= Url::toRoute(['/profile/index']); ?>" class="link link--black link--dotted">Личном кабинете</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$js = <<< 'SCRIPT'
    jQuery('body').on('submit', 'form#steps-block1', function (event, jqXHR, textStatus) {
        var inputs = $(this).find('input'),
        error = false;
        $.each(inputs, function(index, value) {
            if ($(value).parents('.form-group').hasClass('has-error')) {
                error = true;
            }
        });
        return !error;
    });
    jQuery('[data-action="pay"]').on('click', function() {
        jQuery('form#steps-block1').unbind('submit').submit();
        return false;
    });

    jQuery('[data-type="pay-type"]').on('click', function() {
        var val = $(this).attr('data-value');
        $('#purchaseform-paymethod').val(val);
    });

    jQuery('[data-action="use-bonus"]').on('click', function() {
        $('#purchaseform-usebonus').val('1');
    });


SCRIPT;
$this->registerJs($js);
?>
