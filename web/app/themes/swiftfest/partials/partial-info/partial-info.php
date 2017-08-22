<?php
  $info_title = wave_get_post_meta($sectionMeta, "title", $sectionCounter, TRUE);
  $info_content = wave_get_post_meta($sectionMeta, "content", $sectionCounter, TRUE);
	$info_position = wave_get_post_meta($sectionMeta, "position", $sectionCounter, TRUE);
	$info_type = wave_get_post_meta($sectionMeta, "type", $sectionCounter, TRUE);
?>

<section class="info <?php echo $info_position; ?>">
	<div class="row">
		<div class="medium-9 <?php echo ($info_type == 'right_text') ? 'medium-offset-3' : ''; ?> columns" id="rev-1">
			<div class="info_container <?php echo ($info_type == 'right_text') ? 'right_position' : ''; ?>">
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
	</div>
</section>