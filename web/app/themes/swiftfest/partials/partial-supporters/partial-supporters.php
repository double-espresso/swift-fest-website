<?php
  $supporters_background = wave_get_post_meta($sectionMeta, "background_color", $sectionCounter, TRUE);
  $supporters_suptitle = wave_get_post_meta($sectionMeta, "suptitle", $sectionCounter, TRUE);
  $supporters_title = wave_get_post_meta($sectionMeta, "title", $sectionCounter, TRUE);
  $supporters_subtitle = wave_get_post_meta($sectionMeta, "subtitle", $sectionCounter, TRUE);
  $supporters_brands = get_sub_field('brands');
?>

<section class="supporters <?php echo ($supporters_background == 'light') ? 'light' : ''; ?>" id="supporters_section">
  <div class="row">
    <div class="medium-12 columns">
      <?php if($supporters_suptitle): ?>
        <h4 class="supporters_suptitle"><?php echo $supporters_suptitle; ?></h4>
      <?php endif; ?>
      <?php if($supporters_title): ?>
        <h2 class="title supporters_title"><?php echo $supporters_title; ?></h2>
      <?php endif; ?>
      <?php if($supporters_subtitle): ?>
        <h4 class="current-text supporters_subtitle"><?php echo $supporters_subtitle; ?></h4>
      <?php endif; ?>
    </div>
  </div>
  <div class="row">
    <div class="medium-12 columns">
      <?php if($supporters_brands): ?>
        <div class="supporters_relation">
          <div class="row">
            <?php foreach ($supporters_brands as $post): ?>
              <?php setup_postdata($post); ?>
              <div class="large-3 medium-4 small-6 columns end">
                <div class="relation_single">
                  <?php $url_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'info' ); ?>
                  <a href="<?php the_field("link"); ?>" target="_blank" title="<?php the_title(); ?>">
                    <div class="single_logo" <?php if ($url_image): ?>style="background-image: url(<?php echo $url_image[0] ?>)"<?php endif; ?>></div>
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
