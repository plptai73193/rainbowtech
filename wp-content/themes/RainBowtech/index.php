<?php get_header(); ?>
<?php 
	$aboutPageID = 83;
	$about = get_field('short_about', $aboutPageID);
?>
<section class="ftco-section bg-light">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="row justify-content-center mb-5">
               <div class="col-md-7 text-center heading-section ftco-animate">
                  <h2 class="mb-4">VỀ CHÚNG TÔI</h2>
               </div>
            </div>
            <div class="case">
               <?php echo $about?>
            </div>
            <a class="btnMore mt-30" href="<?php echo site_url('gioi-thieu') ?>">XEM THÊM</a>
         </div>
      </div>
   </div>
</section>

<?php 
	$dvExcerpt = get_field('dv_excerpt', '80');
	$args = [
		'post_type' => 'post',
		'posts_per_page' => 3,
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
                  <h2 class="mb-4">DỊCH VỤ NỔI BẬT</h2>
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
            <?php } wp_reset_postdata(); } ?>
         </div>
      </div>
      <a class="btnMore" href="<?php echo site_url('dich-vu'); ?>">XEM THÊM</a>
   </div>
</section>

<?php 
	$tkExcerpt = get_field('tk_excerpt', '103');
	$args = [
		'post_type' => 'post',
		'posts_per_page' => 3,
		'nopaging' => false,
		'tax_query' => Array( Array ( 
			'taxonomy' => 'category',
			'field' => 'slug',
			'terms' => 'thiet_ke',
		))
	];
	$query = new WP_Query($args);
	$posts = $query->posts;
?>
<section class="ftco-section bg-light">
   <div class="container">
      <div class="row justify-content-center mb-5">
         <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">THIẾT KẾ</h2>
            <?php 
					if($tkExcerpt != '') {
				?>
            <span class="subheading text-uppercase"><?php echo $tkExcerpt ?></span>
            <?php } ?>
         </div>
      </div>
      <div class="row d-flex">
         <?php
				if(isset($posts) && !empty($posts)){
					while ( $query->have_posts() ) : $query->the_post();
					$excerpt = get_the_excerpt();
					$postID = $posts->ID;
					$thumb = get_the_post_thumbnail_url($postID);
			?>
         <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
               <?php
						if($thumb != ''){
					?>
               <a href="<?php the_permalink() ?>" class="block-20"
                  style="background-image: url('<?php echo $thumb ?>');">
               </a>
               <?php } else { ?>
               <a href="<?php the_permalink() ?>" class="block-20"
                  style="background-image: url('<?php echo NO_IMAGE ?>');">
               </a>
               <?php } ?>
               <div class="text p-4 float-right d-block">
                  <div class="topper d-flex align-items-center">
                     <div class="one py-2 pl-3 pr-1 align-self-stretch">
                        <span class="day"><?php echo get_the_date('d') ?></span>
                     </div>
                     <div class="two pl-0 pr-3 py-2 align-self-stretch">
                        <span class="yr"><?php echo get_the_date('Y') ?></span>
                        <span class="mos"><?php echo get_the_date('M') ?></span>
                     </div>
                  </div>
                  <h3 class="heading mb-3"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                  <p>
                     <?php
								if($excerpt != ''){
									echo word_count($excerpt, 30);
								} else {
									echo '';
								}
							?>
                  </p>
                  <p><a href="<?php the_permalink() ?>" class="btn-custom"><span
                           class="ion-ios-arrow-round-forward mr-3"></span>Chi tiết</a></p>
               </div>
            </div>
         </div>
         <?php endwhile;} ?>
      </div>
      <a class="btnMore" href="<?php echo site_url('thiet-ke'); ?>">XEM THÊM</a>
   </div>
</section>

<?php 
	$ttExcerpt = get_field('tt_excerpt', '130');
	$args = [
		'post_type' => 'post',
		'posts_per_page' => 3,
		'nopaging' => false,
		'tax_query' => Array( Array ( 
			'taxonomy' => 'category',
			'field' => 'slug',
			'terms' => 'tin_tuc',
		))
	];
	$query = new WP_Query($args);
	$posts = $query->posts;
	// print_r($posts);
