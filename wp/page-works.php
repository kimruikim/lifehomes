<?php
$page_class = 'works';
$title = '実績';
$current_url = get_template_directory_uri();

// [パンくずリスト用変数]
$pnkz_list = [
    [ 'page' => 'トップページ', 'url'  => '/' ],
    [ 'page' => '実績', 'url'  => '' ],
];

$add_css_area = <<< EOD
<link rel="stylesheet" href="{$current_url}/assets/css/works.css"> <!-- 実績/CSS -->
EOD;

$add_js_area = <<< EOD
EOD;

include( get_stylesheet_directory() . '/templates/_Partials/header.php' ); ?>

    <main>
        <?php include( get_stylesheet_directory() . '/templates/_Partials/pnkz.php' ); ?>

        <section class="cts p-works-list">

            <div class="b-mainTitle">
                <h2>Works</h2>
                <span>実績</span>
            </div>

            <ul class="works-list flex-list">
                <?php $ar_list = [1, 2, 3, 4, 5, 6, 7, 8] ?>
                <?php foreach ($ar_list as $_data): ?>
                    <li class="works-list__item">
                        <a href="works/detail.php">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/list/sample<?php echo $_data ?>.png" alt="">
                            </div>
                            <h3>名護市　テスト邸</h3>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <ul class="pager-list flex-list">
                <li class="pager-list__item p-first">&lt;</li>
                <li class="pager-list__item">1</li>
                <li class="pager-list__item">2</li>
                <li class="pager-list__item">3</li>
                <li class="pager-list__item p-last">&gt;</li>
            </ul>
            <a href="" class="btn-top">トップページへ</a>
        </section>
    </main>

<?php include( get_stylesheet_directory() . '/templates/_Partials/footer.php' ); ?>