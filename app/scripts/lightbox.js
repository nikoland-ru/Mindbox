// gallery links
$(function () {
    var $gallLinks = $('.js-gall');
    if (!$gallLinks.length) return;

    var groupArray = {},
        unrelatedGallsCounter = 0,
        $pswpElement = $('.js-pswp')[0];

    var defaultOptions = {
        index: 0
    };

    $.each($gallLinks, function () {
        var $this = $(this),
            dataRel = $this.data('gall-gr'),
            dataHref = $this.attr('href') || $this.data('href'),
            dataWidth = $this.data('width'),
            dataHeight = $this.data('height'),
            $img = $this.find('img'),
            imgWidth,
            imgHeight;

        // Создание групп картинок
        if(!dataRel){
            dataRel = unrelatedGallsCounter;
            $this.data('gall-gr', unrelatedGallsCounter);
            unrelatedGallsCounter++;
        }

        // Если группы нет, то отталкиваемся от номера
        if (!groupArray[dataRel]) {
            groupArray[dataRel] = [];
        }

        // Устанавливаем пропорции картинки
        if($img.length){
            imgWidth = $img[0].naturalWidth  ;
            imgHeight = $img[0].naturalHeight  ;
        }

        groupArray[dataRel].push({
            src: dataHref,
            w: dataWidth || imgWidth  || 600,
            h: dataHeight || imgHeight || 400
        });

    });


    $D.on('click','.js-gall',function (e) {
        var $this = $(this),
            thisRel = $this.data('gall-gr'),
            href = $this.data('href') || $this.attr('href'),
            gallery;

        defaultOptions.index = $gallLinks.filter('[data-gall-gr="' + thisRel + '"]').index($this);

        gallery = new PhotoSwipe($pswpElement, PhotoSwipeUI_Default, groupArray[thisRel], defaultOptions);
        gallery.init();

        e.preventDefault();
        return false;
    });

});

