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

        <section class="cts thanks-box">
            <img src="/assets/img/contact/logo.png" alt="株式会社ライフホームズ">
            <h3>お問い合わせを承りました。</h3>
            <p>お問い合わせいただき、ありがとうございます。<br>
                別途担当スタッフより折り返しご連絡を致しますので、<br>
                少々お待ち下さい。</p>
            <a href="">トップページへ</a>
        </section>
    </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/_Partials/footer.php'; ?>