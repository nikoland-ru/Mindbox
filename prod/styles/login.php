<?php
    use \yii\bootstrap\ActiveForm;
    use \yii\helpers\Html;
    use \yii\helpers\Url;
    use \frontend\models\PasswordResetRequestForm;

    /* @var $this yii\web\View */
    /* @var $form yii\bootstrap\ActiveForm */
    /* @var $model \common\models\LoginForm */

    $this->blocks['class_body'] = 'page-buy-steps';
    $this->title = 'Авторизация';
?>

<div class="buy-steps buy-steps--no-steps">
    <h1 class="h1">Авторизация</h1>
    <div class="buy-steps__inner">
        <div class="js-steps steps _step0">

            <div class="js-steps-block steps-block">
                <div class="steps-block__inner">
                    <div class="steps-block__item _active">
                        <?php $form = ActiveForm::begin([ 'options' => ['class' => 'lcabinet-form']]); ?>
                            <div class="steps-block__item-title">
                                Вход в личный кабинет
                            </div>
                            <div class="steps-block__item-input">
                                <?= $form->field($model, 'username')->label(false)->textInput(['class' => 'input input--lg input--ta-cent', 'placeholder' => 'Введите ваш email']); ?>
                            </div>
                            <div class="steps-block__item-input">
                                <?= $form->field($model, 'password')->label(false)->textInput(['class' => 'input input--lg input--ta-cent', 'placeholder' => 'Пароль', 'type' => 'password']); ?>
                            </div>
                            <div class="steps-block__item-btn">
                                <?= Html::submitButton('Авторизоваться', ['class' => 'btn btn--orng btn--xlg']); ?>
                            </div>

                            <p class="steps-block__p">
                                Забыли пароль? <a href="#!" class="link link--black link--dotted js-buy-step-btn" data-step="2">Восстановить</a>
                            </p>

                            <div class="steps-block__item-out">

                                <h4 class="h3">
                                    Войти через присоединенные аккаунты
                                </h4>
                                <div class="steps-block__soc-login">
                                    <a href="<?= Url::toRoute(['/site/login', 'service' => 'vk']) ?>" class="soc-login soc-login--vk">Войти через vk.com</a>
                                    <a href="<?= Url::toRoute(['/site/login', 'service' => 'steam']) ?>" class="soc-login soc-login--fb">Войти через steam</a>
                                </div>

                            </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                    <div class="steps-block__item  ">
                        <?php $form = ActiveForm::begin(['action' => Url::toRoute(['/site/request-password-reset']), 'enableClientValidation' => true, 'enableAjaxValidation' => true, 'validateOnChange' => false, 'validateOnBlur' => false, 'options' => ['class' => 'login-form']]); ?>
                            <div class="steps-block__item-title">
                                Восстановление пароля
                            </div>
                            <div class="steps-block__item-input">
                                <?= $form->field(new PasswordResetRequestForm(), 'email')->label(false)->textInput(['class' => 'input input--lg input--ta-cent', 'placeholder' => 'Введите ваш email']); ?>
                            </div>
                            <div class="steps-block__item-btn">
                                <button class="btn btn--orng btn--xlg" type="submit">Напомнить</button>
                            </div>
                            <p class="steps-block__p">
                                <a href="#!" class="link link--black link--dotted js-buy-step-btn" data-step="1">
                                    Войти</a> в личный кабинет
                            </p>
                        <?php ActiveForm::end(); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
$js = <<< 'SCRIPT'
    jQuery('body').on('ajaxComplete', 'form.login-form', function (event, jqXHR, textStatus) {
        var data = jqXHR.responseJSON;
        if (data['error'] == 1) {
            alert(data['message']);
        } else if (data['error'] == 0) {
            alert(data['message']);
            $(this).trigger('reset')
        }
        return false;
    }).on('beforeSubmit', 'form.login-form', function () {
        return false;
    });
	 jQuery('form.login-form, form.lcabinet-form').on('afterValidate', function (event, jqXHR, textStatus) {
		$W.resize();
	})
SCRIPT;
$this->registerJs($js);
?>
