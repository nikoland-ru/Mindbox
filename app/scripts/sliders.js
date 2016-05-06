
$(function () {
    var $referenceArrRight = '<div class="slider-arr slider-arr--r svg-obj js-slider-arr js-slider-arr--r">' +
        '<span class="iconic iconic--slider-arr-l"></span>' +
        '<svg class="svg-obj__main js-slider-arr__main" viewBox="0 0 110 110" preserveAspectRatio="none" >' +
        '<circle  class="slider-arr__circle1" stroke-width="4" cx="54" cy="54" r="52"  stroke="#e3e3e2" fill="none" ></circle>' +
        '<circle  class="slider-arr__circle2" stroke-width="4" cx="54" cy="54" r="52"  stroke="#e3e3e2" fill="none" ></circle>' +
        '<circle class="slider-arr__dot" cx="2.5" cy="55" r="2.5"></circle> </svg></div>',

        $referenceArrLeft = '<div class="slider-arr slider-arr--l svg-obj js-slider-arr js-slider-arr--l">' +
            '<span class="iconic iconic--slider-arr-r"></span>' +
            '<svg class="svg-obj__main js-slider-arr__main" viewBox="0 0 110 110" preserveAspectRatio="none" >' +
            '<circle class="slider-arr__circle1" stroke-width="4" cx="54" cy="54" r="52"  stroke="#e3e3e2" fill="none" ></circle>' +
            '<circle class="slider-arr__circle2" stroke-width="4" cx="54" cy="54" r="52"  stroke="#e3e3e2" fill="none" ></circle>' +
            '<circle class="slider-arr__dot" cx="105" cy="55" r="2.5"></circle></svg></div>';


    _GLOB.slickPrevArrHtml = $referenceArrLeft;
    _GLOB.slickNextArrHtml = $referenceArrRight;
});


$(function () {
    (function ($) {
        $.fn.casesSl = function (settings) {
            $(this).each(function(){
                var $slider = $(this),
                    $slides = $slider.find('.cases-slider__col'),
                    widthsLg = [0.2,0.4],
                    widthsMd = [0.25, 0.5],
                    widthsSm = [0.5,1],//[0.333, 0.666],
                    widthsSs = [0.5, 1];

                function setSlidesH(){
                    var fHighest = 0,
                        lHighest = 0;

                    $slides.each(function(){
                        var $this = $(this),
                            $cases = $this.find('.js-cases-sl__col'),
                            fCase = $cases.first(),
                            fCaseHeight = fCase.outerHeight(),
                            lCase,
                            lCaseHeight;

                        if( fCaseHeight > fHighest){
                            fHighest = fCaseHeight;
                        }

                        if($cases.length > 1){
                            lCase = $cases.last();
                            lCaseHeight = lCase.outerHeight();
                            if( lCaseHeight > lHighest){
                                lHighest = lCaseHeight;
                            }
                        }


                    });

                    $slides.each(function() {
                        var $this = $(this),
                            $cases = $this.find('.js-cases-sl__col'),
                            fCase = $cases.first(),
                            lCase;

                        fCase.css('min-height',fHighest);

                        if($cases.length > 1){
                            lCase = $cases.last();
                            lCase.css('min-height',lHighest);
                        }

                    });
                }

                function setSlidesW(){
                    var winWidth = $W.width(),
                        contWidth = $slider.width();

                    $slides.each(function(){
                        var $this = $(this),
                            widthsArray = widthsLg,
                            resultValue;

                        if(winWidth <= _GLOB.breakpoints.ms){
                            widthsArray = widthsMd;
                        }
                        if(winWidth <= _GLOB.breakpoints.sm){
                            widthsArray = widthsSm;
                        }
                        if(winWidth <= _GLOB.breakpoints.ss){
                            widthsArray = widthsSs;
                        }


                        if($this.hasClass('_double')){
                            resultValue = contWidth * widthsArray[1];
                        }else{
                            resultValue = contWidth * widthsArray[0];
                        }

                        $this.css('width', resultValue)
                    })
                }

                setSlidesW();
                setSlidesH();

                $W.resize(function(){
                    setSlidesW();
                    setSlidesH();
                });

                $slider.slick({
                    //variableWidth: true,
                    //centerMode: true,
                    slidesToShow: 5,
                    slidesToScroll: 2,
                    arrows: true,
                    dots: true,
                    swipe: false,
                    nextArrow: _GLOB.slickNextArrHtml,
                    prevArrow: _GLOB.slickPrevArrHtml,
                    responsive: [
                        {
                            breakpoint: _GLOB.breakpoints.ms,
                            settings: {
                                slidesToShow: 4,
                            }
                        },
                        {
                            breakpoint: _GLOB.breakpoints.sm,
                            settings: {
                                slidesToShow: 2,
                                swipe: true
                            }
                        },{
                            breakpoint: _GLOB.breakpoints.ss,
                            settings: {
                                slidesToShow: 2,
                                swipe: true
                            }
                        },
                    ]
                })


            })

        };
    })(jQuery);
});

