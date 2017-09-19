<?php
	$info_suptitle = wave_get_post_meta($sectionMeta, "suptitle", $sectionCounter, TRUE);
  $info_title = wave_get_post_meta($sectionMeta, "title", $sectionCounter, TRUE);
  $info_content = wave_get_post_meta($sectionMeta, "content", $sectionCounter, TRUE);
	$info_position = wave_get_post_meta($sectionMeta, "position", $sectionCounter, TRUE);
	$info_type = wave_get_post_meta($sectionMeta, "type", $sectionCounter, TRUE);
	$info_animationid = wave_get_post_meta($sectionMeta, "animationid", $sectionCounter, TRUE);
	$info_image = get_sub_field('image');
?>

<section class="info <?php echo $info_position; ?> parallax" id="info_section">
	<div class="row">

		<?php if($info_type === 'right_image'): ?>
			<div class="medium-10 columns" id="<?php echo $info_animationid; ?>">
				<div class="info_container info_with_image <?php echo $info_animationid; ?>_container">
					<?php if(!empty($info_title)): ?>
						<h2 class="title info_title"><?php echo $info_title; ?></h2>	
					<?php endif; ?>
					<?php if(!empty($info_content)): ?>
						<div class="current_text info_content">
							<p><?php echo $info_content; ?></p>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="medium-6 columns">
				<div class="info_img parallax">
					<img src="<?php echo $info_image; ?>" alt="<?php echo $info_title; ?>">
				</div>
			</div>

		<?php elseif($info_type === 'left_text' || 'right_text'): ?>		
			<div class="medium-9 <?php echo ($info_type == 'right_text') ? 'medium-offset-3' : ''; ?> columns" id="<?php echo $info_animationid; ?>">
				<div class="info_container info_text_only <?php echo ($info_type == 'right_text') ? 'right_position' : ''; ?> <?php echo $info_animationid; ?>_container">
					<?php if(!empty($info_title)): ?>
						<h2 class="title info_title"><?php echo $info_title; ?></h2>	
					<?php endif; ?>
					<?php if(!empty($info_content)): ?>
						<div class="current_text info_content">
							<p><?php echo $info_content; ?></p>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>

	</div>
</section>