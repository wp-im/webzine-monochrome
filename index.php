<?php
namespace Webzine\Monochrome;
get_header();
widget_area( 'archive-top' );
?>
<header class="wz-page-heading"><span class="wz-eyebrow"><?php esc_html_e( 'READING INDEX', 'webzine-monochrome' ); ?></span><h1><?php
if ( is_search() ) { printf( esc_html__( '搜索：%s', 'webzine-monochrome' ), esc_html( get_search_query( false ) ) ); }
elseif ( is_archive() ) { the_archive_title(); }
else { esc_html_e( '文章与档案', 'webzine-monochrome' ); }
?></h1><?php if ( is_archive() ) { the_archive_description( '<div class="wz-archive-description">', '</div>' ); } ?></header>
<?php if ( is_search() ) { get_search_form(); } ?>
<?php do_action( 'webzine-monochrome_before_archive' ); ?>
<div class="wz-archive wz-feed wz-feed-<?php echo esc_attr( option( 'archive_view', 'list' ) ); ?>">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); entry( null, option( 'archive_view', 'list' ) ); endwhile;
else : ?><div class="wz-empty"><h2><?php esc_html_e( '没有找到匹配内容', 'webzine-monochrome' ); ?></h2><p><?php esc_html_e( '可以更换关键词，或从目录继续浏览。', 'webzine-monochrome' ); ?></p><?php if ( ! is_search() ) { get_search_form(); } ?></div><?php endif; ?>
</div>
<?php the_posts_pagination( array( 'prev_text' => __( '上一页', 'webzine-monochrome' ), 'next_text' => __( '下一页', 'webzine-monochrome' ) ) ); ?>
<?php do_action( 'webzine-monochrome_after_archive' ); widget_area( 'archive-bottom' ); get_footer(); ?>
