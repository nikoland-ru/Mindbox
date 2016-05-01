var $W = $(window),
    $D = $(document),
    $H = $('html'),
    $B = $('body');


if (!_GLOB) {
    var _GLOB = {};
}

_GLOB.breakpoints = {
    'xl': 1800,
    'll': 1500,
    'ls': 1380,
    'm': 1288,
    'mm': 1168,
    'ms': 1020,
    'sl': 960,
    'sm': 860,
    's': 767,
    'ss': 630,
    'xs': 480
};


/* -- Общие плагины и функции -- */

// "Scroll to" function
function scrollTo(elem, speed, headerCut) { // elem -  jq-елемент или значение скролла
    if (elem) {
        var offset = typeof elem != 'number' ? elem.offset().top : elem,
            speed = speed || 700;

        if (!headerCut) {
            offset -= $('.js-header').outerHeight();
        }


        $('html,body').animate({'scrollTop': offset}, speed);
    }
}

// scroll click plugin
(function ($) {
    $.fn.scrollTrigger = function (settings) {
        var settingsSpeed = 700,
            settings = settings || '';

        $(this).each(function () {
            var $this = $(this);

            if (settings.speed) settingsSpeed = settings.speed;

            $this.bind('click', function (e) {
                var href = $this.attr('href') || $this.data('href');
                if (typeof href != 'number') {
                    href = $(href);
                    if (settings.margin) {
                        href = href.offset().top - parseInt(href.css('margin-top'));
                    }
                }
                if (settings && settings.callbackBefore) {
                    settings.callbackBefore();
                }

                scrollTo(href, settingsSpeed);

                if (settings && settings.callbackAfter) {
                    settings.callbackAfter();
                }
                e.preventDefault();

            });
        });

    };
})(jQuery);


function toggleClass(selector, className, callback) {
    var $this = $(selector),
        status = $this.hasClass(className);

    if (status) {
        $this.removeClass(className);
    } else {
        $this.addClass(className);
    }

    if (callback) {
        callback(status);
    }
}

// tabs Plugin
(function ($) {
    $.fn.tabs = function () {

        $(this).each(function () {
            var $this = $(this),
                $btns = $this.find('.js-tabs-btn'),
                $tabs = $this.find('.js-tabs-tab');

            function tabSwitch(numb) {
                $tabs.removeClass('_active')
                    .eq(numb).addClass('_active');

                $btns.removeClass('_active')
                    .eq(numb).addClass('_active');
            }

            $btns.bind('click', function () {
                var index = $(this).index();
                tabSwitch(index);
            });

        })

    };
})(jQuery);

(function ($) {
    $.fn.getWidthInPercent = function () {
        var $this = $(this),
            width = parseFloat($this.css('width')) / parseFloat($this.parent().css('width'));
        return Math.round(100 * width) + '%';
    };
})(jQuery);

(function ($) {
    $.fn.priceFormat = function (value) {
        var result = '';

        for (var i = value.length - 1; i >= 0; i--) {

            result = value[i] + result;
            if ( (value.length - i) % 3 == 0) {
                result = ' ' + result;
            }
        }

        return $.trim(result);
    };
})(jQuery);

/* -- Применение общих плагинов и функций --- */

$(function () {
    // Scroll trigger
    $('.js-scroll-trigger').scrollTrigger();


});

$(function () {
    var $tabs = $('.js-tabs');
    if (!$tabs.length) return;

    $tabs.tabs({});
});


//todo delete
/*
 $(function () {
 var baseVals = [71500,197666],
 array = [
 [78649,217433],
 [82224,227316],
 [85799,237199],
 [107249,296499],
 [92949,256966],
 [60774,168016]
 ];

 $.each(array, function(){
 var minPercent = (this[0] / (baseVals[0] / 100)) - 100,
 maxPercent = (this[1] / (baseVals[1] / 100)) - 100;

 console.log('min:  '+minPercent)
 console.log('max:  '+maxPercent)

 })

 });*/
