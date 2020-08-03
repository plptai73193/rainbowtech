<?php 
  $postID = get_the_ID();
  $thumb = get_the_post_thumbnail_url($postID);
  $title = get_the_title();
  get_header(); 
?>

<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate">
        <p class="mb-5">
          <?php
            if($thumb != ''){
          ?>
            <img src="<?php echo $thumb ?>" alt="<?php echo $title ?>" class="img-fluid">
          <?php } else { ?>
            <img src="<?php echo NO_IMAGE ?>" alt="<?php echo $title ?>" class="img-fluid">
          <?php } ?>
        </p>
        <h2 class="mb-3"><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</section>



<?php get_footer(); ?>