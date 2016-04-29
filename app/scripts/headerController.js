
$(function () {
    var $header = $('.js-header');
    if(!$header.length) return;

    function onScroll(){
        var scroll = $W.scrollTop();

        if(scroll > 10){
            $B.addClass('_scrolled');
        }else{
            $B.removeClass('_scrolled');
        }
    }

    onScroll();

    $W.scroll( function(){
        onScroll();
    })

});

$(function () {
    var $hMenuBtn = $('.js-header-menu-btn');
    if(!$hMenuBtn.length) return;

    var animTime = .4,
        $svgMain =  $hMenuBtn.find('.js-header-menu-btn__main'),
        $svgMainPaths =  $svgMain.find('path'),
        $svgNormal =  $hMenuBtn.find('.js-header-menu-btn__normal'),
        $svgNormalPaths =  $svgNormal.find('path'),
        svgFinal = $hMenuBtn.find('.js-header-menu-btn__final'),
        svgFinalPaths = svgFinal.find('path');


    function setClose(){
        for(var i = 0; i < $svgMainPaths.length; i++){
            TweenMax.to($svgMainPaths[i], animTime, {morphSVG:   svgFinalPaths[i] });
        }
    }

    function setNormal(){
        for(var i = 0; i < $svgMainPaths.length; i++){
            TweenMax.to($svgMainPaths[i], animTime, {morphSVG:   $svgNormalPaths[i] });
        }
    }

    $hMenuBtn.click(function(){
        var status = $B.hasClass('_mob-menu-open');
        if(status){
            $B.removeClass('_mob-menu-open');
            setNormal();
        }else{
            $B.addClass('_mob-menu-open');
            setClose();
        }
    })
});