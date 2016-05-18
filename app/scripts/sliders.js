$(function () {
    var $referenceArrRight = '<div class="slider-arr slider-arr--r svg-obj js-slider-arr js-slider-arr--r">' +
            '<span class="iconic iconic--slider-arr-l"></span>' +
            '<svg class="svg-obj__main js-slider-arr__main" viewBox="0 0 110 110" preserveAspectRatio="none" >' +
            '<circle  class="slider-arr__circle1" stroke-width="2" cx="54" cy="54" r="50"  stroke="#e3e3e2" fill="none" ></circle>' +
            '<circle  class="slider-arr__circle2" stroke-width="2" cx="54" cy="54" r="50"  stroke="#e3e3e2" fill="none" ></circle>' +
            '<circle class="slider-arr__dot" cx="104" cy="56" r="2"></circle> </svg></div>',

        $referenceArrLeft = '<div class="slider-arr slider-arr--l svg-obj js-slider-arr js-slider-arr--l">' +
            '<span class="iconic iconic--slider-arr-r"></span>' +
            '<svg class="svg-obj__main js-slider-arr__main" viewBox="0 0 110 110" preserveAspectRatio="none" >' +
            '<circle class="slider-arr__circle1" stroke-width="2" cx="54" cy="54" r="50"  stroke="#e3e3e2" fill="none" ></circle>' +
            '<circle class="slider-arr__circle2" stroke-width="2" cx="54" cy="54" r="50"  stroke="#e3e3e2" fill="none" ></circle>' +
            '<circle class="slider-arr__dot" cx="5" cy="56" r="2"></circle></svg></div>';


    _GLOB.slickPrevArrHtml = $referenceArrLeft;
    _GLOB.slickNextArrHtml = $referenceArrRight;
});


$(function () {
    (function ($) {
        $.fn.casesSl = function (settings) {
            $(this).each(function () {
                var $slider = $(this),
                    $slides = $slider.find('.js-cases-sl__slide'),
                    widthsLg = [0.2, 0.4],
                    widthsMd = [0.25, 0.5],
                    widthsSm = [0.5, 1], //[0.333, 0.666],
                    widthsSs = [0.5, 1],
                    slideAnim = 500,
                    scrollTimeout;

                function setSlidesH(pCurrentNumb, pMax) {
                    var currentSlNumb = pCurrentNumb || 0,
                        maxSlides = pMax || 5,
                        $targetSlides = [],
                        fHighest = 0,
                        lHighest = 0,
                        padd;

                    if (currentSlNumb == $slides.length - 1) {
                        currentSlNumb = currentSlNumb - 1
                    }

                    if ($slider.hasClass('slick-initialized')) {
                        for (var i = 0; i < maxSlides; currentSlNumb++, i++) {
                            $targetSlides.push(
                                $slides.filter('[data-slick-index="' + currentSlNumb + '"]')
                            );
                        }
                    } else {
                        for (var i = 0; i < maxSlides; currentSlNumb++, i++) {
                            $targetSlides.push(
                                $slides.eq(currentSlNumb)
                            );
                        }
                    }

                    $.each($targetSlides, function () {
                        var $this = $(this),
                            $cases = $this.find('.js-cases-sl__col'),
                            fCase = $cases.first(),
                            fCaseHeight = fCase.outerHeight(),
                            lCase,
                            lCaseHeight;

                        padd = parseInt(fCase.css('padding-top'));

                        if (fCaseHeight > fHighest) {
                            fHighest = fCaseHeight;
                        }

                        if ($cases.length > 1) {
                            lCase = $cases.last();
                            lCaseHeight = lCase.outerHeight();
                            if (lCaseHeight > lHighest) {
                                lHighest = lCaseHeight;
                            }
                        }

                    });

                    $.each($targetSlides, function () {
                        var $this = $(this),
                            $cases = $this.find('.js-cases-sl__col'),
                            $fCase = $cases.first(),
                            $fCaseInner = $fCase.find('.case'),
                            $lCase,
                            $lCaseInner;


                        $fCaseInner.css('min-height', fHighest - (padd * 2));

                        if ($cases.length > 1) {
                            $lCase = $cases.last();
                            $lCaseInner = $lCase.find('.case');
                            $lCaseInner.css('min-height', lHighest - (padd * 2));
                        }

                    });

                    $slider.find('.slick-list').animate({'height': fHighest + lHighest  }, slideAnim)

                }

                function setSlidesW() {
                    var winWidth = $W.width(),
                        contWidth = $slider.width();

                    $slides.each(function () {
                        var $this = $(this),
                            widthsArray = widthsLg,
                            resultValue;

                        if (winWidth <= _GLOB.breakpoints.ms) {
                            widthsArray = widthsMd;
                        }
                        if (winWidth <= _GLOB.breakpoints.sm) {
                            widthsArray = widthsSm;
                        }
                        if (winWidth <= _GLOB.breakpoints.ss) {
                            widthsArray = widthsSs;
                        }


                        if ($this.hasClass('_double')) {
                            resultValue = contWidth * widthsArray[1];
                        } else {
                            resultValue = contWidth * widthsArray[0];
                        }

                        $this.css('width', resultValue)
                    })
                }

                setSlidesW();
                setSlidesH();

                $W.resize(function () {
                    if( $W.width() <= _GLOB.breakpoints.s) {
                        $slider.find('.case').css('min-height','');
                    }
                    setSlidesW();
                    setSlidesH($slider.slick('slickCurrentSlide'),$slider.slick('slickGetOption','slidesToScroll'));

                });


                $slider.slick({
                    adaptiveHeight: true,
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    arrows: true,
                    dots: true,
                    swipe: false,
                    speed: slideAnim,
                    nextArrow: _GLOB.slickNextArrHtml,
                    prevArrow: _GLOB.slickPrevArrHtml,
                    responsive: [
                        {
                            breakpoint: _GLOB.breakpoints.ms,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 4
                            }
                        },
                        {
                            breakpoint: _GLOB.breakpoints.sm,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                                swipe: true
                            }
                        }, {
                            breakpoint: _GLOB.breakpoints.ss,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                                swipe: true
                            }
                        }
                    ]
                });

                $slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
                    setSlidesH(nextSlide, slick.options.slidesToScroll);
                });

                $W.scroll(function(){
                    $slider.slick('slickSetOption', 'swipe', false);

                    clearTimeout(scrollTimeout);
                    scrollTimeout = setTimeout(function(){
                        $slider.slick('slickSetOption', 'swipe', true);
                    },200);
                })


            })
        };
    })(jQuery);
});

