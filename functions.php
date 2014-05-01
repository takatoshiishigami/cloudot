<?php 

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'books', /* post-type */
		array(
			'labels' => array(
			'name' => __( '本' ),
			'singular_name' => __( '本' )
		),
		'public' => true,
		'menu_position' =>5,
    'has_archive' => true,
    'rewrite' => array('slug' => '本'),
    'supports' => array('title','editor','thumbnail',
    'custom-fields','excerpt','author','trackbacks',
    'comments','revisions','page-attributes')
    
    )
	);
  register_taxonomy(
      'bookcat', /* タクソノミーの名前 */
      'books', /* books投稿で設定する */
      array(
        'hierarchical' => true, /* 親子関係が必要なければ false */
        'update_count_callback' => '_update_post_term_count',
        'label' => '本のカテゴリー',
        'singular_label' => '本のカテゴリー',
        'public' => true,
        'show_ui' => true
      )
    );
  /* ここまでを追加 */
}

?>