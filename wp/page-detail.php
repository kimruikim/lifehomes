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
<!-- スライダー/CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
<link rel="stylesheet" href="{$current_url}/assets/css/works.css"> <!-- 実績/CSS -->
EOD;

$add_js_area = <<< EOD
<!-- スライダー/JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="{$current_url}/assets/js/slider.js"></script>
EOD;

include( get_stylesheet_directory() . '/templates/_Partials/header.php' ); ?>

    <main class="p-works-detail">
        <?php include( get_stylesheet_directory() . '/templates/_Partials/pnkz.php' ); ?>

        <div class="b-mainTitle">
            <h2>Works</h2>
            <span>実績</span>
        </div>

        <?php
        $id = $_GET['id'];
        // 実績取得
        $works_args = array(
            'post_type' => 'post_works',
            'page_id' => $id,
        );
        //取り出す投稿を指定
        $works_query = new WP_Query( $works_args );
        ?>

        <?php if ( $works_query->have_posts() ) : ?>
            <?php
            $id_num = 1;
            while ( $works_query->have_posts() ) :
                $works_query->the_post(); ?>

            <h2 class="b-building-title"><?php the_title(); ?></h2>

            <div class="works-slider">
                <div class="works-slider__main">
                    <?php for($num=1; $num < 18; $num++): ?>
                        <?php
                            $img_name = 'estate_img'.$num;
                            $estate_img = get_field($img_name);
                        ?>
                        <?php if($estate_img != ''): ?>
                            <div><img src="<?php the_field($img_name) ?>" alt=""></div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
                <div class="works-slider__thumb">
                    <?php for($num=1; $num < 18; $num++): ?>
                        <?php
                        $img_name = 'estate_img'.$num;
                        $estate_img = get_field($img_name);
                        ?>
                        <?php if($estate_img != ''): ?>
                            <div><img src="<?php the_field($img_name) ?>" alt=""></div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>


            <section class="cts">
                <h3>建物概要</h3>

                <div class="works-overflow">
                    <div class="flex-list">
                        <dl class="flex-list">
                            <dt>工事種別</dt>
                            <dd><?php the_field('construction_type'); ?></dd>
                        </dl>
                        <dl class="flex-list">
                            <dt>用途</dt>
                            <dd><?php the_field('purpose'); ?></dd>
                        </dl>
                    </div>
                    <div class="flex-list">
                        <dl class="flex-list">
                            <dt>構造別</dt>
                            <dd><?php the_field('by_structure'); ?></dd>
                        </dl>
                        <dl class="flex-list">
                            <dt>所在地</dt>
                            <dd><?php the_field('address'); ?></dd>
                        </dl>
                    </div>

                    <div class="flex-list">
                        <dl class="flex-list">
                            <dt>敷地面積</dt>
                            <dd><?php the_field('site_area'); ?></dd>
                        </dl>
                        <dl class="flex-list">
                            <dt>建築面積</dt>
                            <dd><?php the_field('building_area'); ?></dd>
                        </dl>
                    </div>
                    <div class="flex-list">
                        <dl class="flex-list">
                            <dt>延床面積</dt>
                            <dd><?php the_field('extended_bedarea'); ?></dd>
                        </dl>
                        <dl class="flex-list">
                            <dt>階数</dt>
                            <dd><?php the_field('kaisu'); ?></dd>
                        </dl>
                    </div>
                    <div class="flex-list">
                        <dl class="flex-list">
                            <dt>構造</dt>
                            <dd><?php the_field('structure'); ?></dd>
                        </dl>
                        <dl class="flex-list">
                            <dt>竣工</dt>
                            <dd><?php the_field('construction'); ?></dd>
                        </dl>
                    </div>
                </div>

            </section>

            <?php $id_num = $id_num +1; endwhile; ?>
        <?php else : ?>
        <div class="no-contribution"><p>実績はありません。</p></div>
        <?php endif; // have_post() ?>

        <a href="/works" class="btn-top">一覧へ戻る</a>

    </main>

<?php include( get_stylesheet_directory() . '/templates/_Partials/footer.php' ); ?>