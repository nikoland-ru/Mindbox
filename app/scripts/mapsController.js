// ymaps.ready(function () {
//     var myMap = new ymaps.Map('mapContacts', {
//         center: [55.784597, 37.570815],
//         zoom: 15
//     },
//     myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
//         hintContent: 'Maindbox',
//         balloonContent: 'Maindbox'
//     }, {
//         iconLayout: 'default#image',
//         iconImageHref: '../images/marker.png',
//         iconImageSize: [64, 62],
//         iconImageOffset: [-23, -62]
//     });

//     // myMap.controls.add('zoomControl', {float 'none', position {top 215, right 20}});
//     myMap.behaviors.disable('scrollZoom');

//     myMap.geoObjects.add(myPlacemark);
// });

$(function () {

    var mapId = 'js-contacts-map';
    if (!$('#' + mapId).length) return;

    var $btnWr = $('.js-contacts-map-btn'),
        $btnDef = $('.js-rout-def'),
        $btnBel = $('.js-rout-bel'),
        $btnDin = $('.js-rout-din'),
        initCoords = [55.784597, 37.570815],
        myMap,
        myPlacemark,
        myGeoObject;

    function init() {

        myMap = new ymaps.Map(mapId, {
            center: initCoords,
            zoom: 15,
            controls: []
        });

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'Maindbox'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '../images/marker.png',
            iconImageSize: [64, 62],
            iconImageOffset: [-23, -62]
        });

        routBel = new ymaps.GeoObject({
            // Описываем геометрию геообъекта.
            geometry: {
                type: "LineString",
                coordinates: [
                    [ 55.7770, 37.5860 ], 
                    [ 55.7766, 37.5855 ],
                    [ 55.7772, 37.5840 ], 
                    [ 55.7787, 37.5809 ], 
                    [ 55.7794, 37.5800 ], 
                    [ 55.7809, 37.5768 ], 
                    [ 55.7840, 37.5703 ], 
                    [ 55.7845, 37.5711 ]
                ]
            },
            // Описываем свойства геообъекта.
            properties:{
                hintContent: "Пешком от м. Белорусская"
            }
        }, {
            strokeColor: "#62be1f",
            strokeWidth: 5
        });

        routDin = new ymaps.GeoObject({
            // Описываем геометрию геообъекта.
            geometry: {
                type: "LineString",
                coordinates: [
                    [ 55.7896, 37.5586 ], 
                    [ 55.7866, 37.5661 ], 
                    [ 55.7853, 37.5675 ], 
                    [ 55.7840, 37.5703 ], 
                    [ 55.7845, 37.5711 ]
                ]
            },
            // Описываем свойства геообъекта.
            properties:{
                hintContent: "Пешком от м. Белорусская"
            }
        }, {
            strokeColor: "#62be1f",
            strokeWidth: 5
        });

        myMap.geoObjects.add(myPlacemark);
        myMap.controls.add('zoomControl', {float: 'none', position: {top: 300, right: 20}});
        myMap.behaviors.disable('scrollZoom');
    }

    ymaps.ready(init);

    $btnDef.bind('click', function () {
        myMap.geoObjects.remove(routBel).remove(routDin);
        $btnWr.find('.btn').removeClass('_active');
        $btnDef.addClass("_active");
    })

    $btnBel.bind('click', function () {
        myMap.geoObjects.add(routBel).remove(routDin);
        $btnWr.find('.btn').removeClass('_active');
        $btnBel.addClass("_active");
    })

    $btnDin.bind('click', function () {
        myMap.geoObjects.add(routDin).remove(routBel);
        $btnWr.find('.btn').removeClass('_active');
        $btnDin.addClass("_active");
    })
});

