<?php
$page_class = 'works';
$title = '実績';

// [パンくずリスト用変数]
$pnkz_list = [
    [ 'page' => 'トップページ', 'url'  => '/' ],
    [ 'page' => '実績', 'url'  => '' ],
];

$add_css_area = <<< EOD
<link rel="stylesheet" href="/assets/css/works.css"> <!-- 実績/CSS -->
EOD;

$add_js_area = <<< EOD
EOD;

include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/header.php'; ?>

    <main>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/pnkz.php'; ?>


    </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/footer.php'; ?>