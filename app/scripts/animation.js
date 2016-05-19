$.fn.numberIncrementation = function (pDuration, pInterval, formatFunc, afterCallback) {
    $(this).each(function () {
        var $this = $(this),
            dataFinalNumb = $this.data('final-numb'),
            currentNumb = +$this.text(),
            duration = pDuration || 2000,
            interval = pInterval || 40,
            steps = Math.ceil(duration / interval),
            increaseAmount = dataFinalNumb / steps,
            intervalId;

        if ($this.data('counting')) {
            return;
        }

        if (!currentNumb) {
            currentNumb = 0;
            $this.text(currentNumb);
        }


        $this.data('counting', 'true');
        intervalId = setInterval(function () {
            var valueToSet;
            currentNumb += increaseAmount;

            if (currentNumb > dataFinalNumb) {
                currentNumb = dataFinalNumb;
                clearInterval(intervalId);
                $this.data('counted', 'true');
                $this.data('counting', 'false');
                if (afterCallback) {
                    afterCallback();
                }
            }

            valueToSet = Math.ceil(currentNumb);

            if (formatFunc) {
                valueToSet = formatFunc(currentNumb);
            }

            $this.text(
                valueToSet
            );

        }, interval);

    })
};

$.fn.scrollAnimApply = function (pSettings) {
    $(this).each(function () {
        var $pluginElems = $(this),
            settings = {
                'viewportSize': 0.9,
                'duration': 1.5
            };

        if (pSettings) {
            for (var pOption in pSettings) {
                settings[pOption] = pSettings[pOption];
            }
        }

        $pluginElems.css({
            'visibility': 'hidden',
            'animation-name': 'none'
        });

        $pluginElems.each(function () {
            var $this = $(this),
                dataDuration = $this.data('anim-duration'),
                dataDelay = $this.data('anim-delay'),
            //dataClass = $this.data('scroll-a-class'),
                vpPercent = $this.data('vp-percent') || settings.viewportSize;


            var onScroll = function () {
                if ($this.elemInView(vpPercent)) {

                    // Функция вместо дефолтого действия
                    if (settings.insteadEvent) {
                        settings.insteadEvent($this)
                    } else {
                        var cssArray = {
                            'visibility': '',
                            'animation-name': ''
                        };

                        if (dataDuration) {
                            cssArray['animation-duration'] = dataDuration + 's';
                        } else if (settings.duration) {
                            cssArray['animation-duration'] = settings.duration + 's';
                        }

                        if (dataDelay) {
                            cssArray['animation-delay'] = dataDelay + 's';
                        } else if (settings.delay) {
                            cssArray['animation-delay'] = settings.delay + 's';
                        }


                        $this.css(cssArray).addClass('_anim-fired');
                    }

                    $this.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                        $this.addClass('_animEnd');
                    });

                    $W.unbind('scroll', onScroll);

                    // onEnd callback
                    if (settings.onEnd) {
                        settings.onEnd($this);
                    }
                }
            };

            /*if ($this.elemInView(vpPercent)) {
                onScroll();

                return;
            }*/

            $W.bind('scroll', onScroll);

        });

        $W.scroll();
    })
};

$(function () {
    var $numbsToCont = $('.js-count-it'),
        duration = 1600;

    if (!$numbsToCont.length) return;

    $numbsToCont.each(function () {
        var $parent = $(this).parents('.js-count-it-wr');
        if (!$parent.length) return;
        $parent.css('min-width', $parent.width() + 20);
    });

    $W.scroll(function () {
        if ($numbsToCont.elemInView()) {
            $numbsToCont.numberIncrementation(duration, null, function (numb) {
                return $().priceFormat(numb);
            }, function () {
                $numbsToCont.parents('.js-count-it-wr').css('min-width', '');
            });
        }
    })
});


$(function () {
    var $animElem = $('.js-anim-elem');

    if (!$animElem.length) return;

    $animElem.scrollAnimApply({
        'viewportSize': 0.8,
        'duration': 1.4
        // insteadEvent
        // onEnd
    });



});