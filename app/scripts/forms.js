


$(function () {
    (function ($) {
        $.fn.priceCalc = function (settings) {
            $(this).each(function(){
                var $this = $(this),
                    $itogNode = $this.find('.js-priceCalc_itog'),
                    $topNode = $this.find('.js-priceCalc_top-node'),
                    $ranges = $this.find('.js-priceCalc_ranges'),
                    $input = $this.find('.js-priceCalc_input'),
                    $optionsToggle = $this.find('.js-priceCalc__options-toggle'),
                    $options = $this.find('.js-priceCalc__options'),

                    dataStep = $this.data('step') || 50,
                    dataMin = $this.data('min-value') - 1,
                    dataMax = $this.data('max-value') - 1,
                    injects = _GLOB.priceRangeSettings,
                    currentInjects ,
                    noUiSliderObj,
                    rangesOption ={
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

                function setValues(){
                    if(currentInjects.price){
                        $this.removeClass('_custom-pricing');
                        $itogNode.text(
                            currentInjects.price
                        );
                    }else{
                        $this.addClass('_custom-pricing');
                    }


                    $topNode.text(
                        currentInjects.usersString
                    )
                }

                /*
                function setRanges(){
                    var cuts = injects.length;


                    console.log(cuts)

                }

                setRanges();
                */


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
                    console.log(values[0])
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

