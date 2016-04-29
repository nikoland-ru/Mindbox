$(function () {
    var $caseSort = $('.js-case-sort'),
        $casesCont = $(".js-case-catalog");
    if (!$caseSort.length && !$casesCont.length) return;

    var $catLink = $caseSort.find('.js-cSorting-cat'),
        $cBtn = $caseSort.find('.js-case-btn'),
        $casesContInner  = $(".js-case-catalog-inner"),
        $cases = $casesCont.find('.js-case-wr'),
        //$visibleCases = $cases,
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
        layoutMode: 'fitRows',
        stagger: 20
    });

    function equelHeights(){
        var groupingArray = {};

        $cases.each(function(){
            var $thisCase = $(this),
                //thHeight = $thisCase.height(),
                offset = $thisCase.offset().top.toFixed(0);

            if( offset in groupingArray){

            }else{
                groupingArray[offset] = []
            }

            groupingArray[offset].push($thisCase);

        });


        $.each(groupingArray, function(){
            var resultHeight = 0;

            $.each(this, function(){
                var h = $(this).find('.case').outerHeight();


                if( h > resultHeight) resultHeight = h;
            });

            $.each(this, function(){console.log(resultHeight)
                $(this).find('.case').css('min-height',resultHeight);
            });



        })
    }

    equelHeights();

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

        isotope.isotope({'filter': filterValue });

    });

    isotope.on( 'arrangeComplete', function( event, laidOutItems ){
        equelHeights();
    });

    $W.resize(function(){
        equelHeights();
    })
});