


$(function () {
    (function ($) {
        $.fn.priceCalc = function (settings) {
            $(this).each(function(){
                var $this = $(this),
                    $itogNode = $this.find('.js-priceCalc_itog'),
                    $ranges = $this.find('.js-priceCalc_ranges'),
                    $input = $this.find('.js-priceCalc_input'),

                    dataStep = $this.data('step') || 1,
                    dataMin = $this.data('min-value'),
                    dataMax = $this.data('max-value'),

                    noUiSliderObj;


                noUiSlider.create($ranges[0],{
                    start: dataMin,
                    connect: false,
                    range: {
                        'min': dataMin,
                        'max': dataMax
                        },
                    step: dataStep,
                    })

                noUiSliderObj = $ranges[0].noUiSlider;

                function onChange(values){
                    //todo
                }

                noUiSliderObj.on('update', function (values, handle) {
                    onChange(values[0]);
                });

            })

        };
    })(jQuery);
});


$(function () {
    var $priceCalc = $('.js-priceCalc');
    if(!$priceCalc.length) return;
    $priceCalc.priceCalc();

});

