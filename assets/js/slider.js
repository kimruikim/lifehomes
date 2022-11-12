$(function() {

    /**
     * [TOP-実績] スライダー
     */
    $("#works-top-slider").slick({
        centerMode: true,
        centerPadding: '3%',
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 1000,
        infinite: true,
        responsive: [
            {
                breakpoint: 750,
                settings: {
                    centerPadding: '20%',
                }
            }
        ]
    });

    $('.works-slider__main').slick({
        arrows:false,
        asNavFor:'.works-slider__thumb',
    });
    $('.works-slider__thumb').slick({
        asNavFor:'.works-slider__main',
        focusOnSelect: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    arrows:false,
                    adaptiveHeight: true
                }
            }
        ]
    });

});
