<?php
/**
 * Template Name: General Text
 */
?>
<?php get_header('red'); ?>
  <?php wp_reset_postdata();?>
  <section class="general_text">
    <div class="row">
      <div class="medium-8 small-12 columns">
        <h1 class="title general_text_title"><?php the_title(); ?></h1>
        <div class="current-text general_text_content"><?php the_content(); ?></div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>