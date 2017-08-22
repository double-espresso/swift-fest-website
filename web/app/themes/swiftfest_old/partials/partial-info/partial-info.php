<?php
  $info_title = glitch_get_post_meta($sectionMeta, "title", $sectionCounter, TRUE);
  $info_content = glitch_get_post_meta($sectionMeta, "content", $sectionCounter, TRUE);
	$info_type = glitch_get_post_meta($sectionMeta, "type", $sectionCounter, TRUE);
?>

<section class="info <?php echo $info_type; ?>">
	<div class="row">
		<div class="medium-9 medium-offset-3 columns" id="rev-4">
			<div class="info_container" data-stellar-ratio="2">
				<h2 class="title info_title">hello world</h2>	
				<p>questo è un testo a cazzo</p>
			</div>
		</div>
	</div>
</section>