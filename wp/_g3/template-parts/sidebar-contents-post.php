<?php
/**
 * Sidebar for post
 *
 * This file is sidebar fot post.
 * But, if the widget or block is placed in the sitebar widget area (post),
 * This file will not be read.
 *
 * 投稿タイプ post 用のサイドバーです。
 * しかし、サイトバーウィジェットエリア（投稿）にウィジェットかブロックが配置されている場合、
 * このファイルは読み込まれなくなります。
 *
 * @package vektor-inc/lightning
 */

$post_loop = new WP_Query(
	array(
		'post_type'              => 'post',
		'posts_per_page'         => 5,
		'no_found_rows'          => true,
		'update_post_meta_cache' => false,
		'update_post_term_cache' => false,
	)
);
?>

<?php if ( $post_loop->have_posts() ) : ?>
<aside>
<h3>新着記事</h3>
<ul>
	<?php
    $_cnt = 0;
	while ( $post_loop->have_posts() ) :
		$post_loop->the_post();

//		wp_kses_post( VK_Component_Posts::the_view( $post, $options ) );
    $date = date('Y.m.d',  strtotime($post_loop->posts[$_cnt]->post_date));
    $ex_date = explode('.', $date);
    echo '<li>';
    echo '<span class="date-icon">'.$date.'</span>';
    if(get_field('url') != '') {
        echo '<a href="'.get_field('url').'" target="_blank">'.get_the_title().'</a>';
    } else {
        echo '<a href="'.(empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'].'/'.$ex_date[0].'/'.$ex_date[1].'/'.$ex_date[2].'/'.$post_loop->posts[$_cnt]->post_title.'">'.$post_loop->posts[$_cnt]->post_title.'</a>';

    }
    echo '</li>';
        $_cnt += 1;
    endwhile;
	?>

</ul>
</aside>
<?php endif; ?>
<?php wp_reset_query(); ?>

<!--<aside class="widget widget_link_list">-->
<!--<h4 class="sub-section-title">--><?php //_e( 'Category', 'lightning' ); ?><!--</h4>-->
<!--<ul>-->
<!--	--><?php //wp_list_categories( 'title_li=' ); ?>
<!--</ul>-->
<!--</aside>-->

<!--<aside class="widget widget_link_list">-->
<!--<h4 class="sub-section-title">--><?php //_e( 'Archive', 'lightning' ); ?><!--</h4>-->
<!--<ul>-->
<!--	--><?php
//	$args = array(
//		'type'      => 'monthly',
//		'post_type' => 'post',
//	);
//	wp_get_archives( $args );
//	?>
<!--</ul>-->
<!--</aside>-->
