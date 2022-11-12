<?php
$page_class = 'contact';
$title = 'お問い合わせ';
$current_url = get_template_directory_uri();

// [パンくずリスト用変数]
$pnkz_list = [
    [ 'page' => 'トップページ', 'url'  => '/' ],
    [ 'page' => 'お問い合わせ', 'url'  => '' ],
];

$add_css_area = <<< EOD
<link rel="stylesheet" href="{$current_url}/assets/css/contact.css"> <!-- お問い合わせ/contact -->
EOD;

$add_js_area = <<< EOD
EOD;

include( get_stylesheet_directory() . '/templates/_Partials/header.php' ); ?>

    <main>
        <?php include( get_stylesheet_directory() . '/templates/_Partials/pnkz.php' ); ?>

        <section class="cts ">
            <div class="b-mainTitle">
                <h2>Contact</h2>
                <span>お問い合わせ</span>
            </div>

            <div class="thanks-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/logo.png" alt="">
                <h3>お問い合わせを承りました。</h3>
                <p>お問い合わせいただき、ありがとうございます。<br>
                    別途担当スタッフより折り返しご連絡を致しますので、<br>
                    少々お待ち下さい。</p>
                <a href="">トップページへ</a>
            </div>
        </section>
    </main>

<?php include( get_stylesheet_directory() . '/templates/_Partials/footer.php' ); ?>