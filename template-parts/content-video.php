<?php
$video_section_title = get_field('video_section_title');
$video_section_body = get_field('video_section_body');
$video_section_video_url = get_field('video_section_video_url');
?>

<!-- VIDEO FEATURETTE -->
<section id="featurette">
	<div class="container">

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2><?php echo $video_section_title; ?></h2>

				<?php if (!empty($video_section_body)): ?>
					<p><?php echo $video_section_body; ?></p>
				<?php endif; ?>

				<iframe width="100%" height="415" src="<?php echo $video_section_video_url; ?>"
					frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>

