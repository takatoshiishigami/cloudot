<?php
/* カスタム投稿タイプを表示する */
$loop = new WP_Query( array( 'post_type' => 'books', 'posts_per_page' => 10 ) );
while ( $loop->have_posts() ) : $loop->the_post();
?>

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

/* カスタム分類を表示 */  		
<p class="taxonomies">
    <?php echo  get_the_term_list( $post->ID, 'bookcat', 'カテゴリー', ',' , '' ); ?>
</p>
/* コンテンツ */
<div class="custom-post-content">
    <?php the_content('続きを読む&raquo;'); ?>
</div>
<?php endwhile; ?>