$(function () {

    (function ($) {
        $.fn.examplesSl = function (settings) {
            $(this).each(function(){
                var $slider = $(this);

                $slider.slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: true,
                    swipe: false,
                    nextArrow: _GLOB.slickNextArrHtml,
                    prevArrow: _GLOB.slickPrevArrHtml,
                    responsive: [

                        {
                            breakpoint: _GLOB.breakpoints.s,
                            settings: {
                                swipe: true
                            }
                        },
                    ]
                })

            })
        }
    })(jQuery);
});

$(function () {

    (function ($) {
        $.fn.planWeekSlider = function (settings) {
            $(this).each(function(){
                var $slider = $(this);

                $slider.slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: true,
                    swipe: false,
                    nextArrow: _GLOB.slickNextArrHtml,
                    prevArrow: _GLOB.slickPrevArrHtml,
                    responsive: [
                        {
                            breakpoint: _GLOB.breakpoints.sm,
                            settings: {
                                dots: true,
                                swipe: true
                            }
                        },

                    ]
                })

            })
        }
    })(jQuery);
});


$(function () {

    (function ($) {
        $.fn.regularSlider = function (settings) {
            $(this).each(function(){
                var $slider = $(this);

                $slider.slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: false,
                    swipe: false,
                    nextArrow: _GLOB.slickNextArrHtml,
                    prevArrow: _GLOB.slickPrevArrHtml,
                    responsive: [

                        {
                            breakpoint: _GLOB.breakpoints.ls,
                            settings: {
                                dots: true,
                            }
                        },{
                            breakpoint: _GLOB.breakpoints.sm,
                            settings: {
                                dots: true,
                                swipe: true
                            }
                        },

                    ]
                })

            })
        }
    })(jQuery);
});


$(function () {
    var $casesSl = $('.js-cases-sl');
    if (!$casesSl.length) return;

    $casesSl.casesSl();
});

$(function () {
    var $examplesSl = $('.js-examples-sl');
    if (!$examplesSl.length) return;

    $examplesSl.examplesSl();
});

$(function () {
    var $prodSl = $('.js-prod-slider');
    if (!$prodSl.length) return;

    $prodSl.regularSlider();
});

$(function () {
    var $commSl = $('.js-comm-slider');
    if (!$commSl.length) return;

    $commSl.regularSlider();
});

$(function () {
    var $pWeekSl = $('.js-plan-week-sl');
    if (!$pWeekSl.length) return;

    $pWeekSl.planWeekSlider();
});

$(function () {
    var animTime = 0.3;
    function changeState(jqObj,status){

        var $mainSvg = jqObj.find(".js-slider-arr__main"),
            $mainSvgPaths = $mainSvg.find('path'),
            $mainSvgCircle = $mainSvg.find('circle');

        // TODO

        var circleSize = $mainSvgCircle.width();
        $mainSvgCircle.css('stroke-dashoffset',circleSize)//.animate({'',},animTime);

        if(status == 'toHover'){
            var $finalSvg = jqObj.find(".js-slider-arr__final"),
                $finalSvgPaths = $finalSvg.find('path');

            for(var i = 0; i < $mainSvgPaths.length; i++){
                TweenMax.to($mainSvgPaths[i], animTime, {morphSVG:   $finalSvgPaths[i] });
            }
        }
        if(status == 'toNormal'){
            var $normalSvg = jqObj.find('.js-slider-arr__normal'),
                $normalSvgPaths = $normalSvg.find('path');

            for(var i = 0; i < $mainSvgPaths.length; i++){
                TweenMax.to($mainSvgPaths[i], animTime, {morphSVG:   $normalSvgPaths[i] });
            }
        }

        var tl = new TimelineLite();


        //tl.from($mainSvgCircle, 1, {drawSVG:"20% 50%"} );
        //tl.play()
        TweenMax.staggerFrom($mainSvgCircle,1,{drawSVG: 0})

    }

    $D.on('mouseenter','.js-slider-arr', function(){
        //changeState( $(this), 'toHover');
    }).on('mouseleave','.js-slider-arr', function(){
        //changeState( $(this), 'toNormal');
    })
});