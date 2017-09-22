<?php
	$hero_suptitle = wave_get_post_meta($sectionMeta, "suptitle", $sectionCounter, TRUE);
  $hero_title_line_1 = wave_get_post_meta($sectionMeta, "title_line_1", $sectionCounter, TRUE);
  $hero_title_line_2 = wave_get_post_meta($sectionMeta, "title_line_2", $sectionCounter, TRUE);
  $hero_subtitle_1 = wave_get_post_meta($sectionMeta, "subtitle_1", $sectionCounter, TRUE);
  $hero_subtitle_2 = wave_get_post_meta($sectionMeta, "subtitle_2", $sectionCounter, TRUE);
  $hero_text_button = wave_get_post_meta($sectionMeta, "text_button", $sectionCounter, TRUE);
  $hero_type = wave_get_post_meta($sectionMeta, "type", $sectionCounter, TRUE);
?>

<section class="hero" <?php echo ($hero_type == 'animated') ? 'id="numbers_animated"' : ''; ?>>
	<div class="row">
		<div class="small-12 column">
			<div class="hero_info">

				<?php if(!empty($hero_suptitle)): ?>
					<div>
						<h2 class="title-small hero-suptitle animated_text"><?php echo $hero_suptitle; ?></h2>
					</div>
				<?php endif; ?>

				<div class="hero_title_container_desktop">
					<?php if(!empty($hero_title_line_1)): ?>
						<div>
							<h1 class="title-huge hero-title animated_text"><?php echo $hero_title_line_1; ?></h1>
						</div>
					<?php endif; ?>
					<?php if(!empty($hero_title_line_2)): ?>
						<div>
							<h1 class="title-huge hero-title animated_text"><?php echo $hero_title_line_2; ?></h1>
						</div>
					<?php endif; ?>
				</div>


				<div class="hero_title_container_mobile">
					<div>
						<h1 class="title-huge hero-title animated_text"><span>Swift</span></h1>
					</div>
					<div>
						<h1 class="title-huge hero-title animated_text"><span>fest</span></h1>
					</div>
				</div>
	
				<?php if(!empty($hero_subtitle_1)): ?>
					<div class="title-small hero_subtitle hero_subtitle_1 animated_text"><?php echo $hero_subtitle_1; ?></div>
				<?php endif; ?>
				<?php if(!empty($hero_subtitle_2)): ?>
					<div class="title-small hero_subtitle hero_subtitle_2 animated_text"><?php echo $hero_subtitle_2; ?></div>
				<?php endif; ?>
	      <?php if($hero_text_button): ?>
	        <a href="<?php the_sub_field("link_button"); ?>" title="<?php echo $hero_text_button; ?>" class="squared-button white hero_button">
	          <?php echo $hero_text_button; ?>
	        </a>
	      <?php endif; ?>

			</div>
		</div>
	</div>

	<div class="row">
		<div class="small-12 columnd">
			<div class="scroll_hint">
				<span>Scroll down</span>
			</div>
		</div>
	</div>
</section>
