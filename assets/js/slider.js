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

    $("#main-slider").slick({
        fade: true,
        speed: 2000,
        autoplaySpeed: 2000,
        arrows: false,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        pauseOnHover: false
    });

    $("#main-slider_s").slick({
        fade: true,
        speed: 3000,
        autoplaySpeed: 3000,
        arrows: false,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        pauseOnHover: false
    });

    $("#sponsorship-slider").slick({
        autoplay: true, // 自動でスクロール
        autoplaySpeed: 3000, // 自動再生のスライド切り替えまでの時間を設定
        dots: true,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 750,
                settings: {
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    autoplay: true,
                    autoplaySpeed: 0,　//隣あう画像のスライドするまでの間隔時間
                    speed: 10000,
                    dots: false,
                    arrows: false,
                    pauseOnFocus: false,
                    pauseOnHover: false,
                    adaptiveHeight: true,
                    cssEase: 'linear'//開始から終了まで一定に変化する
                }
            }
        ]
    });
    $('#sponsorship-slider').on('touchmove', function(event, slick, currentSlide, nextSlide){
        $('#sponsorship-slider').slick('slickPlay');
    });

    $("#support-slider").slick({
        autoplay: true, // 自動でスクロール
        autoplaySpeed: 3000, // 自動再生のスライド切り替えまでの時間を設定
        dots: true,
        infinite: true,
        slidesToShow: 9,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 750,
                settings: {
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    autoplay: true,
                    autoplaySpeed: 0,　//隣あう画像のスライドするまでの間隔時間
                    speed: 10000,
                    dots: false,
                    arrows: false,
                    pauseOnFocus: false,
                    pauseOnHover: false,
                    adaptiveHeight: true,
                    cssEase: 'linear'//開始から終了まで一定に変化する
                }
            }
        ]
    });

});
