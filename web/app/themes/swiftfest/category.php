<?php get_header(); ?>
<?php wp_reset_postdata(); ?>

  <?php $category_id = get_cat_id( single_cat_title("",false) ); ?>

  <section class="category">
    <div class="row">
      <div class="medium-12 columns">
        <h1 class="title-page"><?php printf(single_cat_title( '', false ) ); ?></h1>
      </div>
    </div>
    <div class="row">
      <?php
        $args = array(
          'posts_per_page' => -1,
          'post_type' => 'post',
          'cat' => $category_id
        );
        $category_more = new WP_Query($args);
        if($category_more->have_posts()) : 
          while($category_more->have_posts()) : 
            $category_more->the_post();
      ?>
      
      <div class="medium-8 columns end">
        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <div class="date"><?php the_time('j M'); ?></div>
        <div class="excerpt"><?php the_excerpt(); ?></div>
      </div>

      <?php
          endwhile;
        endif;
        wp_reset_query();
        wp_reset_postdata();
      ?>
    </div>
  </section>

<?php get_footer(); ?>