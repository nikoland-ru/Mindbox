// Validation plugin and more
jQuery.extend( jQuery.validator.messages, {
    required: "Введите данные.",
    remote: "Пожалуйста, введите правильное значение.",
    email: "Пожалуйста, введите корректный адрес электронной почты.",
    url: "Пожалуйста, введите корректный URL.",
    date: "Пожалуйста, введите корректную дату.",
    dateISO: "Пожалуйста, введите корректную дату в формате ISO.",
    number: "Пожалуйста, введите число.",
    digits: "Пожалуйста, вводите только цифры.",
    creditcard: "Пожалуйста, введите правильный номер кредитной карты.",
    equalTo: "Пожалуйста, введите такое же значение ещё раз.",
    extension: "Пожалуйста, выберите файл с правильным расширением.",
    maxlength: $.validator.format( "Пожалуйста, введите не больше {0} символов." ),
    minlength: $.validator.format( "Пожалуйста, введите не меньше {0} символов." ),
    rangelength: $.validator.format( "Пожалуйста, введите значение длиной от {0} до {1} символов." ),
    range: $.validator.format( "Пожалуйста, введите число от {0} до {1}." ),
    max: $.validator.format( "Пожалуйста, введите число, меньшее или равное {0}." ),
    min: $.validator.format( "Пожалуйста, введите число, большее или равное {0}." )
} );


// Email
jQuery.validator.addMethod("email", function (value, element) {
        return this.optional(element) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*[.][a-zA-Z0-9-]{1,8}$/.test(value);
    },
    "Неверный формат.");

// Telephone
jQuery.validator.addMethod("tel", function (value, element) {
        return this.optional(element) || /^((8|\+7|\+8)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/.test(value);
    },
    "Неверный формат.");

// Validation for class
jQuery.validator.addClassRules('js_field_digits', {
    digits: true
});

(function ($) {
    $.fn.validationManager = function () {
        $(this).each(function () {
            var $form = $(this),
                $formAllMsg = $form.find('.js-form__all-msg'),
                formAction = $form.attr('action'),
                dataValidCase = $form.data('validation-case'),
                options = {
                    errorClass: "input-error",
                    validClass: "input-success",
                    focusCleanup: false,
                    focusInvalid: false,
                    errorElement: 'span',
                    ignore: '.ignore',
                    submitHandler: function(){
                        $.ajax({
                            type: 'POST',
                            url: formAction,
                            data: $form.serialize(),
                            success: function (data) {
                                var parsedData = JSON.parse(data),
                                    dataError = parsedData.error;

                                if(dataError){
                                    $formAllMsg.html(parsedData.message);
                                }
                            }
                        })

                    }
                };


            $form.validate(options);

        });
    }
})(jQuery);


$(function () {
    var $form = $('.js-form');
    if (!$form.length) return;

    $form.validationManager();
});