$(function () {

    (function ($) {
        $.fn.examplesSl = function (settings) {
            $(this).each(function () {
                var $slider = $(this),
                    scrollTimeout;

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
                });

                $W.scroll(function(){
                    $slider.slick('slickSetOption', 'swipe', false);

                    clearTimeout(scrollTimeout);
                    scrollTimeout = setTimeout(function(){
                        $slider.slick('slickSetOption', 'swipe', true);
                    },200);
                })

            })
        }
    })(jQuery);
});

$(function () {

    (function ($) {
        $.fn.planWeekSlider = function (settings) {
            $(this).each(function () {
                var $slider = $(this),
                    scrollTimeout;


                function dotPosition(numb) {
                    var $thisSl = $slider.find('[data-slick-index="' + (numb || 0) + '"]'),
                        descH = $thisSl.find('.js-plan-week-sl_txt').outerHeight();
                    $slider.find('.slick-dots li').css('top', descH || 0);
                }

                $slider.on('init', function (slick) {
                    setTimeout(function(){
                        dotPosition();
                    },300);
                });

                $slider.slick({
                    adaptiveHeight: true,
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
                                //dots: true,
                                swipe: true
                            }
                        },
                    ]
                });


                $slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
                    dotPosition(nextSlide);
                });

                $W.resize(function(){
                    dotPosition($slider.slick('slickCurrentSlide'));
                })

                $W.scroll(function(){
                    $slider.slick('slickSetOption', 'swipe', false);

                    clearTimeout(scrollTimeout);
                    scrollTimeout = setTimeout(function(){
                        $slider.slick('slickSetOption', 'swipe', true);
                    },200);
                })
            })
        }
    })(jQuery);
});
$(function () {

    (function ($) {
        $.fn.historySlider = function (settings) {
            $(this).each(function () {
                var $slider = $(this),
                    $slides = $slider.find('.js-history-sl_slide'),
                    $parent = $slider.parents('.js-history-sl-wr'),
                    scrollTimeout;

                $slider.slick({
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    arrows: true,
                    dots: true,
                    swipe: false,
                    speed: 700,
                    nextArrow: _GLOB.slickNextArrHtml,
                    prevArrow: _GLOB.slickPrevArrHtml,
                    infinite: false,
                    responsive: [
                        {
                            breakpoint: _GLOB.breakpoints.sm,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                                dots: true,
                                swipe: true
                            }
                        },
                        {
                            breakpoint: _GLOB.breakpoints.ss,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                dots: true,
                                swipe: true,
                                speed: 500,
                            }
                        }
                    ]
                });

                $slider.on('beforeChange', function (event, slick, numb, nextSlide) {
                    var stepPercent = 100 / $slides.length,
                        position = (stepPercent / 4) * nextSlide + '% 50%';
                    $parent.css('background-position', position)
                });

                $W.scroll(function(){
                    $slider.slick('slickSetOption', 'swipe', false);

                    clearTimeout(scrollTimeout);
                    scrollTimeout = setTimeout(function(){
                        $slider.slick('slickSetOption', 'swipe', true);
                    },200);
                })

            })
        }
    })(jQuery);
});
$(function () {

    (function ($) {
        $.fn.regularSlider = function (pSettings) {
            $(this).each(function () {
                var $slider = $(this),
                    settings = {
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
                            }, {
                                breakpoint: _GLOB.breakpoints.sm,
                                settings: {
                                    dots: true,
                                    swipe: true
                                }
                            },

                        ]
                    },
                    scrollTimeout;

                if (pSettings) {
                    for (var pOption in pSettings) {
                        settings[pOption] = pSettings[pOption];
                    }
                }

                $slider.slick(settings);

                $W.scroll(function(){
                    $slider.slick('slickSetOption', 'swipe', false);

                    clearTimeout(scrollTimeout);
                    scrollTimeout = setTimeout(function(){
                        $slider.slick('slickSetOption', 'swipe', true);
                    },200);
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

    $prodSl.regularSlider({
        adaptiveHeight: true
    });
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
    var $historySl = $('.js-history-sl');
    if (!$historySl.length) return;

    $historySl.historySlider();
});
