<?php
/**
 * Template Name: Section
 */
?>
<?php
  get_header();
  wp_reset_postdata();
  while ( have_posts() ): the_post();
        
      $sectionCounter = 0;
      $sectionMeta = get_post_meta($post->ID);
      while ( have_rows('section') ) : the_row();
        switch(get_row_layout()) {
          case 'hero':
            //include __DIR__ . "/../partials/partial-hero/partial-hero.php";
            break;
        }
      $sectionCounter++;
    endwhile;
  endwhile;
  get_footer();
?>