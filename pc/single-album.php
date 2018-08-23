<?php
/**
 * Template Name:ギャラリー個別ページ
 *
 * @package Wordpress
 * @subpackage reform2
 * @since 1.0.0
 */
get_header(); ?>


 <div id="top" class="container">
   <?php get_sidebar(); ?>
   <main class="main" role="main">
     <?php breadcrumb(); ?>
     <div class="page-title-area">
       <h1 class="page-title">エンラージギャラリー</h1>
       <p class="page-subtitle">Gallery</p>
     </div>
<?php if (have_posts()) : ?>
    <div class="page-content">
<?php while (have_posts()) : the_post(); ?>
      <div class="gallery-post">
        <h2 class="heading1"><?php the_title(); ?></h2>
        <div class="gallery-content">
          <div class="image">
            <?php $image = get_field('main-image'); if( !empty($image) ): ?>
              <a href="<?php $image = get_field('main-image'); echo $image['sizes']['large']; ?>" rel="lightbox"><img rel="lightbox" src="<?php $image = get_field('main-image'); echo $image['sizes']['large']; ?>" class="main-image" alt="<?php the_title(); ?>">
              </a>
            <?php endif; ?>
          </div>
          <div class="text">
            <p><?php the_field('text'); ?></p>
          </div>
        </div>
<?php endwhile; ?>
    </div>
    <?php // 現在表示されている投稿と同じタームに分類された投稿を取得
  $taxonomy_slug = 'album_cat'; // タクソノミーのスラッグを指定
  $post_type_slug = 'album'; // 投稿タイプのスラッグを指定
  $post_terms = wp_get_object_terms($post->ID, $taxonomy_slug); // タクソノミーの指定
  if( $post_terms && !is_wp_error($post_terms)) { // 値があるときに作動
  $terms_slug = array(); // 配列のセット
  foreach( $post_terms as $value ){ // 配列の作成
  $terms_slug[] = $value->slug; // タームのスラッグを配列に追加
  }
  }
  $args = array(
  'post_type' => $post_type_slug, // 投稿タイプを指定
  'posts_per_page' => 5, // 表示件数を指定
  'post__not_in' => array($post->ID), // 現在の投稿を除外
  'tax_query' => array( // タクソノミーパラメーターを使用
  array(
  'taxonomy' => $taxonomy_slug, // タームを取得タクソノミーを指定
  'field' => 'slug', // スラッグに一致するタームを返す
  'terms' => $terms_slug // タームの配列を指定
  )
  )
  );
  $the_query = new WP_Query($args); if($the_query->have_posts()):
  ?>
  <div class="width">
<div class="slider1 carousel1">
  <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
    <!-- スライダー -->
    <div class="slide-item">
      <a href="<?php the_permalink() ?>">
        <?php $image = get_field('main-image'); if( !empty($image) ): ?>
          <img src="<?php $image = get_field('main-image'); echo $image['sizes']['medium']; ?>" class="fit" alt="<?php the_title(); ?>">
        <?php endif; ?>
      </a>
    </div>
  <?php endwhile; ?>
</div>
<div class="arrow1">
  <div class="slick-next"></div>
  <div class="slick-prev"></div>
</div>
</div>
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>

    <div class="center mt50 mb30">
      <a href="<?php echo home_url(); ?>/album/"><img src="<?php echo get_template_directory_uri(); ?>/img/page/album/button.png" alt="ギャラリー一覧"></a>
    </div>
    <?php endif; ?>
 	</main>
 </div>
<?php get_footer(); ?>
