function scrollTo(e,t,n){if(e){var o="number"!=typeof e?e.offset().top:e,t=t||700;n||(o-=$(".js-header").outerHeight()),$("html,body").animate({scrollTop:o},t)}}function toggleClass(e,t,n){var o=$(e),i=o.hasClass(t);i?o.removeClass(t):o.addClass(t),n&&n(i)}$(function(){function e(){for(var e=0;e<d.length;e++)TweenMax.to(d[e],g,{morphSVG:h[e]})}function t(){for(var e=0;e<d.length;e++)TweenMax.to(d[e],g,{morphSVG:u[e]})}function n(){var e={};l.each(function(){var t=$(this),n=t.offset().top.toFixed(0);n in e||(e[n]=[]),e[n].push(t)}),$.each(e,function(){var e=0;$.each(this,function(){var t=$(this).find(".case").outerHeight();t>e&&(e=t)}),$.each(this,function(){console.log(e),$(this).find(".case").css("min-height",e)})})}var o=$(".js-case-sort"),i=$(".js-case-catalog");if(o.length||i.length){var s,a=o.find(".js-cSorting-cat"),r=o.find(".js-case-btn"),c=$(".js-case-catalog-inner"),l=i.find(".js-case-wr"),f=r.find(".js-case-btn__main"),d=f.find("path"),p=r.find(".js-case-btn__normal"),u=p.find("path"),m=r.find(".js-case-btn__final"),h=m.find("path"),g=.6;r.click(function(){var n=o.hasClass("_mob-sorting-open");n?(o.removeClass("_mob-sorting-open"),t()):(o.addClass("_mob-sorting-open"),e())}),s=c.isotope({itemSelector:".js-case-wr",columnWidth:".js-case-wr",percentPosition:!0,layoutMode:"fitRows",stagger:20}),n(),a.bind("click",function(){var e=$(this),t=e.data("sort-type"),n=l.filter('[data-sort-type="'+t+'"]'),o=(l.not(n),'[data-sort-type="'+t+'"]');t||(o=".js-case-wr"),a.removeClass("_active"),e.addClass("_active"),s.isotope({filter:o})}),s.on("arrangeComplete",function(e,t){n()}),$W.resize(function(){n()})}}),$(function(){!function(e){e.fn.priceCalc=function(t){e(this).each(function(){function t(e){for(var t=0;t<=u.length;t++)if(e<u[t].value)return void(o=u[t].options)}function n(){o.price?(s.removeClass("_custom-pricing"),a.text(o.price)):s.addClass("_custom-pricing"),r.text(o.usersString)}var o,i,s=e(this),a=s.find(".js-priceCalc_itog"),r=s.find(".js-priceCalc_top-node"),c=s.find(".js-priceCalc_ranges"),l=(s.find(".js-priceCalc_input"),s.find(".js-priceCalc__options-toggle")),f=s.find(".js-priceCalc__options"),d=(s.data("step")||50,s.data("min-value")-1),p=s.data("max-value")-1,u=_GLOB.priceRangeSettings,m={min:d,"1%":[d,5e4],"20%":[5e5,1e5],"40%":[1e6,2e5],"60%":[2e6,4e5],"80%":[4e6,5e5],max:p};if(!a.length){var h=s.data("itog-target");a=e(h)}noUiSlider.create(c[0],{start:d,connect:!1,range:m}),i=c[0].noUiSlider,i.on("update",function(e,o){t(e[0]),n(),console.log(e[0])}),l.bind("click",function(e){f.slideToggle(),e.preventDefault()})})}}(jQuery)}),$(function(){var e=$(".js-priceCalc");e.length&&e.priceCalc()}),$(function(){function e(){var e=$W.scrollTop();e>10?$B.addClass("_scrolled"):$B.removeClass("_scrolled")}var t=$(".js-header");t.length&&(e(),$W.scroll(function(){e()}))}),$(function(){function e(){for(var e=0;e<s.length;e++)TweenMax.to(s[e],o,{morphSVG:l[e]})}function t(){for(var e=0;e<s.length;e++)TweenMax.to(s[e],o,{morphSVG:r[e]})}var n=$(".js-header-menu-btn");if(n.length){var o=.4,i=n.find(".js-header-menu-btn__main"),s=i.find("path"),a=n.find(".js-header-menu-btn__normal"),r=a.find("path"),c=n.find(".js-header-menu-btn__final"),l=c.find("path");n.click(function(){var n=$B.hasClass("_mob-menu-open");n?($B.removeClass("_mob-menu-open"),t()):($B.addClass("_mob-menu-open"),e())})}}),$(function(){function e(){var e=t.data("state"),i=1==e?2:1,s=1==i?"Навести порядок":"Вернуть беспорядок";o.removeClass("_active").eq(i-1).addClass("_active"),n.text(s),t.data("state",i)}var t=$(".js-before-after");if(t.length){var n=t.find(".js-before-after_btn"),o=t.find(".js-before-after_tab");n.bind("click",function(){e()})}}),$(function(){function e(){var e=parseInt($(".js-header").height()),n=parseInt(t.outerHeight()),o=t.offset().top,i=o+n,s=$W.scrollTop();s>=o&&.9*i>s+e&&t.addClass("_animate")}var t=$(".js-index-promo");t.length&&(e(),$W.bind("scroll resize",function(){var t=$W.width();_GLOB.breakpoints.sm<t&&e()}))}),$(function(){var e=$(".js-gall");if(e.length){var t={},n=0,o=$(".js-pswp")[0],i={index:0};$.each(e,function(){var e,o,i=$(this),s=i.data("gall-gr"),a=i.attr("href")||i.data("href"),r=i.find("img");s||(s=n,i.data("gall-gr",n),n++),t[s]||(t[s]=[]),r.length&&(e=r[0].naturalWidth,o=r[0].naturalHeight),t[s].push({src:a,w:e||600,h:o||400})}),$D.on("click",".js-gall",function(n){var s,a=$(this),r=a.data("gall-gr");a.data("href")||a.attr("href");return i.index=e.filter('[data-gall-gr="'+r+'"]').index(a),s=new PhotoSwipe(o,PhotoSwipeUI_Default,t[r],i),s.init(),n.preventDefault(),!1})}}),$(function(){var e=$(".js-video-popup");e.length&&e.magnificPopup({type:"iframe",mainClass:"mfp-fade",removalDelay:160,preloader:!1,fixedContentPos:!1,closeMarkup:'<span class="mfp-close iconic iconic--cross2 popup__closer js-popup_closer"></span>'})});var $W=$(window),$D=$(document),$H=$("html"),$B=$("body");if(!_GLOB)var _GLOB={};_GLOB.breakpoints={xl:1800,ll:1500,ls:1380,m:1288,mm:1168,ms:1020,sl:960,sm:860,s:767,ss:630,xs:480},function(e){e.fn.scrollTrigger=function(t){var n=700,t=t||"";e(this).each(function(){var o=e(this);t.speed&&(n=t.speed),o.bind("click",function(i){var s=o.attr("href")||o.data("href");"number"!=typeof s&&(s=e(s),t.margin&&(s=s.offset().top-parseInt(s.css("margin-top")))),t&&t.callbackBefore&&t.callbackBefore(),scrollTo(s,n),t&&t.callbackAfter&&t.callbackAfter(),i.preventDefault()})})}}(jQuery),function(e){e.fn.tabs=function(){e(this).each(function(){function t(e){i.removeClass("_active").eq(e).addClass("_active"),o.removeClass("_active").eq(e).addClass("_active")}var n=e(this),o=n.find(".js-tabs-btn"),i=n.find(".js-tabs-tab");o.bind("click",function(){var n=e(this).index();t(n)})})}}(jQuery),$(function(){$(".js-scroll-trigger").scrollTrigger()}),$(function(){var e=$(".js-tabs");e.length&&e.tabs({})}),$(function(){function e(){n=new ymaps.Map(t,{center:c,zoom:15,controls:[]}),o=new ymaps.Placemark(n.getCenter(),{hintContent:"Maindbox"},{iconLayout:"default#image",iconImageHref:"../images/marker.png",iconImageSize:[64,62],iconImageOffset:[-23,-62]}),routBel=new ymaps.GeoObject({geometry:{type:"LineString",coordinates:[[55.777,37.586],[55.7766,37.5855],[55.7772,37.584],[55.7787,37.5809],[55.7794,37.58],[55.7809,37.5768],[55.784,37.5703],[55.7845,37.5711]]},properties:{hintContent:"Пешком от м. Белорусская"}},{strokeColor:"#62be1f",strokeWidth:5}),routDin=new ymaps.GeoObject({geometry:{type:"LineString",coordinates:[[55.7896,37.5586],[55.7866,37.5661],[55.7853,37.5675],[55.784,37.5703],[55.7845,37.5711]]},properties:{hintContent:"Пешком от м. Белорусская"}},{strokeColor:"#62be1f",strokeWidth:5}),n.geoObjects.add(o),n.controls.add("zoomControl",{"float":"none",position:{top:300,right:20}}),n.behaviors.disable("scrollZoom")}var t="js-contacts-map";if($("#"+t).length){var n,o,i=$(".js-contacts-map-btn"),s=$(".js-rout-def"),a=$(".js-rout-bel"),r=$(".js-rout-din"),c=[55.784597,37.570815];ymaps.ready(e),s.bind("click",function(){n.geoObjects.remove(routBel).remove(routDin),i.find(".btn").removeClass("_active"),s.addClass("_active")}),a.bind("click",function(){n.geoObjects.add(routBel).remove(routDin),i.find(".btn").removeClass("_active"),a.addClass("_active")}),r.bind("click",function(){n.geoObjects.add(routDin).remove(routBel),i.find(".btn").removeClass("_active"),r.addClass("_active")})}}),$(function(){function e(){n=new ymaps.Map(t,{center:i,zoom:16,controls:[]}),o=new ymaps.Placemark(n.getCenter(),{hintContent:"Maindbox"},{iconLayout:"default#image",iconImageHref:"../images/marker.png",iconImageSize:[64,62],iconImageOffset:[-23,-62]}),n.geoObjects.add(o),n.controls.add("zoomControl",{"float":"none",position:{top:50,right:15}}),n.behaviors.disable("scrollZoom")}var t="js-mob-def";if($("#"+t).length){var n,o,i=[55.784597,37.570815];ymaps.ready(e)}}),$(function(){function e(){n=new ymaps.Map(t,{center:i,zoom:15,controls:[]}),o=new ymaps.Placemark(n.getCenter(),{hintContent:"Maindbox"},{iconLayout:"default#image",iconImageHref:"../images/marker.png",iconImageSize:[64,62],iconImageOffset:[-23,-62]}),routBel=new ymaps.GeoObject({geometry:{type:"LineString",coordinates:[[55.777,37.586],[55.7766,37.5855],[55.7772,37.584],[55.7787,37.5809],[55.7794,37.58],[55.7809,37.5768],[55.784,37.5703],[55.7845,37.5711]]},properties:{hintContent:"Пешком от м. Белорусская"}},{strokeColor:"#62be1f",strokeWidth:5}),n.geoObjects.add(o).add(routBel),n.controls.add("zoomControl",{"float":"none",position:{top:300,right:20}}),n.behaviors.disable("scrollZoom")}var t="js-mob-bel";if($("#"+t).length){var n,o,i=[55.784597,37.570815];ymaps.ready(e)}}),$(function(){function e(){n=new ymaps.Map(t,{center:i,zoom:15,controls:[]}),o=new ymaps.Placemark(n.getCenter(),{hintContent:"Maindbox"},{iconLayout:"default#image",iconImageHref:"../images/marker.png",iconImageSize:[64,62],iconImageOffset:[-23,-62]}),routDin=new ymaps.GeoObject({geometry:{type:"LineString",coordinates:[[55.7896,37.5586],[55.7866,37.5661],[55.7853,37.5675],[55.784,37.5703],[55.7845,37.5711]]},properties:{hintContent:"Пешком от м. Белорусская"}},{strokeColor:"#62be1f",strokeWidth:5}),n.geoObjects.add(o).add(routDin),n.controls.add("zoomControl",{"float":"none",position:{top:300,right:20}}),n.behaviors.disable("scrollZoom")}var t="js-mob-din";if($("#"+t).length){var n,o,i=[55.784597,37.570815];ymaps.ready(e)}}),$(function(){$(".js-mob-map-btn").click(function(){$(this).next("div").slideDown(),$(".js-mob-map-btn").not(this).next("div").slideUp()})}),$(function(){if($map=$(".js-page-contacts .contacts__map"),$map.length){var e=$B.innerHeight()-104;$map.height(e),$W.resize(function(){e=$B.innerHeight()-104,$map.height(e)})}}),$(function(){var e=$(".js-side-popup-btn");if(e.length){var t=$(".js-side-popup"),n=$(".js-side-popup_closer");e.bind("click",function(e){var n=$(this).data("popup-name"),o=t.filter('[data-popup-name="'+n+'"]');o.addClass("_open"),$B.addClass("_side-popup-open"),e.stopPropagation(),$W.bind("click",function(e){var t=$(e.target);t.closest(o).length||(o.removeClass("_open"),$B.removeClass("_side-popup-open"))})}),n.bind("click",function(){var e=$(this).parents(".js-side-popup");e.removeClass("_open"),$B.removeClass("_side-popup-open")})}}),$(function(){var e=$(".js-popup-btn");e.magnificPopup({preloader:!1,type:$(this).data("type")||"inline",closeMarkup:'<span class="mfp-close iconic iconic--cross2 popup__closer js-popup_closer"></span>'})}),function(e){e.fn.customSelector=function(t){e(this).each(function(){function n(){s.toggle(),o.toggleClass("_open")}var o=e(this),i=o.find(".js-selector-current"),s=o.find(".js-selector-options"),a=o.find(".js-selector-input").length?o.find(".js-selector-input"):o.find('input[type="hidden"]'),r={};for(var c in t)r[c]=t[c];i.bind("click",function(t){a.prop("disabled")||(n(),$W.bind("click",function(t){o.hasClass("_open")&&!e(t.target).closest(o).length&&(n(),$D.unbind("click"))}),t.preventDefault())}),s.find(".js-selector-option").bind("click",function(){var t=e(this),o=t.data("option-name")||t.text();if(r.beforeSelect){var c=r.beforeSelect(t,s.find(".js-selector-option"),e.trim(o));if(0==c)return!1}if(i.html(e(this).html()),a&&a.val(o),n(),r.afterSelect){var l=r.afterSelect(t,s.find(".js-selector-option"));if(0==l)return!1}})})}}(jQuery),function(){var e=$(".js-selector");e.length&&e.customSelector({beforeSelect:function(){console.log("before select")}})}(jQuery),$(function(){var e=$(".js-slider-arr--r")[0].outerHTML,t=$(".js-slider-arr--l")[0].outerHTML;_GLOB.slickPrevArrHtml=t,_GLOB.slickNextArrHtml=e}),$(function(){!function(e){e.fn.casesSl=function(t){e(this).each(function(){function t(){var t=0,n=0;i.each(function(){var o,i,s=e(this),a=s.find(".js-cases-sl__col"),r=a.first(),c=r.outerHeight();c>t&&(t=c),a.length>1&&(o=a.last(),i=o.outerHeight(),i>n&&(n=i))}),i.each(function(){var o,i=e(this),s=i.find(".js-cases-sl__col"),a=s.first();a.css("min-height",t),s.length>1&&(o=s.last(),o.css("min-height",n))})}function n(){var t=$W.width(),n=o.width();i.each(function(){var o,i=e(this),l=s;t<=_GLOB.breakpoints.ms&&(l=a),t<=_GLOB.breakpoints.sm&&(l=r),t<=_GLOB.breakpoints.ss&&(l=c),o=i.hasClass("_double")?n*l[1]:n*l[0],i.css("width",o)})}var o=e(this),i=o.find(".cases-slider__col"),s=[.2,.4],a=[.25,.5],r=[.5,1],c=[.5,1];n(),t(),$W.resize(function(){n(),t()}),o.slick({variableWidth:!0,slidesToShow:5,slidesToScroll:2,arrows:!0,dots:!0,swipe:!1,nextArrow:_GLOB.slickNextArrHtml,prevArrow:_GLOB.slickPrevArrHtml,responsive:[{breakpoint:_GLOB.breakpoints.ms,settings:{slidesToShow:4}},{breakpoint:_GLOB.breakpoints.sm,settings:{slidesToShow:2,swipe:!0}},{breakpoint:_GLOB.breakpoints.ss,settings:{slidesToShow:2,swipe:!0}}]})})}}(jQuery)}),$(function(){!function(e){e.fn.examplesSl=function(t){e(this).each(function(){var t=e(this);t.slick({slidesToShow:1,slidesToScroll:1,arrows:!0,dots:!0,swipe:!1,nextArrow:_GLOB.slickNextArrHtml,prevArrow:_GLOB.slickPrevArrHtml,responsive:[{breakpoint:_GLOB.breakpoints.s,settings:{swipe:!0}}]})})}}(jQuery)}),$(function(){!function(e){e.fn.regularSlider=function(t){e(this).each(function(){var t=e(this);t.slick({slidesToShow:1,slidesToScroll:1,arrows:!0,dots:!1,swipe:!1,nextArrow:_GLOB.slickNextArrHtml,prevArrow:_GLOB.slickPrevArrHtml,responsive:[{breakpoint:_GLOB.breakpoints.ls,settings:{dots:!0}},{breakpoint:_GLOB.breakpoints.sm,settings:{dots:!0,swipe:!0}}]})})}}(jQuery)}),$(function(){var e=$(".js-cases-sl");e.length&&e.casesSl()}),$(function(){var e=$(".js-examples-sl");e.length&&e.examplesSl()}),$(function(){var e=$(".js-prod-slider");e.length&&e.regularSlider()}),$(function(){function e(e,n){var o=e.find(".js-slider-arr__main"),i=o.find("path"),s=o.find("circle");if("toHover"==n)for(var a=e.find(".js-slider-arr__final"),r=a.find("path"),c=0;c<i.length;c++)TweenMax.to(i[c],t,{morphSVG:r[c]});if("toNormal"==n)for(var l=e.find(".js-slider-arr__normal"),f=l.find("path"),c=0;c<i.length;c++)TweenMax.to(i[c],t,{morphSVG:f[c]});new TimelineLite;TweenMax.staggerFrom(s,1,{drawSVG:0})}var t=.3;$D.on("mouseenter",".js-slider-arr",function(){e($(this),"toHover")}).on("mouseleave",".js-slider-arr",function(){e($(this),"toNormal")})});