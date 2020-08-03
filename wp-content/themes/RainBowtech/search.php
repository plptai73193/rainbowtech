<?php
	get_header();
	$postFound = $wp_query->found_posts;
?>
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<h2 class="mb-4">
						<?php 
							if($postFound !=''){
								echo 'Tìm thấy '. $postFound . ' Kết quả.';
							} else {
								echo 'Không tìm thấy kết quả nào, vui lòng thử lại.';
							}
						?>
					</h2>
				</div>
			</div>
			<div class="row d-flex">
				<?php
					while (have_posts()) : the_post();
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
							<p><a href="<?php the_permalink() ?>" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Chi tiết</a></p>
						</div>
					</div>
				</div>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>					
		</div>
	</section>
<?php get_footer(); ?>