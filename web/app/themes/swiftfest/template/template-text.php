<?php
/**
 * Template Name: General Text
 */
?>
<?php get_header(); ?>
  <?php wp_reset_postdata();?>
  <section class="general_text">
    <div class="row">
      <div class="medium-8 small-10 small-offset-1 medium-offset-0 columns">
        <h1 class="title general_text_title"><?php the_title(); ?></h1>
        <div class="current-text general_text_content"><?php the_content(); ?></div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>