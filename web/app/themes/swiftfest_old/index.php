<?php get_header(); ?>
<?php wp_reset_postdata(); ?>

  <section class="page">
    <div class="row">
      <div class="medium-12 columns">
        <h1 class="title-page"><?php the_title(); ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="medium-8 columns end">
        <section class="content">
          <?php the_content(); ?>
        </section>
      </div>
    </div>
  </section>

<?php get_footer(); ?>