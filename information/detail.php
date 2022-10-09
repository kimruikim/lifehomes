<?php
$page_class = 'information';
$title = 'お知らせ';

// [パンくずリスト用変数]
$pnkz_list = [
    [ 'page' => 'トップページ', 'url'  => '/' ],
    [ 'page' => 'お知らせ', 'url'  => '' ],
];

$add_css_area = <<< EOD
<link rel="stylesheet" href="/assets/css/info.css"> <!-- お知らせ/CSS -->
EOD;

$add_js_area = <<< EOD
EOD;

include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/header.php'; ?>

    <main>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/pnkz.php'; ?>

        <section class="cts">
            <div class="b-mainTitle">
                <h2>Information</h2>
                <span>お知らせ</span>
            </div>

            <div class="info-box flex-list">
                <div class="info-box__main">
                    <div class="info-box__main-contents">
                        <div class="icon-list flex-list">
                            <span class="date-icon">2022.10.01</span>
                            <span class="category-icon">カテゴリー</span>
                        </div>
                        <h3>記事タイトルを記載、記事タイトルを記載、記事タイトルを記載、記事タイトルを記載、記事タイトルを記載</h3>
                        <p>本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載、本文の冒頭記載</p>
                    </div>
                    <div class="btn-list flex-list">
                        <a href="/">トップへ戻る</a>
                    </div>
                </div>
                <div class="info-box__sidebar">
                    <div class="s-box s-box__new">
                        <h3>新着記事</h3>
                        <ul>
                            <li>
                                <span class="date-icon">2022.10.01</span>
                                <a href="">記事タイトルを記載、記事タイトルを記載、記事タイトルを記載</a>
                            </li>
                            <li>
                                <span class="date-icon">2022.10.01</span>
                                <a href="">記事タイトルを記載、記事タイトルを記載、記事タイトルを記載</a>
                            </li>
                            <li>
                                <span class="date-icon">2022.10.01</span>
                                <a href="">記事タイトルを記載、記事タイトルを記載、記事タイトルを記載</a>
                            </li>
                            <li>
                                <span class="date-icon">2022.10.01</span>
                                <a href="">記事タイトルを記載、記事タイトルを記載、記事タイトルを記載</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/footer.php'; ?>