$(function () {

    var mapId = 'js-mob-def';
    if (!$('#' + mapId).length) return;

    var initCoords = [55.784597, 37.570815],
        myMap,
        myPlacemark;

    function init() {

        myMap = new ymaps.Map(mapId, {
            center: initCoords,
            zoom: 16,
            controls: []
        });

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'Maindbox'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '../images/marker.png',
            iconImageSize: [64, 62],
            iconImageOffset: [-23, -62]
        });


        myMap.geoObjects.add(myPlacemark);
        myMap.controls.add('zoomControl', {float: 'none', position: {top: 50, right: 15}});
        myMap.behaviors.disable('scrollZoom');
    }

    ymaps.ready(init);

});

$(function () {

    var mapId = 'js-mob-bel';
    if (!$('#' + mapId).length) return;

    var initCoords = [55.784597, 37.570815],
        myMap,
        myPlacemark,
        myGeoObject;

    function init() {

        myMap = new ymaps.Map(mapId, {
            center: initCoords,
            zoom: 15,
            controls: []
        });

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'Maindbox'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '../images/marker.png',
            iconImageSize: [64, 62],
            iconImageOffset: [-23, -62]
        });

        routBel = new ymaps.GeoObject({
            // Описываем геометрию геообъекта.
            geometry: {
                type: "LineString",
                coordinates: [
                    [ 55.7770, 37.5860 ], 
                    [ 55.7766, 37.5855 ],
                    [ 55.7772, 37.5840 ], 
                    [ 55.7787, 37.5809 ], 
                    [ 55.7794, 37.5800 ], 
                    [ 55.7809, 37.5768 ], 
                    [ 55.7840, 37.5703 ], 
                    [ 55.7845, 37.5711 ]
                ]
            },
            // Описываем свойства геообъекта.
            properties:{
                hintContent: "Пешком от м. Белорусская"
            }
        }, {
            strokeColor: "#62be1f",
            strokeWidth: 5
        });

        myMap.geoObjects.add(myPlacemark).add(routBel);
        myMap.controls.add('zoomControl', {float: 'none', position: {top: 300, right: 20}});
        myMap.behaviors.disable('scrollZoom');
    }

    ymaps.ready(init);

});

$(function () {

    var mapId = 'js-mob-din';
    if (!$('#' + mapId).length) return;

    var initCoords = [55.784597, 37.570815],
        myMap,
        myPlacemark,
        myGeoObject;

    function init() {

        myMap = new ymaps.Map(mapId, {
            center: initCoords,
            zoom: 15,
            controls: []
        });

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'Maindbox'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '../images/marker.png',
            iconImageSize: [64, 62],
            iconImageOffset: [-23, -62]
        });

        routDin = new ymaps.GeoObject({
            // Описываем геометрию геообъекта.
            geometry: {
                type: "LineString",
                coordinates: [
                    [ 55.7896, 37.5586 ], 
                    [ 55.7866, 37.5661 ], 
                    [ 55.7853, 37.5675 ], 
                    [ 55.7840, 37.5703 ], 
                    [ 55.7845, 37.5711 ]
                ]
            },
            // Описываем свойства геообъекта.
            properties:{
                hintContent: "Пешком от м. Белорусская"
            }
        }, {
            strokeColor: "#62be1f",
            strokeWidth: 5
        });

        myMap.geoObjects.add(myPlacemark).add(routDin);
        myMap.controls.add('zoomControl', {float: 'none', position: {top: 300, right: 20}});
        myMap.behaviors.disable('scrollZoom');
    }

    ymaps.ready(init);

});

$(function () {
    $('.js-mob-map-btn').click(function(){
        $(this).next('div').slideDown();
        $('.js-mob-map-btn').not(this).next('div').slideUp();
    });
});

$(function () {
    $map = $('.js-page-contacts .contacts__map');
    if (!$map.length) return;

    var mapHeight = $B.innerHeight() - 104;
    $map.height(mapHeight);

    $W.resize(function(){
        mapHeight = $B.innerHeight() - 104;
        $map.height(mapHeight);
    });
});