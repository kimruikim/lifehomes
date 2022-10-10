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

});
