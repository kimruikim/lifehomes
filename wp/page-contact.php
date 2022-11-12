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
<script type="text/javascript">
 $(function() {
   if ( $('.error')[0] ) {
     $('.mw_wp_form').addClass('mw_wp_form_error');
   }
 });
</script>
EOD;

include( get_stylesheet_directory() . '/templates/_Partials/header.php' ); ?>

    <main>
        <?php include( get_stylesheet_directory() . '/templates/_Partials/pnkz.php' ); ?>

        <section class="cts">
            <div class="b-mainTitle">
                <h2>Contact</h2>
                <span>お問い合わせ</span>
            </div>

            <?php echo do_shortcode('[mwform_formkey key="60"]'); ?>
        </section>
    </main>

<?php include( get_stylesheet_directory() . '/templates/_Partials/footer.php' ); ?>