<?php get_header('red'); ?>
<?php wp_reset_postdata(); ?>
<?php while ( have_posts() ): the_post(); ?>

<?php endwhile; ?>
<?php get_footer(); ?>