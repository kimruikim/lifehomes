<?php
/**
 * Lightning G3 index.php common template-file
 *
 * @package vektor-inc/lightning
 */

use VektorInc\VK_Breadcrumb\VkBreadcrumb;

?>

<?php
$page_class = 'information';
$title = 'お知らせ';
$current_url = get_template_directory_uri();

// [パンくずリスト用変数]
$pnkz_list = [
    [ 'page' => 'トップページ', 'url'  => '/' ],
    [ 'page' => 'お知らせ', 'url'  => '' ],
];

$add_css_area = <<< EOD
<link rel="stylesheet" href="{$current_url}/assets/css/info.css"> <!-- お知らせ/CSS -->
EOD;

$add_js_area = <<< EOD
EOD;

include( get_stylesheet_directory() . '/templates/_Partials/header.php' ); ?>

    <main>
        <?php include( get_stylesheet_directory() . '/templates/_Partials/pnkz.php' ); ?>

        <section class="cts">
            <div class="b-mainTitle">
                <h2>Information</h2>
                <span>お知らせ</span>
            </div>

            <div class="info-box flex-list">
                <div class="info-box__main">
                    <?php do_action( 'lightning_main_section_prepend', 'lightning_main_section_prepend' ); ?>

                    <?php
                    if ( apply_filters( 'lightning_is_main_section_template', true, 'main_section_template' ) ) {
                        if ( lightning_is_woo_page() ) {
                            lightning_get_template_part( 'template-parts/main-woocommerce' );
                        } else {
                            if ( apply_filters( 'lightning_is_singular', is_singular() ) ) {
                                lightning_get_template_part( 'template-parts/main-singular' );
                            } else {
                                if ( is_404() ) {
                                    lightning_get_template_part( 'template-parts/main-404' );
                                } else {
                                    lightning_get_template_part( 'template-parts/main-archive' );
                                }
                            }
                        }
                    }
                    ?>

                    <?php do_action( 'lightning_main_section_append', 'lightning_main_section_append' ); ?>
                </div>
                <div class="info-box__sidebar">
                    <div class="s-box s-box__new">
                        <?php
                        do_action( 'lightning_sub_section_before', 'lightning_sub_section_before' );
                        if ( lightning_is_subsection() ) {
                            if ( lightning_is_woo_page() ) {
                                do_action( 'woocommerce_sidebar' );
                            } else {
                                lightning_get_template_part( 'sidebar', get_post_type() );
                            }
                        }
                        do_action( 'lightning_sub_section_after', 'lightning_sub_section_after' );
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include( get_stylesheet_directory() . '/templates/_Partials/footer.php' ); ?>