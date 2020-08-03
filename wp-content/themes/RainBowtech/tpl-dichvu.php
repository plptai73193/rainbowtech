<?php  
	/* Template Name: Dịch vụ */ 
	get_header(); 
	$dvExcerpt = get_field('dv_excerpt');
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	$args = [
		'post_type' => 'post',
		'posts_per_page' => 9,
		'paged' => $paged,
		'nopaging' => false,
		'tax_query' => Array( Array ( 
			'taxonomy' => 'category',
			'field' => 'slug',
			'terms' => 'dich_vu',
		))
	];
	$query = new WP_Query($args);
	$posts = $query->posts;
?>
<section class="ftco-section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="row justify-content-center mb-5">
               <div class="col-md-7 text-center heading-section ftco-animate">
                  <h2 class="mb-4">DỊCH VỤ</h2>
                  <?php 
								if($dvExcerpt != '') {
							?>
                  <span class="subheading text-uppercase"><?php echo $dvExcerpt ?></span>
                  <?php } ?>
               </div>
            </div>
            <?php 
						if(isset($posts) && !empty($posts)) {
						while ($query->have_posts()){
							$query->the_post();
							$excerpt = get_the_excerpt();
							$postID = $posts->ID;
							$thumb = get_the_post_thumbnail_url($postID);
					?>

            <div class="case">
               <div class="row blog-entry">
                  <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                     <?php
									if($thumb != '') {
								?>

                     <a href="<?php the_permalink() ?>" class="img w-100 mb-3 mb-md-0"
                        style="background-image: url(<?php echo $thumb ?>);"></a>

                     <?php } else { ?>

                     <a href="<?php the_permalink() ?>" class="img w-100 mb-3 mb-md-0"
                        style="background-image: url(<?php echo NO_IMAGE ?>);"></a>

                     <?php } ?>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                     <div class="text w-100 pl-md-3">
                        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                        </h2>
                        <div>
                           <?php
											if($excerpt != ''){
												echo word_count($excerpt, 30);
											} else {
												echo '';
											}
										?>
                        </div>
                        <div class="meta">
                           <p class="mb-0"><?php echo get_the_date('d/m/Y') ?></p>
                        </div>
                        <p><a href="<?php the_permalink() ?>" class="btn-custom"><span
                                 class="ion-ios-arrow-round-forward mr-3"></span>Chi tiết</a></p>
                     </div>
                  </div>
               </div>
            </div>
            <?php } } ?>
         </div>
      </div>
      <div class="row mt-5">
         <div class="col text-center">
            <div class="block-27">
               <?php 
						if (function_exists('custom_pagination')) {
						custom_pagination($query->max_num_pages,"",$paged);
						}
					?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>