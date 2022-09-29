$(function() {
//     //画像の設定
//     var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;
//     if (windowwidth > 768){
//         var responsiveImage = [//PC用の画像
//             { src: '/sub/assets/img/top/slide/slide_1.png'},
//             { src: '/sub/assets/img/top/slide/slide_2.png'},
//             { src: '/sub/assets/img/top/slide/slide_3.png'},
//             { src: '/sub/assets/img/top/slide/slide_4.png'}
//         ];
//     } else {
//         var responsiveImage = [//タブレットサイズ（768px）以下用の画像
//             { src: '/sub/assets/img/top/slide/slide_sp_1.png'},
//             { src: '/sub/assets/img/top/slide/slide_sp_2.png'},
//             { src: '/sub/assets/img/top/slide/slide_sp_3.png'},
//             { src: '/sub/assets/img/top/slide/slide_sp_4.png'}
//         ];
//     }
//
// //Vegas全体の設定
//
//     $('#main-slider').vegas({
//         // delay: 7000,
//         // transition: 'fade',
//         // firstTransition: 'fade',
//         // firstTransitionDuration: 5000,
//         // transitionDuration: 2000,
//         overlay: false, // 画像の上に網線やドットのオーバーレイパターン画像を指定。
//         transition: 'blur',
//         // 切り替わりのアニメーション。http://vegas.jaysalvat.com/documentation/transitions/参照。
//         // fade、fade2、slideLeft、slideLeft2、slideRight、slideRight2、slideUp、slideUp2、slideDown、slideDown2、zoomIn、zoomIn2、zoomOut、zoomOut2、swirlLeft、swirlLeft2、swirlRight、swirlRight2、burnburn2、blurblur2、flash、flash2が設定可能。
//         transitionDuration: 2000, // 切り替わりのアニメーション時間をミリ秒単位で設定
//         delay: 10000, // スライド間の遅延をミリ秒単位で。
//         animationDuration: 20000, // スライドアニメーション時間をミリ秒単位で設定
//         animation: 'kenburns',
//         // スライドアニメーションの種類。http://vegas.jaysalvat.com/documentation/transitions/参照。
//         // kenburns、kenburnsUp、kenburnsDown、kenburnsRight、kenburnsLeft、kenburnsUpLeft、kenburnsUpRight、kenburnsDownLeft、kenburnsDownRight、randomが設定可能。
//         slides: responsiveImage, //画像設定を読む
//     });

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
