<?php
	$hero_suptitle = wave_get_post_meta($sectionMeta, "suptitle", $sectionCounter, TRUE);
  $hero_title = wave_get_post_meta($sectionMeta, "title", $sectionCounter, TRUE);
  $hero_link_button = wave_get_post_meta($sectionMeta, "link_button", $sectionCounter, TRUE, "link");
  $hero_text_button = wave_get_post_meta($sectionMeta, "text_button", $sectionCounter, TRUE);
?>

<section class="hero" id="animated_hero">
	<div class="row">
		<div class="small-12 column">
			<div class="hero_info">
				<?php if(!empty($hero_suptitle)): ?>
					<div>
						<h2 class="title-small hero-suptitle"><?php echo $hero_suptitle; ?></h2>
					</div>
				<?php endif; ?>
				<?php if(!empty($hero_title)): ?>
					<div>
						<h1 class="title-huge hero-title title_animate"><span class="title_animate"><?php echo $hero_title; ?></span></h1>
					</div>
				<?php endif; ?>
	      <?php if($hero_link_button && $hero_text_button): ?>
	      	<div>
		        <a href="<?php echo $hero_link_button; ?>" title="<?php echo $hero_text_button; ?>" class="rounded-button white">
		          <?php echo $hero_text_button; ?>
		        </a>
	        </div>
	      <?php endif; ?>
			</div>
		</div>
	</div>
</section>
