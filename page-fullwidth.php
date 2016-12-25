<?php 
/* Template Name: Full-width Template */

  $thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

  get_header();
?>

<!-- Feature Image -->
<?php 
if (has_post_thumbnail()) { ?>
  <section class="feature-image feature-image-default"
    style="background: url('<?php echo $thumbnail_url; ?>') no-repeat;background-size: cover;"
    data-type="background"
    data-speed="2">
<?php 
} else { // Fallback image ?>
  <section class="feature-image feature-image-default"
    data-type="background"
    data-speed="2">
  <?php 
} ?>

  <h1 class="page-title"><?php the_title(); ?></h1>
</section>

<div class="container">
  <div id="primary" class="row">
    <div id="content" class="col-sm-12">
      <section class="main-content">
        
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>

      </section>
    </div>
  </div>
</div>

<?php get_footer(); ?>
