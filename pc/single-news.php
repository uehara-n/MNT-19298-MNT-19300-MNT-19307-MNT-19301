<?php
/**
 * Template Name:新着情報個別ページ
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
  <h3 class="heading1"><?php the_title(); ?></h3>
  <p class="right"><?php the_time('Y年n月j日(D)'); ?></p>
  <div class="contet">
    <?php the_content(); ?>
    <?php echo get_field('editor'); ?>
  </div>
<?php endwhile; ?>
<?php endif; ?>

    <?php //get_template_part('parts/page-navi'); ?>
 	</main>
 </div>
<?php get_footer(); ?>
