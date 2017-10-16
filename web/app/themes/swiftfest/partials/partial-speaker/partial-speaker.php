<?php
	$speaker_position = wave_get_post_meta($sectionMeta, "position", $sectionCounter, TRUE);
	$speaker_list = get_sub_field('speaker_list');
	$speaker_image = get_sub_field('featured_image');
  $speaker_padding = wave_get_post_meta($sectionMeta, "padding_bottom", $sectionCounter, TRUE);
?>

<section class="speaker <?php echo $speaker_position; ?> <?php echo $speaker_padding; ?>">
  <?php if($speaker_list): ?>
    <div class="speaker_relation">
      <?php foreach ($speaker_list as $post): ?>
        <?php setup_postdata($post); ?>
        <?php $url_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'info' ); ?>
        <div class="single_speaker">
          <?php if($speaker_position === 'left'): ?>       
  	        <div class="row">
  	        	<div class="medium-4 medium-offset-1 columns">
                <div class="image_container">              
    	        		<img src="<?php echo $speaker_image; ?>" alt="<?php the_title(); ?>" class="featured_image parallax" data-rellax-speed="0.8" data-rellax-percentage="0.5">
                  <div class="switch_content show_talk_content">Show talk details</div>
                  <div class="switch_content hide_talk_content">Hide talk details</div>
                </div>
  	        	</div>
  	        	<div class="medium-7 columns end">
  	        		<div class="info_container speaker_preview_info">
  		        		<div class="speaker_suptitle animated_text_auto"><?php echo(get_field('type')); ?></div>
  		        		<div class="title speaker_title animated_text_auto"><?php the_title(); ?></div>
  		        		<div class="current-text speaker_description animated_text_auto"><?php the_field('short_descriprion'); ?></div>
  				        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="squared-button white">
  				          More Details
  				        </a>
  	        		</div>
                <div class="info_container talk_preview_info">
                  <div class="speaker_suptitle"><?php the_title(); ?></div>
                  <div class="title speaker_title"><?php echo(get_field('talk_title')); ?></div>
                  <div class="current-text speaker_description"><?php the_field('talk_short_description'); ?></div>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="squared-button white">
                        More Details
                      </a>
                </div>
  	        	</div>
  	        </div>
  	      <?php else: ?>
  	        <div class="row">
  	        	<div class="medium-4 medium-push-7 columns end">
                <div class="image_container">              
                  <img src="<?php echo $speaker_image; ?>" alt="<?php the_title(); ?>" class="featured_image parallax" data-rellax-speed="0.8" data-rellax-percentage="0.5">
                  <div class="switch_content show_talk_content">Show talk details</div>
                  <div class="switch_content hide_talk_content">Hide talk details</div>
                </div>
  	        	</div>
              <div class="medium-7 medium-pull-5 columns">
                <div class="info_container speaker_preview_info">
                  <div class="speaker_suptitle animated_text_auto"><?php echo(get_field('type')); ?></div>
                  <div class="title speaker_title animated_text_auto"><?php the_title(); ?></div>
                  <div class="current-text speaker_description animated_text_auto"><?php the_field('short_descriprion'); ?></div>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="squared-button white">
                    More Details
                  </a>
                </div>
                <div class="info_container talk_preview_info">
                  <div class="speaker_suptitle"><?php the_title(); ?></div>
                  <div class="title speaker_title"><?php echo(get_field('talk_title')); ?></div>
                  <div class="current-text speaker_description"><?php the_field('talk_short_description'); ?></div>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="squared-button white">
                        More Details
                      </a>
                </div>
              </div>
  	        </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  <?php endif; ?>
</section>