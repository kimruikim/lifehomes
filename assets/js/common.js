$(function(){
    headerAutoHeight();

    const CLASSNAME = "-visible";
    const TIMEOUT = 1000;
    const $target = $(".b-mainTitle .cell");

    setTimeout(() => {
        $target.addClass(CLASSNAME);
    }, TIMEOUT);

    $(window).on('load', function() {
        var windowwidth_1 = window.innerWidth || document.documentElement.clientWidth || 0;
        // headerの高さ分、下層のpageに付ける対応
        if (windowwidth_1 > 768){
            // タイトルの高さ処理
            mainImgAutoHeight();
        }
    });
    $(window).on("resize", function (){
        var windowwidth_2 = window.innerWidth || document.documentElement.clientWidth || 0;
        headerAutoHeight();
        if (windowwidth_2 > 768){
            // タイトルの高さ処理
            mainImgAutoHeight();
        }
    });

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

        if (bodyHeight - scrollPosition <= footerHeight) {
            $("#js_floatingBnr").css({
                position: "absolute",
                top: "-230px",
            });
        } else {
            $("#js_floatingBnr").css({
                position: "fixed",
                top: "50%",
            });
        }

        if($(window).scrollTop() > 20) {
            $('.l-header').addClass('ac');
        } else {
            $('.l-header').removeClass('ac');
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


function headerAutoHeight() {
    const headerHeight = $(".l-header").innerHeight();
    $('.under-page').css('padding-top', headerHeight+'px');
}
function mainImgAutoHeight() {
    const titleImgHeight = $("#mainImg").innerHeight() + 50;
    const titleBackHeight = $("#mainImg").innerHeight() - 10;
    $('.b-mainTitle').css('height', titleImgHeight+'px');
    $('#mainTitleBack').css('height', titleBackHeight+'px');
}
