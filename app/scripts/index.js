
// todo
$(function () {
    var $baCont = $('.js-before-after');
    if (!$baCont.length) return;

    var $btn = $baCont.find('.js-before-after_btn'),
        $group = $baCont.find('.js-before-after_tab');


    function switchTab(){
        var dataState = $baCont.data('state'),
            newState = dataState == 1 ? 2 : 1,
            msg = newState == 1 ? 'Навести порядок' : 'Вернуть беспорядок';

        $group.removeClass('_active').eq(newState - 1).addClass('_active');

        $btn.text(msg);

        $baCont.data('state', newState)
    }

    $btn.bind('click',function(){
        switchTab();
    })

});
$(function () {
    var $indexPromo = $('.js-index-promo');
    if (!$indexPromo.length) return;

    function onScroll(){
        var headerH = parseInt($('.js-header').height()),
            indexPromoH =  parseInt($indexPromo.outerHeight()),
            offset = $indexPromo.offset().top,
            limit = offset + indexPromoH,
            scroll = $W.scrollTop();


        if(scroll >= offset && (scroll + headerH )  < limit * 0.9 ){
            $indexPromo.addClass('_animate')
        }

    }
    onScroll();

    $W.bind('scroll resize',function(){
        var winWidth = $W.width();

        if( _GLOB.breakpoints.sm < winWidth){
            onScroll();
        }
    })


});
