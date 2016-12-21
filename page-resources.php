<?php
/** Template Name: Resources Page */
get_header();

$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

<!-- Feature Image -->
<?php if (has_post_thumbnail()) { // Featured Image?>
<section class="feature-image"
	style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;"
	data-type="background"
	data-speed="2">
<?php } else { // fallback image ?>
<section class="feature-image feature-image-default"
	data-type="background"
	data-speed="2">
<?php } ?>

	<h1 class="page-title"><?php the_title(); ?></h1>
</section>

<!-- Main Content -->
<div class="container">
	<div class="row" id="primary">
		<div id="content" class="col-sm-12">
			<section class="main-content">

				<?php while (have_posts()): the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>

				<hr>

				<div class="resource-row clearfix">

					<?php $loop = new WP_Query(
						array(
							'post_type' => 'resource',
							'orderby' => 'post_id',
							'order' => 'ASC'
						));
					?>

					<?php while ($loop->have_posts()) : $loop->the_post(); ?>
					<div class="resource">
						<?php
							if (has_post_thumbnail()) {
								the_post_thumbnail(array(342, 200));
							}
						?>

						<h3>
							<a href="<?php echo get_field('resource_url');?>">
								<?php the_title(); ?>
							</a>
						</h3>

						<?php the_content(); ?>

						<a href="<?php echo get_field('resource_url'); ?>" class="btn btn-success">
							<?php echo get_field('resource_btn_text'); ?>
						</a>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>

				</div>
			</section>
		</div>
	</div>
</div>

<?php get_footer(); ?>

