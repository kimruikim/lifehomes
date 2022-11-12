<?php
/**
 * Singular entry template
 *
 * @package lightning
 */

if ( is_page() ) {
    $entry_tag = 'div';
} else {
    $entry_tag = 'article';
}
?>
<<?php echo esc_attr( $entry_tag ); ?> id="post-<?php the_ID(); ?>" <?php post_class( apply_filters( 'lightning_article_outer_class', 'entry entry-full' ) ); ?>>

<?php
// check single or loop that true.
$is_entry_header_display = false; // is_page() and so on .
if ( is_single() || is_archive() ) {
    $is_entry_header_display = apply_filters( 'lightning_is_entry_header', true );
}
?>

<div class="info-box__main-contents">
    <div class="icon-list flex-list">
        <span class="date-icon"><?php echo esc_html( get_the_date() ); ?></span>
        <span class="category-icon">
            <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
        </span>
    </div>
    <h3><?php the_title(); ?></h3>
    <p><?php the_content(); ?></p>
</div>
<div class="btn-list flex-list">
    <a href="/">トップへ戻る</a>
</div>


<?php
$args = array(
    'before'      => '<nav class="page-link"><dl><dt>Pages :</dt><dd>',
    'after'       => '</dd></dl></nav>',
    'link_before' => '<span class="page-numbers">',
    'link_after'  => '</span>',
    'echo'        => 1,
);
wp_link_pages( $args );
?>

</<?php echo esc_attr( $entry_tag ); ?>><!-- [ /#post-<?php the_ID(); ?> ] -->
