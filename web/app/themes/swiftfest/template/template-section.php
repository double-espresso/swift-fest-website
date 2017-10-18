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
            include __DIR__ . "/../partials/partial-hero/partial-hero.php";
            break;
          case 'info':
            include __DIR__ . "/../partials/partial-info/partial-info.php";
            break;
          case 'intro':
            include __DIR__ . "/../partials/partial-intro/partial-intro.php";
            break;
          case 'form':
            include __DIR__ . "/../partials/partial-form/partial-form.php";
            break;
          case 'supporters':
            include __DIR__ . "/../partials/partial-supporters/partial-supporters.php";
            break;
          case 'speaker':
            include __DIR__ . "/../partials/partial-speaker/partial-speaker.php";
            break;
          case 'team':
            include __DIR__ . "/../partials/partial-team/partial-team.php";
            break;
          case 'sponsors':
            include __DIR__ . "/../partials/partial-sponsors/partial-sponsors.php";
            break;
          case 'tickets':
            include __DIR__ . "/../partials/partial-tickets/partial-tickets.php";
            break;
          case 'agenda':
            include __DIR__ . "/../partials/partial-agenda/partial-agenda.php";
            break;
        }
      $sectionCounter++;
      endwhile;
    endwhile;
  get_footer();
?>