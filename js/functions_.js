
function yandexMap() {
    if ($('#map').length) {
        $.getScript("https://api-maps.yandex.ru/2.0/?load=package.full&amp;lang=ru-RU", function () {
            var myMap,
                myPlacemark;

            function init() {
                myMap = new ymaps.Map("map", {
                    center: [55.895721, 37.502795],
                    zoom: 16
                });

                myPlacemark = new ymaps.Placemark([55.895721, 37.502795], {
                        hintContent: 'МО, г. Химки, 79-й км МКАД., вл.1',
                        balloonContent: '«Левый берег» Оптово-розничная продажа продовольственных товаров'
                    }/*,
                    {
                        iconImageHref: '/img/logo-map.png',
                        iconImageSize: [176, 73],
                        iconImageOffset: [0, 0]
                    }*/
                );

                myMap.geoObjects.add(myPlacemark);
            }

            ymaps.ready(init);
        });
    }
}

(function(){
    var langContainer = $('#lang-select');
    var langListContainer = $('#lang-list');
    var slideSpeed = 300;
    langContainer.hover(function(){
        langListContainer.stop(true, true).slideDown(slideSpeed);
    }, function(){
        langListContainer.stop(true, true).slideUp(slideSpeed);
    });
})();


$(document).ready(function(){

    //yandexMap();

    $('.morewords').dotdotdot();
    // initialization loupe


    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#buttonUp').fadeIn();
        } else {
            $('#buttonUp').fadeOut();
        }
    });

    $('#buttonUp').click(function() {
        $('body,html').animate({scrollTop:0},800);
    });


    $('.burger, .overlay').click(function(){
        $('.burger').toggleClass('clicked');
        $('.overlay').toggleClass('show');
        $('nav').toggleClass('show');
        $('body').toggleClass('overflow');
    });


    $('.slider-main').slick({
        arrows: false,
        infinite: true,
        dots: true,
        autoplaySpeed: 5000,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        centerMode: false,
        variableWidth: false
    });
    $('.slider-brends').slick({
        //arrows: true,
        infinite: true,
        autoplaySpeed: 5000,
        speed: 300,
        slidesToShow: 4,
        adaptiveHeight: true,
        centerMode: false,
        variableWidth: false,
        prevArrow: '<div  class="arrow-prev"><span class="icon icon-left-open icon_md"></span></div>',
        nextArrow: '<div  class="arrow-next"><span class="icon icon-right-open icon_md"></span></div>',

        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    dots: false
                }
            },
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 4,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 667,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 420,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });
});