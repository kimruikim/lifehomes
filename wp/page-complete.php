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

        <section class="cts">
            <div class="thanks-box">

                <img src="https://lifehomes.jp/wp-content/themes/lightning/_g3/assets/img/contact/logo.png" alt="" />
                <h3>お問い合わせを承りました。</h3>

                <?php echo do_shortcode('[mwform_formkey key="60"]'); ?>

                <a href="/">トップページへ</a>
            </div>
        </section>
    </main>

<?php include( get_stylesheet_directory() . '/templates/_Partials/footer.php' ); ?>