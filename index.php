<?php
$page_class = 'top';
$title = 'TOP';

$add_css_area = <<< EOD
<!-- スライダー/CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"> <!-- FontAwesome/CSS -->

<link rel="stylesheet" href="/assets/css/top.css"> <!-- TOP/CSS -->
EOD;

$add_js_area = <<< EOD
<!-- スライダー/JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="/assets/js/slider.js"></script>
<script src="/assets/js/top.js"></script>
EOD;

include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/header.php'; ?>

    <main>

        <section class="b-mainImg">
            <div>
                <p>生活が豊かになる <br class="sp">建築＆リフォーム<span>We will do our best to support you.</span></p>
            </div>
        </section>

        <section class="cts" id="sec01">
            <div class="b-mainTitle">
                <h2>Information</h2>
                <span>ライフホームズからのお知らせ</span>
            </div>
            <ul class="news-list">
                <li class="news-list__item flex-list">
                    <span class="date-icon">2022.08.20</span>
                    <span class="category-icon"><strong>NEWS</strong></span>
                    <a class="text-overflow">お知らせをここに表示。お知らせをここに表示ホームページを公開いたしました。お知らせをここに表示。ホームページを公開いたしました。</a>
                </li>
                <li class="news-list__item flex-list">
                    <span class="date-icon">2022.08.20</span>
                    <span class="category-icon"><strong>INFO</strong></span>
                    <p class="text-overflow">お知らせをここに表示。ホームページを公開いたしました。お知らせをここに表示。ホームページを公開いたしました。</p>
                </li>
            </ul>
        </section>

        <section id="sec02">
            <div class="b-mainTitle cts">
                <span>弊社の業務実績をごあんない致します。</span>
                <h2>Works</h2>
            </div>
            <div class="works-list">
                <ul class="slider" id="works-top-slider">
                    <li>
                        <a href="">
                            <img src="https://125naroom.com/demo/img/itukanokotonokoto01.jpg" alt="">
                            <p>アピールコメントなどを表示させます</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="https://125naroom.com/demo/img/itukanokotonokoto01.jpg" alt="">
                            <p>アピールコメントなどを表示させます</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="https://125naroom.com/demo/img/itukanokotonokoto01.jpg" alt="">
                            <p>アピールコメントなどを表示させます</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="https://125naroom.com/demo/img/itukanokotonokoto01.jpg" alt="">
                            <p>アピールコメントなどを表示させます</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="https://125naroom.com/demo/img/itukanokotonokoto01.jpg" alt="">
                            <p>アピールコメントなどを表示させます</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="cts">
                <div class="more-btn">
                    <a href="">
                        <span>More Info</span>
                        <div class="stick-arrow">
                            <div></div>
                            <div></div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="cts" id="sec03">
            <div class="philosophy-box flex-list">
                <div class="b-mainTitle">
                    <h2>Basic<br>philosophy</h2>
                    <span>私達の基本理念について</span>
                </div>
                <p>弊社では、施主様との円滑かつ正確な<br>
                    コミニュケーションを重視し、<br>
                    土地探しからの土地の状況も考慮。<br>
                    理想的な建築のご提案をお約束いたします。</p>
            </div>
            <ul class="philosophy-list flex-list">
                <li class="philosophy-list__item">
                    <img src="/assets/img/top/base_philosophy/list_icon1.png" alt="理念アイコン1">
                    <h3><strong>前向きな<br class="sp">コストカット</strong></h3>
                    <p>自社による設計<br>コストカットの実現</p>
                </li>
                <li class="philosophy-list__item">
                    <img src="/assets/img/top/base_philosophy/list_icon2.png" alt="理念アイコン2">
                    <h3><strong>わがままに<br class="sp">寄り添います</strong></h3>
                    <p>施主の気持ちが分かり、<br>施主の要望に寄り添う建築士と建てる物件</p>
                </li>
                <li class="philosophy-list__item">
                    <img src="/assets/img/top/base_philosophy/list_icon3.png" alt="理念アイコン3">
                    <h3><strong>豊富な実績</strong></h3>
                    <p>親しみやすく<br>お客様とともに考えます</p>
                </li>
            </ul>
            <ul class="subMenu-list flex-list">
                <li class="subMenu-list__item">
                    <a href="" class="flex-list">
                        <div>
                            <h3>Company</h3>
                            <span>会社概要</span>
                        </div>
                        <img src="/assets/img/top/base_philosophy/company_icon.png" alt="会社アイコン">
                    </a>
                </li>
                <li class="subMenu-list__item">
                    <a href="" class="flex-list">
                        <div>
                            <h3>Contact</h3>
                            <span>お問い合わせ</span>
                        </div>
                        <img src="/assets/img/top/base_philosophy/contact_icon.png" alt="お問い合わせアイコン">
                    </a>
                </li>
            </ul>
        </section>

    </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/footer.php'; ?>