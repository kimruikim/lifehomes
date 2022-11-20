<?php
$page_class = 'works';
$title = '実績';
$current_url = get_template_directory_uri();
$filemtime = filemtime( get_template_directory().'/style.css');

// [パンくずリスト用変数]
$pnkz_list = [
    [ 'page' => 'トップページ', 'url'  => '/' ],
    [ 'page' => '実績', 'url'  => '' ],
];

$add_css_area = <<< EOD
<link rel="stylesheet" href="{$current_url}/assets/css/works.css?{$filemtime}"> <!-- 実績/CSS -->
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

            <?php
            // 実績取得
            $works_args = array(
                'paged'     => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
                'post_type' => 'post_works',
                'posts_per_page' => 2,
                'orderby' => 'post_date',
                'order' => 'DESC',
            );//取り出す投稿を指定
            $works_query = new WP_Query( $works_args );
            ?>
            <?php if ( $works_query->have_posts() ) : ?>
                <ul class="works-list flex-list">
                    <?php
                    while ( $works_query->have_posts() ) :
                        $works_query->the_post();
                        ?>
                        <li class="works-list__item">
                            <a href="detail?id=<?php the_ID(); ?>">
                                <?php $estate_img1 = get_field('estate_img1'); ?>
                                <?php if($estate_img1 != ''): ?>
                                    <img src="<?php the_field('estate_img1') ?>" alt="">
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/noimage.png" alt="noimage">
                                <?php endif; ?>
                                <h3><?php the_title(); ?></h3>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <div class="pager-list">
                    <?php
                    $GLOBALS['wp_query']->max_num_pages = $works_query->max_num_pages;
                    $args = array (
                        'prev_text' => ' < ',
                        'next_text' => ' > ',
                        'show_all'  => false,
                        'mid_size'  => 1,
                        'type'      => 'list'
                    );
                    the_posts_pagination($args);
                    ?>
                </div>

                <ul class="pager-list flex-list">
                    <li class="pager-list__item p-first">&lt;</li>
                    <li class="pager-list__item">1</li>
                    <li class="pager-list__item">2</li>
                    <li class="pager-list__item">3</li>
                    <li class="pager-list__item p-last">&gt;</li>
                </ul>
            <?php else : ?>
                <div class="no-contribution"><p>実績はありません。</p></div>
            <?php endif; // have_post() ?>


            <a href="/" class="btn-top">トップページへ</a>
        </section>
    </main>

<?php include( get_stylesheet_directory() . '/templates/_Partials/footer.php' ); ?>