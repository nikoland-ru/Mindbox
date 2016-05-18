$(function () {
    var closerReference = '<div class="mfp-close popup-cross popup__closer js-popup_closer">' +
        '<svg viewBox="0 0 30 30" preserveAspectRatio="none"><g>' +
        '<polyline  points="27.504,3.486 15.004,15.969 14.034,14.997 26.534,2.514 "/>' +
        '<polyline  points="15.974,15.017 3.474,27.5 2.504,26.529 15.004,14.046 "/>' +
        '<polyline  points="3.484,2.506 15.966,15.007 14.995,15.977 2.512,3.476 "/>' +
        '<polyline  points="15.013,14.038 27.496,26.538 26.525,27.508 14.042,15.008 "/></g></svg></div>';

    _GLOB.closerReference = closerReference;
});

$(function () {
    var $spBtn = $('.js-side-popup-btn');
    if (!$spBtn.length) return;

    var $popups = $('.js-side-popup'),
        $closers = $('.js-side-popup_closer'),
        $offsetElems = $('.page-inner,.js-header'),
        $pageInner = $('.page-inner'),
        isBlog =  $B.hasClass('blog') || $B.hasClass('single');

    function closePopup(pPopup) {
        pPopup.removeClass('_open');
        $B.removeClass('_side-popup-open _side-popup-moved-page');
        $offsetElems.css('margin-right', '');
        $('.header__nav').css('margin-right', '');
        if(isBlog){
            $B.css('margin-right', '');
        }
        $pageInner.css({
            'transform': ''
        });
        $pageInner.one('webkitTransitionEnd transitionend msTransitionEnd oTransitionEnd',function(){
            $B.removeClass('_page-inner-moved');
        })
    }

    function setInjectHtml(pCont) {
        var html = '',
            pplTxt = $('.js-priceCalc_top-node').text(),
            costTxt = $('.js-priceCalc_input-counter-price').val(),
            $options = $('.js-priceCalc_chkb:checked');

        if (pplTxt) {
            html += '<p class="side-popup__inject-option"><b>Кол-во покупателей: </b>' + pplTxt + '</p>';
        }

        if (costTxt) {
            html += '<p class="side-popup__inject-option"><b>Цена: </b>' + $().priceFormat(costTxt) + ' Р</p>';
        }

        if (costTxt && $options.length) {
            html += '<h6 class="h4">Опции</h6>';
            $.each($options.parents('.checkbox-label').find('.checkbox-label__txt'), function () {
                var optionVal = $(this).text();
                html += '<p class="side-popup__inject-option">' + optionVal + '</p>';
            })
        }

        pCont.html(html);
        pCont.append($('.js-priceCalc input').clone());
    }

    $spBtn.bind('click', function (e) {
        var $thisBtn = $(this),
            dataPopupName = $thisBtn.data('popup-name'),
            dataInject = $thisBtn.data('calc-inject'),
            dataPageMove = $thisBtn.data('page-move'),
            $target = $popups.filter('[data-popup-name="' + dataPopupName + '"]'),
            $injectWr = $target.find(".js-side-popup__inject-wr"),
            $injectInner = $target.find(".js-side-popup__inject");

        if( $target.hasClass('_open')){
            closePopup();
            return;
        }

        $injectInner.html('');
        if (dataInject) {
            $injectWr.addClass('_active');
            setInjectHtml($injectInner);
        } else {
            $injectWr.removeClass('_active');
        }

        $target.addClass('_open');

        if (!dataPageMove) {
            $B.addClass('_side-popup-open');
            $offsetElems.css('margin-right', $.scrollbarWidth());
            if(isBlog){
                $B.css('margin-right', $.scrollbarWidth());
            }

            if ($W.width() <= _GLOB.breakpoints.header1) {
                $('.header__nav').css('margin-right', $.scrollbarWidth());
            }
        } else {
            $pageInner.css({
                'transform': 'translate3d(-' + $target.width() + 'px,0,0)'
            });
            $B.addClass('_side-popup-open _side-popup-moved-page _page-inner-moved');
        }

        e.stopPropagation();

        $W.bind('click', function (e) {
            var $event = $(e.target);
            if (!$event.closest($target).length) {
                closePopup($target);
                $W.unbind('click');
            }
        })
    });

    $closers.bind('click', function () {
        var $parent = $(this).parents('.js-side-popup');
        closePopup($parent);
    })
});


$(function () {
    var $btn = $('.js-popup-btn'),
        $offsetElems = $('.js-header');

    $btn.magnificPopup({
        preloader: false,
        //mainClass: 'mfp-fade',
        //removalDelay: 300,
        type: $btn.data('type') || 'inline',
        closeMarkup: _GLOB.closerReference,
        //'<span class="mfp-close iconic iconic--cross2 popup__closer js-popup_closer"></span>',
        callbacks: {
            open: function () {
                $offsetElems.css('margin-right', $.scrollbarWidth());
            },
            close: function () {
                $offsetElems.css('margin-right', '');
            }
        }
    });
});

$(function () {
    var $vPopup = $('.js-video-popup');
    if (!$vPopup.length) return;

    $vPopup.magnificPopup({
        //disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
        closeMarkup: _GLOB.closerReference,
        callbacks: {
            open: function () {
                $('.mfp-bg').css('background', 'rgba(1, 2, 0, 1)')
            },
            close: function () {
                $('.mfp-bg').css('background', '')

            }
        }
    });

});