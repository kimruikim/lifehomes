$(function(){
    // 途中で追従バナーを固定
    const l_head = $('.l-header');
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 20) {
            l_head.addClass('ac');
            let src = l_head.find('.pc').attr('src').replace('logo.png', 'logo_s.png');
            l_head.find('.pc').attr('src', src);
        } else {
            l_head.removeClass('ac');
            let src = l_head.find('.pc').attr('src').replace('logo_s.png', 'logo.png');
            l_head.find('.pc').attr('src', src);
        }
    });
});