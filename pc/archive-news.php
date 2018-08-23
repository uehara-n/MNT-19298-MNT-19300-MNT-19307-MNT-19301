<?php
/**
 * Template Name:新着情報一覧ページ
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
       <h2 class="page-title">新着情報</h2>
       <p class="page-subtitle">news</p>
     </div>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="blog-post">
      <h3 class="heading1"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
      <p class="right"><?php the_time('Y年n月j日(D)'); ?></p>
      <div class="contet">
        <?php the_content(); ?>
      </div>
    
    </div>
<?php endwhile; ?>
<?php endif; ?>
    <?php
      //Pagenation
      if (function_exists("pagination")) {
      pagination($additional_loop->max_num_pages);
      }
    ?>
 	</main>
 </div>
<?php get_footer(); ?>
