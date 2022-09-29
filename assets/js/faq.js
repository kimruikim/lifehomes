$(function(){
    $('.faq-box__q a').click(function(){
        $(this).parent().parent().toggleClass("open");
        return false;
    });
});