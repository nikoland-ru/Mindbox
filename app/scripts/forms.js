


$(function () {
    (function ($) {
        $.fn.priceCalc = function (settings) {
            $(this).each(function(){
                var $this = $(this),
                    $itogNode = $this.find('.js-priceCalc_itog'),
                    $topNode = $this.find('.js-priceCalc_top-node'),
                    $ranges = $this.find('.js-priceCalc_ranges'),
                    $inputUsers = $this.find('.js-priceCalc_input-users'),
                    $inputPrice = $this.find('.js-priceCalc_input-counter-price'),
                    $optionsChkb = $this.find('.js-priceCalc_chkb'),
                    $optionsToggle = $this.find('.js-priceCalc__options-toggle'),
                    $options = $this.find('.js-priceCalc__options'),

                    //dataStep = $this.data('step') || 50,
                    dataMin = $this.data('min-value') - 1,
                    dataMax = $this.data('max-value') - 1,
                    injects = _GLOB.priceRangeSettings,
                    currentInjects ,
                    noUiSliderObj,
                    rangesOption = {
                        'min': dataMin,
                        '1%': [dataMin, 50000],
                        '20%': [500000, 100000],
                        '40%': [1000000, 200000],
                        '60%': [2000000, 400000],
                        '80%': [4000000, 500000],
                        'max': dataMax,
                    };

                if(!$itogNode.length){
                    var dataItogTarget = $this.data('itog-target');
                    $itogNode = $(dataItogTarget);
                }

                function setCurrentInjects(value){
                    for(var i = 0; i <= injects.length; i++){
                        if(value < injects[i].value ){
                            currentInjects = injects[i].options;
                            return;
                        }
                    }
                }

                // Функция должна подсчитать цену, включая информацию с чекбокосов
                function countPrice(){
                    var originalPrice = Number(currentInjects.price),
                        finalPrice = originalPrice,
                        percentsMods = [],
                        finalPercentMod = 0;

                    // Собираем модификаторы
                    $optionsChkb.filter(':checked').each(function(){
                        var $chkb = $(this),
                            thisValue = $chkb.val(),
                            dataFinal = $chkb.data('final-percent'),
                            toReturn = ['plus'];

                        if(thisValue[0] == '-'){
                            toReturn[0] = 'minus';
                        }

                        if(thisValue.indexOf('%')){
                            toReturn[1] = parseInt(thisValue)/100;

                            if(!dataFinal){
                                percentsMods.push(toReturn);
                            }else{
                                finalPercentMod +=  parseInt(thisValue)/100;
                            }
                        }

                    });

                    // Делаем вычисления на основе модификаторов
                    $.each(percentsMods, function(){
                        var countedPrice = (originalPrice * this[1] ).toFixed(0);

                        if(this[0] == 'minus'){
                            countedPrice = -countedPrice;
                        }
                        countedPrice = Number(countedPrice);
                        finalPrice += countedPrice;
                    });


                    // Скидки и прочее, здесь происходят изменения с конечной ценой
                    finalPrice +=  finalPrice * finalPercentMod;

                    return finalPrice.toFixed(0);
                }

                function setValues(){
                    var countedPrice;

                    if(currentInjects.price){
                        countedPrice = countPrice();
                        $this.removeClass('_custom-pricing');

                        $itogNode.text(
                            $().priceFormat( countedPrice )
                        );
                    }else{
                        $this.addClass('_custom-pricing');
                        countedPrice = "";
                    }

                    // Значение инпута пользователей
                    $inputUsers.val(currentInjects.value);

                    // Значение инпута цены (с учётом процентов)
                    $inputPrice.val(countedPrice);


                    $topNode.text(
                        currentInjects.usersString
                    )
                }




                noUiSlider.create($ranges[0],{
                    start: dataMin,
                    connect: false,
                    //step: 10000,
                    range: rangesOption
                });

                noUiSliderObj = $ranges[0].noUiSlider;


                noUiSliderObj.on('update', function (values, handle) {
                    setCurrentInjects(values[0]);
                    setValues();
                    //console.log(values[0])
                });

                $optionsChkb.change(function(){
                    setCurrentInjects(noUiSliderObj.get());
                    setValues();
                });

                $optionsToggle.bind('click',function(e){
                    $options.slideToggle();
                    e.preventDefault();
                })

            })

        };
    })(jQuery);
});


$(function () {
    var $priceCalc = $('.js-priceCalc');
    if(!$priceCalc.length) return;
    $priceCalc.priceCalc();

});

