<?php get_header(); ?>
<?php wp_reset_postdata(); ?>

<section class="search_result">
  <div class="row">
    <div class="medium-12 columns">
      <div class="search_result_title">
        <h1>Risultati per: <?php the_search_query(); ?></h1>
      </div>
    </div>
    <?php if(have_posts()): ?>
      <?php while(have_posts()) : the_post(); ?>
        <?php the_title(); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>