<footer>
    <div class="l-footer flex-list">
        <div class="l-footer__logo">
            <a href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header/logo.png" alt="ライフホームズ株式会社">
            </a>
        </div>
        <div class="l-footer__menu">
            <div class="flex-list">
                <ul class="f-menuList">
                    <li class="f-menuList__item">-&nbsp;&nbsp;<a href="/">トップページ</a></li>
<!--                    <li class="f-menuList__item">-&nbsp;&nbsp;<a href="/information">お知らせ</a></li>-->
                    <li class="f-menuList__item">-&nbsp;&nbsp;<a href="/works">実績紹介</a></li>
                    <li class="f-menuList__item">-&nbsp;&nbsp;<a href="/company">会社概要</a></li>
                    <li class="f-menuList__item">-&nbsp;&nbsp;<a href="/contact">お問い合わせ</a></li>
                </ul>
                <a href="https://www.instagram.com/lifehomesokinawa/?hl=ja"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer/insta_icon.png" alt="インスタグラム"></a>
            </div>
            <p>〒900-0003 沖縄県那覇市安謝1-22-56<br>
                TEL 098-867-3530  FAX 098-867-3540</p>
        </div>
    </div>
</footer>
<?php do_action('lightning_footer_after'); ?>
<?php wp_footer();?>
</body>
</html>