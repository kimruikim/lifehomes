<?php
$page_class = 'top';
$title = 'TOP';
$current_url = get_template_directory_uri();

$add_css_area = <<< EOD
<!-- スライダー/CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"> <!-- FontAwesome/CSS -->

<link rel="stylesheet" href="{$current_url}/assets/css/top.css"> <!-- TOP/CSS -->
EOD;

$add_js_area = <<< EOD
<!-- スライダー/JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="{$current_url}/assets/js/slider.js"></script>
<script src="{$current_url}/assets/js/top.js"></script>
EOD;

include( get_stylesheet_directory() . '/templates/_Partials/header.php' ); ?>

<main>

    <section class="b-mainImg">
        <div>
            <p>生活が豊かになる <br class="sp">建築＆リフォーム<span>We will do our best to support you</span></p>
        </div>
    </section>

    <section class="cts" id="sec01">
        <div class="b-mainTitle">
            <h2>Information</h2>
            <span>ライフホームズからのお知らせ</span>
        </div>
        <?php
        //ニュース投稿取得
        $news_args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby' => 'post_date',
            'order' => 'DESC',
        );//取り出す投稿を指定
        $news_query = new WP_Query( $news_args );
        ?>
        <?php if ( $news_query->have_posts() ) : ?>
            <ul class="news-list">
                <?php
                while ( $news_query->have_posts() ) :
                    $news_query->the_post();
                    ?>
                    <li class="news-list__item flex-list">
                        <span class="date-icon"><?php echo esc_html( get_the_date() ); ?></span>
                        <span class="category-icon"><strong><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></strong></span>
                        <?php if(get_field('url') != ''): ?>
                            <a href="<?php the_field('url') ?>" target="_blank"><?php the_title(); ?></a>
                        <?php else: ?>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else : ?>
            <div class="no-contribution"><p><?php _e( 'No posts.', 'lightning' ); ?></p></div>
        <?php endif; // have_post() ?>
    </section>

    <section id="sec02">
        <div class="b-mainTitle cts">
            <span>弊社の業務実績をごあんない致します。</span>
            <h2>Works</h2>
        </div>
        <div class="works-list">
            <?php
            // 実績取得
            $works_args = array(
                'post_type' => 'post_works',
                'posts_per_page' => 10,
                'orderby' => 'post_date',
                'order' => 'DESC',
            );//取り出す投稿を指定
            $works_query = new WP_Query( $works_args );
            ?>
            <?php if ( $works_query->have_posts() ) : ?>
                <ul class="slider" id="works-top-slider">
                    <?php
                    while ( $works_query->have_posts() ) :
                        $works_query->the_post();
                        ?>
                        <li>
                            <a href="works/detail?id=<?php the_ID(); ?>">
                                <?php $estate_img1 = get_field('estate_img1'); ?>
                                <?php if($estate_img1 != ''): ?>
                                    <img src="<?php the_field('estate_img1') ?>" alt="">
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/noimage.png" alt="noimage">
                                <?php endif; ?>
                                <p><?php the_title(); ?></p>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <div class="no-contribution"><p>実績はありません。</p></div>
            <?php endif; // have_post() ?>
        </div>
        <div class="cts">
            <div class="more-btn">
                <a href="/works">
                    <span>More Info</span>
                    <div class="stick-arrow">
                        <div></div>
                        <div></div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="cts" id="sec03">
        <div class="philosophy-box flex-list">
            <div class="b-mainTitle">
                <h2>Basic<br>philosophy</h2>
                <span>私達の基本理念について</span>
            </div>
            <p>弊社では、施主様との円滑かつ正確な<br>
                コミニュケーションを重視し、<br>
                土地探しからの土地の状況も考慮。<br>
                理想的な建築のご提案をお約束いたします。</p>
        </div>
        <ul class="philosophy-list flex-list">
            <li class="philosophy-list__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/base_philosophy/list_icon1.png" alt="理念アイコン1">
                <h3><strong>前向きな<br class="sp">コストカット</strong></h3>
                <p>自社による設計<br>コストカットの実現</p>
            </li>
            <li class="philosophy-list__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/base_philosophy/list_icon2.png" alt="理念アイコン2">
                <h3><strong>わがままに<br class="sp">寄り添います</strong></h3>
                <p>施主の気持ちが分かり、<br>施主の要望に寄り添う建築士と建てる物件</p>
            </li>
            <li class="philosophy-list__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/base_philosophy/list_icon3.png" alt="理念アイコン3">
                <h3><strong>豊富な実績</strong></h3>
                <p>親しみやすく<br>お客様とともに考えます</p>
            </li>
        </ul>
        <ul class="subMenu-list flex-list">
            <li class="subMenu-list__item">
                <a href="/company" class="flex-list">
                    <div>
                        <h3>Company</h3>
                        <span>会社概要</span>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/base_philosophy/company_icon.png" alt="会社アイコン">
                </a>
            </li>
            <li class="subMenu-list__item">
                <a href="/contact" class="flex-list">
                    <div>
                        <h3>Contact</h3>
                        <span>お問い合わせ</span>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/base_philosophy/contact_icon.png" alt="お問い合わせアイコン">
                </a>
            </li>
        </ul>
    </section>
</main>

<?php include( get_stylesheet_directory() . '/templates/_Partials/footer.php' ); ?>