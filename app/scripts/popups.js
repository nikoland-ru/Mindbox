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
        $offsetElems = $('.page-inner,.js-header');

    function closePopup(pPopup){
        pPopup.removeClass('_open');
        $B.removeClass('_side-popup-open');
        $offsetElems.css('margin-right','');
        $('.header__nav').css('margin-right','');
    }

    $spBtn.bind('click', function (e) {
        var dataPopupName = $(this).data('popup-name'),
            $target = $popups.filter('[data-popup-name="' + dataPopupName + '"]');

        $target.addClass('_open');
        $B.addClass('_side-popup-open');
        $offsetElems.css('margin-right', $.scrollbarWidth());
        if( $W.width() <= _GLOB.breakpoints.ms){
            $('.header__nav').css('margin-right', $.scrollbarWidth());
        }

        e.stopPropagation();
        $W.bind('click', function (e) {
            var $event = $(e.target);
            if (!$event.closest($target).length) {
                closePopup($target);
            }
            $W.unbind('click');
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
            open: function() {
                $offsetElems.css('margin-right', $.scrollbarWidth());
            },
            close: function() {
                $offsetElems.css('margin-right', '');
            }
        }
    });
});

$(function(){
    var $vPopup = $('.js-video-popup');
    if(!$vPopup.length) return;

    $vPopup.magnificPopup({
        //disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
        closeMarkup: _GLOB.closerReference
    });

});