?>
<section class="ftco-section">
   <div class="container">
      <div class="row justify-content-center mb-5">
         <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">TIN TỨC</h2>
            <?php 
					if($ttExcerpt != '') {
				?>
            <span class="subheading text-uppercase"><?php echo $ttExcerpt ?></span>
            <?php } ?>
         </div>
      </div>
      <div class="row d-flex">
         <?php
				if(isset($posts) && !empty($posts)){
					while ( $query->have_posts() ) : $query->the_post();
					$excerpt = get_the_excerpt();
					$postID = $posts->ID;
					$thumb = get_the_post_thumbnail_url($postID);
			?>
         <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
               <?php
						if($thumb != ''){
					?>
               <a href="<?php the_permalink() ?>" class="block-20"
                  style="background-image: url('<?php echo $thumb ?>');">
               </a>
               <?php } else { ?>
               <a href="<?php the_permalink() ?>" class="block-20"
                  style="background-image: url('<?php echo NO_IMAGE ?>');">
               </a>
               <?php } ?>
               <div class="text p-4 float-right d-block">
                  <div class="topper d-flex align-items-center">
                     <div class="one py-2 pl-3 pr-1 align-self-stretch">
                        <span class="day"><?php echo get_the_date('d') ?></span>
                     </div>
                     <div class="two pl-0 pr-3 py-2 align-self-stretch">
                        <span class="yr"><?php echo get_the_date('Y') ?></span>
                        <span class="mos"><?php echo get_the_date('M') ?></span>
                     </div>
                  </div>
                  <h3 class="heading mb-3"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                  <p>
                     <?php
								if($excerpt != ''){
									echo word_count($excerpt, 30);
								} else {
									echo '';
								}
							?>
                  </p>
                  <p><a href="<?php the_permalink() ?>" class="btn-custom"><span
                           class="ion-ios-arrow-round-forward mr-3"></span>Chi tiết</a></p>
               </div>
            </div>
         </div>
         <?php endwhile; wp_reset_postdata();} ?>
      </div>
      <a class="btnMore" href="<?php echo site_url('tin-tuc'); ?>">XEM THÊM</a>
   </div>
</section>
<?php 
	$contactInfo = get_field('contact_info', 'option');
	$googleMap = get_field('google_map', 'option');
?>
<section class="ftco-section bg-light">
   <div class="map">
      <div class="ftco-animate">
         <div class="gmap">
            <?php echo $googleMap ?>
         </div>
         <div class="clearfix">
            <div class="fl-html">
               <div class="padding-tb-50px padding-lr-30px background-main-color pull-top-309px">
                  <div class="contact-info-map">
                     <div class="margin-bottom-30px">
                        <h2 class="title">Địa chỉ</h2>
                        <div class="contact-info opacity-9">
                           <i class="fa fa-map-marker" aria-hidden="true"></i>
                           <div class="text">
                              <span class="title-in">Địa chỉ :</span> <br>
                              <span class="font-weight-500">
                                 <?php echo $contactInfo[0]['dia_chi'] ?>
                              </span>
                           </div>
                        </div>
                     </div>
                     <hr>
                     <div class="call_center margin-top-30px">
                        <h2 class="title">Liên hệ</h2>
                        <div class="contact-info opacity-9">
                           <i class="fa fa-phone" aria-hidden="true"></i>
                           <div class="text">
                              <span class="title-in">Điện thoại :</span><br>
                              <span class="font-weight-500 text-uppercase">
                                 <a href="tel:<?php echo $contactInfo[0]['tel_mobile'] ?>"><span
                                       class="icon icon-mobile-phone"></span><span
                                       class="text"><?php echo $contactInfo[0]['tel_mobile'] ?></span></a><br>
                                 <a href="tel:<?php echo $contactInfo[0]['telephone'] ?>"><span
                                       class="icon icon-phone"></span><span
                                       class="text"><?php echo $contactInfo[0]['telephone'] ?></span></a>
                              </span><br>
                              <span class="title-in">Email :</span><br>
                              <span class="font-weight-500">
                                 <a href="mailto:<?php echo $contactInfo[0]['mail'] ?>"><span
                                       class="icon icon-envelope"></span><span
                                       class="text"><?php echo $contactInfo[0]['mail'] ?></span></a>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>

</section>

<?php get_footer(); ?>