<?php namespace Webzine\Monochrome; get_header(); ?>
<div class="wz-empty wz-not-found"><span class="wz-eyebrow">404 / NOT FOUND</span><h1><?php esc_html_e( '这一页暂时没有找到', 'webzine-monochrome' ); ?></h1><p><?php esc_html_e( '地址可能已更改，试试搜索或回到文章目录。', 'webzine-monochrome' ); ?></p><?php get_search_form(); ?><a class="wz-button" href="<?php echo esc_url( posts_url() ); ?>"><?php esc_html_e( '浏览全部文章', 'webzine-monochrome' ); ?></a></div>
<?php get_footer(); ?>
