<?php
$page_class = 'works';
$title = '実績';

// [パンくずリスト用変数]
$pnkz_list = [
    [ 'page' => 'トップページ', 'url'  => '/' ],
    [ 'page' => '実績', 'url'  => '' ],
];

$add_css_area = <<< EOD
<!-- スライダー/CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
<link rel="stylesheet" href="/assets/css/works.css"> <!-- 実績/CSS -->
EOD;

$add_js_area = <<< EOD
<!-- スライダー/JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="/assets/js/slider.js"></script>
EOD;

include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/header.php'; ?>

    <main class="p-works-detail">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/pnkz.php'; ?>

        <div class="b-mainTitle">
            <h2>Works</h2>
            <span>実績</span>
        </div>

        <h2 class="b-building-title">名護市　テスト邸</h2>

        <div class="works-slider">
            <div class="works-slider__main">
                <div><img src="/assets/img/works/sample1.png" alt=""></div>
                <div><img src="/assets/img/works/sample2.png" alt=""></div>
                <div><img src="/assets/img/works/sample3.png" alt=""></div>
                <div><img src="/assets/img/works/sample4.png" alt=""></div>
                <div><img src="/assets/img/works/sample5.png" alt=""></div>
                <div><img src="/assets/img/works/sample1.png" alt=""></div>
                <div><img src="/assets/img/works/sample2.png" alt=""></div>
            </div>
            <div class="works-slider__thumb">
                <div><img src="/assets/img/works/sample1.png" alt=""></div>
                <div><img src="/assets/img/works/sample2.png" alt=""></div>
                <div><img src="/assets/img/works/sample3.png" alt=""></div>
                <div><img src="/assets/img/works/sample4.png" alt=""></div>
                <div><img src="/assets/img/works/sample5.png" alt=""></div>
                <div><img src="/assets/img/works/sample1.png" alt=""></div>
                <div><img src="/assets/img/works/sample2.png" alt=""></div>
            </div>
        </div>


        <section class="cts">
            <h3>建物概要</h3>

            <div class="works-overflow">
                <div class="flex-list">
                    <dl class="flex-list">
                        <dt>工事種別</dt>
                        <dd>テストテストテスト</dd>
                    </dl>
                    <dl class="flex-list">
                        <dt>用途</dt>
                        <dd>テストテストテスト</dd>
                    </dl>
                </div>
                <div class="flex-list">
                    <dl class="flex-list">
                        <dt>構造別</dt>
                        <dd>テストテストテスト</dd>
                    </dl>
                    <dl class="flex-list">
                        <dt>所在地</dt>
                        <dd>テストテストテスト</dd>
                    </dl>
                </div>

                <div class="flex-list">
                    <dl class="flex-list">
                        <dt>敷地面積</dt>
                        <dd>テストテストテスト</dd>
                    </dl>
                    <dl class="flex-list">
                        <dt>建築面積</dt>
                        <dd>テストテストテスト</dd>
                    </dl>
                </div>
                <div class="flex-list">
                    <dl class="flex-list">
                        <dt>延床面積</dt>
                        <dd>テストテストテスト</dd>
                    </dl>
                    <dl class="flex-list">
                        <dt>階数</dt>
                        <dd>テストテストテスト</dd>
                    </dl>
                </div>
                <div class="flex-list">
                    <dl class="flex-list">
                        <dt>構造</dt>
                        <dd>テストテストテスト</dd>
                    </dl>
                    <dl class="flex-list">
                        <dt>竣工</dt>
                        <dd>テストテストテスト</dd>
                    </dl>
                </div>
            </div>

            <a href="/works" class="btn-top">一覧へ戻る</a>
        </section>
    </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/footer.php'; ?>