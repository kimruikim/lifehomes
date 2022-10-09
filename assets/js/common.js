$(function(){
    const CLASSNAME = "-visible";
    const TIMEOUT = 1000;
    const $target = $(".b-mainTitle .cell");

    setTimeout(() => {
        $target.addClass(CLASSNAME);
    }, TIMEOUT);

    // ×を押すと閉じる
    $("#js_floatingBnr_close").on("click", function() {
        $("#js_floatingBnr").fadeOut(300);
    });
    $("#js_floatingBnr_close__sp").on("click", function() {
        $("#js_floatingBnr__sp").fadeOut(300);
    });

    // 途中で追従バナーを固定
    $(window).on("scroll", function() {
        const bodyHeight = $(document).height();
        const scrollPosition = $(window).height() + $(window).scrollTop();
        const footerHeight = $("footer").innerHeight();

        if($(window).scrollTop() > 20) {
            $('.l-header').addClass('ac');
            let src = $('.l-header').find('.pc').attr('src').replace('logo.png', 'logo_s.png');
            $('.l-header').find('.pc').attr('src', src);
        } else {
            $('.l-header').removeClass('ac');
            let src = $('.l-header').find('.pc').attr('src').replace('logo_s.png', 'logo.png');
            $('.l-header').find('.pc').attr('src', src);
        }

    });

    /* ハンバーガ動作 */
    const ham = $('#js-hamburger');
    const nav = $('.global-navi');
    ham.on('click', function () { //ハンバーガーメニューをクリックしたら
        ham.toggleClass('ac'); // ハンバーガーメニューにactiveクラスを付け外し
        nav.toggleClass('ac'); // ナビゲーションメニューにactiveクラスを付け外し
    });
});

