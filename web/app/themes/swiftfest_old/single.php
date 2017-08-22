<?php get_header(); ?>
<?php wp_reset_postdata(); ?>
<?php while ( have_posts() ): the_post(); ?>

  <section class="single_post">
    
    <div class="row">
      <div class="medium-5 columns">
        <h1 class="title post_title"><?php the_title(); ?></h1>
      </div>
    </div>
    <div class="row">
      <?php if ( has_post_thumbnail() ): ?>
        <div class="medium-6 medium-centered columns">
          <div class="post_image"><?php the_post_thumbnail(); ?></div>
        </div>
      <?php endif; ?>
    </div>

    <div class="single_content">
      <div class="row">
        <div class="medium-8 medium-centered columns">
          <div class="current-text"><?php the_content(); ?></div>
        </div>
      </div>
    </div>

    <div class="post_arrow next_post"><?php next_post_link('%link', 'NEXT'); ?></div>
    <div class="post_arrow previous_post"><?php previous_post_link('%link', 'PREVIOUS'); ?></div>

  </section>
  <?php get_template_part( 'partials/related-items/related-items', 'related-items' ); ?>
<?php endwhile; ?>
<?php get_footer(); ?>