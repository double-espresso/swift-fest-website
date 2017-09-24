<?php
	$speaker_position = wave_get_post_meta($sectionMeta, "position", $sectionCounter, TRUE);
	$speaker_list = get_sub_field('speaker_list');
	$speaker_image = get_sub_field('featured_image');
?>

<section class="speaker <?php echo $speaker_position; ?>">
  <?php if($speaker_list): ?>
    <div class="speaker_relation">
      <?php foreach ($speaker_list as $post): ?>
        <?php setup_postdata($post); ?>
        <?php $url_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'info' ); ?>
        <?php if($speaker_position === 'left'): ?>
	        <div class="row">
	        	<div class="medium-4 medium-offset-1 columns">
	        		<img src="<?php echo $speaker_image; ?>" alt="<?php the_title(); ?>" class="featured_image parallax" data-rellax-speed="1">
	        	</div>
	        	<div class="medium-5 columns end">
	        		<div class="speaker_preview_info">
		        		<div class="speaker_suptitle"><?php echo(get_field('type')); ?></div>
		        		<div class="title speaker_title"><?php the_title(); ?></div>
		        		<div class="current-text speaker_description"><?php the_field('short_descriprion'); ?></div>
				        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="squared-button white">
				          More Details
				        </a>
	        		</div>
	        	</div>
	        </div>
	      <?php else: ?>
	        <div class="row">
	        	<div class="medium-5 medium-offset-2 columns">
	        		<div class="speaker_preview_info">
		        		<div class="speaker_suptitle"><?php echo(get_field('type')); ?></div>
		        		<div class="title speaker_title"><?php the_title(); ?></div>
		        		<div class="current-text speaker_description"><?php the_field('short_descriprion'); ?></div>
				        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="squared-button white">
				          More Details
				        </a>
	        		</div>
	        	</div>
	        	<div class="medium-4 columns end">
	        		<img src="<?php echo $speaker_image; ?>" alt="<?php the_title(); ?>" class="featured_image parallax" data-rellax-speed="1">
	        	</div>
	        </div>
        <?php endif; ?>
      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  <?php endif; ?>
</section>