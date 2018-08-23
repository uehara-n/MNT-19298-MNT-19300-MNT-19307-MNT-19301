<?php
/**
 * Template Name:ギャラリー一覧ページ
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
     <ul class="galley-menu-list">
       <li><a href="<?php echo home_url(); ?>/album_cat/kitchen/">キッチン</a></li>
       <li><a href="<?php echo home_url(); ?>/album_cat/bathroom/">お風呂</a></li>
       <li><a href="<?php echo home_url(); ?>/album_cat/toilet/">トイレ</a></li>
       <li><a href="<?php echo home_url(); ?>/album_cat/powderroom/">洗面化粧台</a></li>
       <li><a href="<?php echo home_url(); ?>/album_cat/taishin/">耐震リフォーム</a></li>
       <li><a href="<?php echo home_url(); ?>/album_cat/bfree/">バリアフリー</a></li>
       <li><a href="<?php echo home_url(); ?>/album_cat/exterior/">外構・エクステリア</a></li>
       <li><a href="<?php echo home_url(); ?>/album_cat/gaiheki/">屋根・外壁</a></li>
       <li><a href="<?php echo home_url(); ?>/album_cat/design/">デザイン</a></li>
       <li><a href="<?php echo home_url(); ?>/album_cat/sizen/">自然素材</a></li>
     </ul>
<?php if (have_posts()) : ?>
    <div class="gallery-wrap">
<?php while (have_posts()) : the_post(); ?>
      <div class="gallery-item">
        <?php $image = get_field('main-image'); if( !empty($image) ): ?>
          <img src="<?php $image = get_field('main-image'); echo $image['sizes']['large']; ?>" class="album-object-fit" alt="<?php the_title(); ?>">
        <?php endif; ?>
        <a href="<?php the_permalink() ?>">
          <div class="mask">
            <div class="caption"><?php the_title(); ?></div>
          </div>
        </a>
      </div>
<?php endwhile; ?>
    </div>
    <?php
      //Pagenation
      if (function_exists("pagination")) {
      pagination($additional_loop->max_num_pages);
      }
    ?>
<?php endif; ?>
 	</main>
 </div>
<?php get_footer(); ?>
