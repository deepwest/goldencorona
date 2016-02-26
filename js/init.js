;
'use strict';
$(function() {

    $('.us_li').on('click', function(e) {
        $(this).siblings('ul').slideToggle();
        e.preventDefault();
    });

    if ($('#mapa').length) {
        function initialize() {
            var mapCanvas = document.getElementById('map-canvas');
            var mapOptions = {
                center: new google.maps.LatLng(49.8129619, 24.0587831),
                zoom: 19,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(mapCanvas, mapOptions);
        }
        ;
        google.maps.event.addDomListener(window, 'load', initialize);
    };

    $('.us_colors').on('click', function() {
        $('.js_innerul').slideUp();
        $('.crown').fadeOut(1500, function() {
            $.post('/colors', {}, function(data) {
                $('.crown').html(data);
            });
            $('.crown').fadeIn(1500);
        });
    });

    $('.js_goods').on('click', function() {
        $('.js_innerul').slideUp();
        $('.crown').fadeOut(1500, function() {
            $.post('/product', {}, function(data) {
                $('.crown').html(data);
            });
            $('.crown').fadeIn(1500);
        })
    });

    $('.js_cotalog').on('click', function(e) {
        $('.js_innerul').slideUp();
        $('.crown').fadeOut(1500, function() {
            $.post('/catalog', {}, function(data) {
                $('.crown').html(data);
            });
            $('.crown').fadeIn(1500);
        })
    });

    $('.js_contas').on('click', function(e) {
        $('.js_innerul').slideUp();
        $('.crown').fadeOut(1500, function() {
            $.post('/contact', {}, function(data) {
                $('.crown').html(data);
            });
            $('.crown').fadeIn(1500);
        })
    });

    $('body').on('click', '.js_left', function() {
        var m = $('#links').find('.js_inside:visible');
        if (m.prev().is('.js_inside')) {
            m.fadeOut(300, function() {
                m.prev().fadeIn(600);
            });
        }
    });

    $('body').on('click', '.js_right', function() {
        var m = $('#links').find('.js_inside:visible');
        if (m.next().is('.js_inside')) {
            m.fadeOut(300, function() {
                m.next().fadeIn(600);
            });
        }
    });

    if($('.js-slider').length){
    $('.js-slider').on('click',function(){
        var path = $(this).attr('src');
        $('.js-slider-show').attr('src',path);
    });
    }

    var windowHeight = $(document).height();
    var windowWidth = $(document).width();
    var bodyTag = document.getElementsByTagName('body')[0];

    if ($('.js-adjust-hight').length) {
        $('.js-adjust-hight').css("height", (windowHeight - 70) + "px");
    }

    if (windowWidth < 1125) {
        bodyTag.style.backgroundSize = "auto " + windowHeight + "px";
    }

        $(this).bind("contextmenu", function(e) {
            e.preventDefault();
        });


});
