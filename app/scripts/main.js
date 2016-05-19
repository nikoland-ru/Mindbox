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
    'xs': 480,
    'header1': 1090
};

$W.load(function() {
    $B.removeClass('_loading')
});

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


// Numb formating. 12345678 => 12 345 678
(function ($) {
    $.fn.priceFormat = function (pValue) {
        var value = String(pValue),
            result = '';


        for (var i = value.length - 1; i >= 0; i--) {

            result = value[i] + result;
            if ((value.length - i) % 3 == 0) {
                result = ' ' + result;
            }
        }

        return $.trim(result);
    };
})(jQuery);

$.scrollbarWidth = function () {
    var parent, child, width;

    if (width === undefined) {
        parent = $('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo('body');
        child = parent.children();
        width = child.innerWidth() - child.height(99).innerWidth();
        parent.remove();
    }

    return width;
};

(function ($) {
    $.fn.elemInView = function (pPercent) {
        var $this = $(this),
            multiplier = pPercent || 0.75,
            scroll = $W.scrollTop(),
            winH = $W.height(),
            viewport = winH * multiplier,
            vpTopLimit = scroll + (winH / 2) - (viewport / 2),
            vpBotLimit = scroll + (winH / 2) + (viewport / 2),

            offsetTopElem = $this.offset().top,
            limitElem = offsetTopElem + $this.outerHeight(),
            forReturn = false,
            topCondition1 = vpTopLimit <= offsetTopElem,
            topCondition2 = vpBotLimit >= offsetTopElem,
            botCondition1 = vpTopLimit <= limitElem,
            botCondition2 = vpBotLimit >= limitElem;

        if ((topCondition1 && topCondition2) || ( botCondition1 && botCondition2)) { // Элемент частично накрыл вьюпорт
            forReturn = true;
        }

        if (vpTopLimit >= offsetTopElem && vpBotLimit <= limitElem) { // Элемент полностью входит в вьюпорт
            forReturn = true;
        }

        return forReturn;
    };
})(jQuery);

/* -- Применение общих плагинов и функций --- */

$(function () {
    var $scrollTrigger = $('.js-scroll-trigger');
    if (!$scrollTrigger.length) return;

    $scrollTrigger.scrollTrigger({});

});

$(function () {
    var $tabs = $('.js-tabs');
    if (!$tabs.length) return;

    $tabs.tabs({});
});

$(function () {
    $(function () {
        var $footerStats = $('.js-stats');
        if (!$footerStats.length) return;

        var dataUrl = $footerStats.data('url'),
            $latencyNode = $footerStats.find('.js-stats_latency-node'),
            $uptimeNode = $footerStats.find('.js-stats_uptime-node'),
            $canvas = $footerStats.find('.js-stats_canvas');

        $.ajax({
            type: 'GET',
            url: dataUrl,
            success: function (data) {
                var parsedData = JSON.parse(data);
                $latencyNode.text(parsedData.Latency);
                $uptimeNode.text(parsedData.Uptime);
                $canvas.sparkline(parsedData.Values, {
                    type: 'bar',
                    height: 22,
                    barWidth: 4,
                    zeroAxis: false,
                    barSpacing: 2,
                    barColor: '#1FCD00'

                });
            }
        });

    });
});

