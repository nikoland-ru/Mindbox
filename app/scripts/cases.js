$(function () {
    var $caseSort = $('.js-case-sort'),
        $casesCont = $(".js-case-catalog");
    if (!$caseSort.length && !$casesCont.length) return;

    var $catLink = $caseSort.find('.js-cSorting-cat'),
        $cBtn = $caseSort.find('.js-case-btn'),
        $casesContInner  = $(".js-case-catalog-inner"),
        $cases = $casesCont.find('.js-case-wr'),
        $currentCases , //= $cases,
        $svgMain = $cBtn.find('.js-case-btn__main'),
        $svgMainPaths = $svgMain.find('path'),
        $svgNormal = $cBtn.find('.js-case-btn__normal'),
        $svgNormalPaths = $svgNormal.find('path'),
        svgFinal = $cBtn.find('.js-case-btn__final'),
        svgFinalPaths = svgFinal.find('path'),
        svgAnimTime = 0.6,
        //catalogAnim = 600,
        isotope;

    function setClose() {
        for (var i = 0; i < $svgMainPaths.length; i++) {
            TweenMax.to($svgMainPaths[i], svgAnimTime, {morphSVG: svgFinalPaths[i]});
        }
    }

    function setNormal() {
        for (var i = 0; i < $svgMainPaths.length; i++) {
            TweenMax.to($svgMainPaths[i], svgAnimTime, {morphSVG: $svgNormalPaths[i]});
        }
    }

    $cBtn.click(function () {
        var status = $caseSort.hasClass('_mob-sorting-open');
        if (status) {
            $caseSort.removeClass('_mob-sorting-open');
            setNormal();
        } else {
            $caseSort.addClass('_mob-sorting-open');
            setClose();
        }
    })

    isotope = $casesContInner.isotope({
        itemSelector: '.js-case-wr',
        columnWidth: '.js-case-wr',
        percentPosition: true,
        layoutMode: 'packery',
        stagger: 20,
        //initLayout: false
    });


/* Дохлый номер с выравниванием колонок по высоте.
    function currentCases(laidOutItems){
        $currentCases = [];

        $.each(laidOutItems, function(i){
            $currentCases.push(
                $( this.element)
            );
        });
    }

    function equelHeights(){
        var groupingArray = {},
            groupI = 0,
            currentPoints = 0,
            realWidth, //'20%' , //laidOutItems.not('._double').eq(0).getWidthInPercent(), //$cases.not('._double').eq(0).getWidthInPercent(),
            casePointsLimit;

        $.each($currentCases, function(){
            var $thisCase = $(this).not('._double');

            if($thisCase.length ){
               realWidth = $thisCase.getWidthInPercent();
            }
        });


        //currentPoints - перечисляя предметы прибавляем 1/2 поинта,
        // на разных разрешениях сбрасывается до 0 в зависимости от ширины колонки.

        if(realWidth == '20%'){
            casePointsLimit = 5;
        } else if(realWidth == '25%'){
            casePointsLimit = 4;
        }if(realWidth == '33%'){
            casePointsLimit = 3;
        }if(realWidth == '50%'){
            casePointsLimit = 2;
        }

        console.log('casePointsLimit   '+casePointsLimit)
        console.log($currentCases)

        // создание групп-строк
        //$cases.filter(':visible')
        $.each($currentCases,function(){
            var $thisCase = $(this),
                casePoint = 1;

            if( $thisCase.hasClass('_double')){
                casePoint = 2;
            }

            currentPoints += casePoint;


            if( groupI in groupingArray){

            }else{
                groupingArray[groupI] = []
            }

            groupingArray[groupI].push($thisCase);

            if( currentPoints >= casePointsLimit){
                currentPoints = 0;
                groupI += 1;
            }

        });

        //console.log(groupingArray)
        // Выставление высоты
        $.each(groupingArray, function(){
            var resultHeight = 0;

            $.each(this, function(){
                var h = $(this).find('.case').outerHeight();

                if( h > resultHeight) resultHeight = h;
            });

            $.each(this, function(){
                $(this).find('.case').css('min-height',resultHeight);
            });
            console.log($(this).length)
        });

    }

*/

    function setHeight(){
        var maxH = 0;

        $.each($cases.filter(':visible'),function(){
            var thisH = $(this).outerHeight();
            if(maxH < thisH){
                maxH = thisH;
            }
        });
        $cases.css('min-height', maxH);
    }

    $catLink.bind('click', function () {
        var $this = $(this),
            dataSortType = $this.data('sort-type'),
            $targetCases = $cases.filter('[data-sort-type="' + dataSortType + '"]'),
            $excludeCases = $cases.not($targetCases),
            filterValue = '[data-sort-type="' + dataSortType + '"]';

        if( !dataSortType){
            filterValue = '.js-case-wr';
        }
        $catLink.removeClass('_active');
        $this.addClass('_active');

        /*
        onSort(
            $excludeCases,
            $targetCases
        );*/

        //$cases.css('min-height', '')

        isotope.isotope({'filter': filterValue });

    });


    isotope.on( 'arrangeComplete', function( event, laidOutItems ){
        //currentCases(laidOutItems);
        //equelHeights();
        setHeight();
    });

    setHeight();

    isotope.isotope('arrange');

    $W.resize(function(){
        //equelHeights();
        setHeight();
    })
});