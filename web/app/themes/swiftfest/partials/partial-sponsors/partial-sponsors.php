<?php
  $sponsor_row = get_sub_field('sponsor_row');
?>

<section class="sponsors">
  <?php if(have_rows('sponsor_row')): ?>
    <?php while (have_rows('sponsor_row')): the_row(); ?>
      <?php $sponsor_brands = get_sub_field('sponsor'); ?>
      <?php $sponsor_type = get_sub_field('sponsor_type'); ?>
      <div class="row">
        <div class="sponsor_container">

          <div class="large-3 columns">
            <div class="sponsor_info">
              <div class="title-small sponsor_title"><?php echo ($sponsor_type); ?></div>
            </div>
          </div>

          <div class="large-9 columns">
            <div class="row">
              <div class="sponsor_logos">
                <?php foreach ($sponsor_brands as $post): ?>
                  <?php setup_postdata($post); ?>
                  <?php $url_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'info' ); ?>
                  <div class="<?php echo ($sponsor_type == 'platinum') ? 'medium-12"' : 'medium-6'; ?> columns end">
                    <a href="<?php the_field("link"); ?>" target="_blank" title="<?php the_title(); ?>" class="single_logo <?php echo ($sponsor_type); ?>" <?php if ($url_image): ?>style="background-image: url(<?php echo $url_image[0] ?>)"<?php endif; ?>></a>
                  </div> 
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
              </div>
            </div>
          </div>

        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</section>
