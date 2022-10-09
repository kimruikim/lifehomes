<?php
$page_class = 'contact';
$title = 'お問い合わせ';

// [パンくずリスト用変数]
$pnkz_list = [
    [ 'page' => 'トップページ', 'url'  => '/' ],
    [ 'page' => 'お問い合わせ', 'url'  => '' ],
];

$add_css_area = <<< EOD
<link rel="stylesheet" href="/assets/css/contact.css"> <!-- お問い合わせ/contact -->
EOD;

$add_js_area = <<< EOD
EOD;

include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/header.php'; ?>

    <main>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/pnkz.php'; ?>



    </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/footer.php'; ?>