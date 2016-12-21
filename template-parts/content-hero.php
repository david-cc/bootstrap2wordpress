<?php
// Custom fields
$prelaunch_price = get_post_meta(get_the_ID(), 'prelaunch_price', true);
$launch_price = get_post_meta(get_the_ID(), 'launch_price', true);
$final_price = get_post_meta(get_the_ID(), 'final_price', true);
$course_url = get_post_meta(get_the_ID(), 'course_url', true);
$button_text = get_post_meta(get_the_ID(), 'button_text', true);
?>

<!-- HERO Section: JUMBOTRON -->
<section id="jumbotron" data-type="background" data-speed="4">
	<article>
		<div class="container clearfix">
			<div class="row">
				<!-- Big Logo -->
				<div class="col-md-5">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png"
						alt="Bootstrap to Wordpress" class="logo">
				</div>

				<!-- Description et prix -->
				<div class="col-md-7 jumbotron">
					<h1><?php bloginfo('name'); ?></h1>

					<p class="lead"><?php bloginfo('description'); ?></p>

					<div id="price-timeline">
						<div class="price active">
							<h4>Pre-Launch Price <small>Ends soon!</small></h4>
							<span><?php echo $prelaunch_price; ?></span>
						</div>
						<div class="price">
							<h4>Launch Price <small>Coming soon!</small></h4>
							<span><?php echo $launch_price; ?></span>
						</div>
						<div class="price">
							<h4>Final Price <small>Coming soon!</small></h4>
							<span><?php echo $final_price; ?></span>
						</div>

						<p><a href="<?php echo $course_url; ?>"
							class="btn btn-lg btn-danger" role="button"
							target="_blank"><?php echo $button_text; ?></a></p>
					</div>
				</div>
			</div>
		</div>
	</article>
</section>

