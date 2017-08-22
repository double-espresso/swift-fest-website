<?php
/**
 * Template Name: Homepage
 */
?>
<?php get_header('homepage'); ?>
 <?php wp_reset_postdata();?>
 <section class="homepage">
 		<div class="container">	
      <div class="logo"></div>
      <div class="current-text homepage_text"><?php the_content(); ?></div>
      <div class="form">
        <div class="row">
          <div class="large-8 medium-12 columns medium-centered">
            <div class="form_content">
              <?php the_field('newsletter_form'); ?>
            </div>
          </div>
        </div>
      </div>
 		</div>
 </section>
<?php get_footer(); ?>