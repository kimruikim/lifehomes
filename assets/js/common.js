$(function(){
    /* ハンバーガ動作 */
    const ham = $('#js-hamburger');
    const nav = $('.global-navi');
    ham.on('click', function () { //ハンバーガーメニューをクリックしたら
        ham.toggleClass('ac'); // ハンバーガーメニューにactiveクラスを付け外し
        nav.toggleClass('ac'); // ナビゲーションメニューにactiveクラスを付け外し
    });
});

