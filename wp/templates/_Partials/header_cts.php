<header>
    <div class="l-header">
        <h1 class="l-logo">
            <a href="/">
                <?php if($page_class == 'top'): ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header/logo.png" alt="ライフホームズ株式会社" class="pc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header/logo_s.png" alt="ライフホームズ株式会社" class="sp">
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header/logo_s.png" alt="ライフホームズ株式会社" class="pc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header/logo_s.png" alt="ライフホームズ株式会社" class="sp">
                <?php endif; ?>
            </a>
        </h1>
        <ul class="global-navi">
<!--            <li class="global-navi__item--><?php //if ($page_class == 'info') echo ' ac' ?><!--">-->
<!--                <a href="/information">-->
<!--                    <span>Information</span>-->
<!--                    <span>お知らせ</span>-->
<!--                </a>-->
<!--            </li>-->
            <li class="global-navi__item<?php if ($page_class == 'works') echo ' ac' ?>">
                <a href="/works">
                    <span>Works</span>
                    <span>実績紹介</span>
                </a>
            </li>
            <li class="global-navi__item<?php if ($page_class == 'company') echo ' ac' ?>">
                <a href="/company">
                    <span>Company</span>
                    <span>会社概要</span>
                </a>
            </li>
            <li class="global-navi__item<?php if ($page_class == 'contact') echo ' ac' ?>">
                <a href="/contact">
                    <span>Contact</span>
                    <span>お問い合わせ</span>
                </a>
            </li>
        </ul>

        <button class="l-header__hamburger hamburger sp" id="js-hamburger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>