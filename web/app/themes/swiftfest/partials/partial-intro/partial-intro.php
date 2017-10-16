<?php
  $intro_suptitle = wave_get_post_meta($sectionMeta, "suptitle", $sectionCounter, TRUE);
  $intro_title = wave_get_post_meta($sectionMeta, "title", $sectionCounter, TRUE);
  $intro_text = wave_get_post_meta($sectionMeta, "text", $sectionCounter, TRUE);
  $intro_brands = get_sub_field('brands');
?>

<section class="intro">
  <div class="row">
    <div class="medium-12 columns end">
      <?php if($intro_suptitle): ?>
        <h4 class="general-ui intro_suptitle animated_text_auto"><?php echo $intro_suptitle; ?></h4>
      <?php endif; ?>
      <?php if($intro_title): ?>
        <h2 class="title intro_title animated_text_auto"><?php echo $intro_title; ?></h2>
      <?php endif; ?>
      <?php if($intro_text): ?>
        <h4 class="current-text intro_text animated_text_auto"><?php echo $intro_text; ?></h4>
      <?php endif; ?>
    </div>
  </div>
</section>
