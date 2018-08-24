<?php
/**
 * Template Name:イベント一覧ページ
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
       <h2 class="page-title">イベント情報</h2>
       <p class="page-subtitle">Event</p>
     </div>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="event-post">

      <?php if (date("Y/m/d") > get_field('event_date_end')) {
        echo '<img src="https://www.enlarge.tokyo/wp/wp-content/themes/reform2/img/common/page/e_ended.png"
        alt="終了しました" width="130" height="130" class="e_ended" />';
      } ?>
    <!-- <?php //endif; ?> -->
      <div class="image">

        <?php
        // $event_date = get_post_meta($post->ID , 'event_date' ,true);
        // $event_date_time = date_i18n('Ymd', normalizeTime($event_date));
        // if (date_i18n('Ymd') > $event_date_time)  :
?>
<!-- <p class="gray">
          <?php
        // echo gr_get_image(
        //   'event_img00',
        //   array( 'size' => 'thumbnail', 'alt' => esc_attr( post_custom( 'event_img_alt01' ) ) )
        // )
        ?>
        </p> -->
<?php //elseif(date_i18n('Ymd') < $event_date_time): ?>
  <p>
            <?php
          echo gr_get_image(
            'event_img00',
            array( 'size' => 'thumbnail', 'alt' => esc_attr( post_custom( 'event_img_alt01' ) ) )
          )
          ?>
          </p>
<?php //endif ?>
      </div>
      <div class="data">
        <h3><?php the_title(); ?></h3>
      <div class="event_text">
          <p><strong>開催日：</strong><?php echo post_custom( 'event_date' ); ?><br />
          <strong>開催場所：</strong><?php echo post_custom( 'event_place' ); ?></p>
      </div>
      <?php
// $event_date = get_post_meta($post->ID , 'event_date' ,true);
// $event_date_time = date_i18n('Ymd', normalizeTime($event_date));
// if (date_i18n('Ymd') > $event_date_time)  :
?>
<!-- <p class="right mt20 gray">
          <a href="<?php the_permalink() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/page/btn-detail_pc.png" alt="詳しく事例を見る"></a>
        </p> -->
<?php //elseif(date_i18n('Ymd') < $event_date_time): ?>
  <p class="right mt20">
            <a href="<?php the_permalink() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/page/btn-detail_pc.png" alt="詳しく事例を見る"></a>
          </p>
<?php //endif ?>
      </div>
    </div>
<?php endwhile; ?>
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
