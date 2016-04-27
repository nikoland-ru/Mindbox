$(function () {
    var $spBtn = $('.js-side-popup-btn');
    if (!$spBtn.length) return;

    var $popups = $('.js-side-popup'),
        $closers = $('.js-side-popup_closer');

    $spBtn.bind('click', function (e) {
        var dataPopupName = $(this).data('popup-name'),
            $target = $popups.filter('[data-popup-name="' + dataPopupName + '"]')

        $target.addClass('_open');
        $B.addClass('_side-popup-open');

        e.stopPropagation();
        $W.bind('click', function (e) {
            var $event = $(e.target);
            if (!$event.closest($target).length) {
                $target.removeClass('_open');
                $B.removeClass('_side-popup-open');
            }

        })
    });

    $closers.bind('click', function () {
        var $parent = $(this).parents('.js-side-popup');
        $parent.removeClass('_open');
        $B.removeClass('_side-popup-open');

    })
});


$(function () {
    var $btn = $('.js-popup-btn');

    $btn.magnificPopup({
        preloader: false,
        //mainClass: 'mfp-fade',
        //removalDelay: 300,
        type: $(this).data('type') || 'inline',

        closeMarkup: '<span class="mfp-close iconic iconic--cross2 popup__closer js-popup_closer"></span>'
    });
});