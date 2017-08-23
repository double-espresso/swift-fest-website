<?php 

  $form_title = wave_get_post_meta($sectionMeta, "title", $sectionCounter, TRUE);
  $form_text = wave_get_post_meta($sectionMeta, "text", $sectionCounter, TRUE);
  $form_input = wave_get_post_meta($sectionMeta, "form", $sectionCounter, TRUE);
?>

<section class="form" id="form_section">
	<div class="row">
		<div class="medium-6 columns">
			<div class="form_info">			
				<?php if(!empty($form_title)): ?>
					<h2 class="title form_title">Contact Us</h2>
				<?php endif; ?>
				<?php if(!empty($form_text)): ?>
					<div class="current_text form_text">
						<p><?php echo $form_text; ?></p>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="medium-5 medium-offset-1 columns">
      <?php if(!empty($form_input)): ?>
        <div class="form_input">
          <?php echo do_shortcode($form_input); ?>
        </div>
      <?php endif; ?>
		</div>
	</div>
</section>