<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Food_Connection
 * @since Foodconnection 1.0
 */
?>

<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
	<div class="sidebar-box">
		<?php get_search_form() ?>
	</div>
	<?php 
		$args = [
			'post_type' => 'post',
			'posts_per_page' => 4,
			'nopaging' => false,
		];
		$query = new WP_Query($args);
		$posts = $query->posts;
	?>
	<div class="sidebar-box ftco-animate">
		<h3>Tin Mới Nhất</h3>
		<?php
			if(isset($posts) && !empty($posts)){
				while ( $query->have_posts() ) : $query->the_post();
				$excerpt = get_the_excerpt();
				$postID = $posts->ID;
				$thumb = get_the_post_thumbnail_url($postID);
		?>
		<div class="block-21 mb-4 d-flex">
			<?php
				if($thumb != ''){
			?>
			<a href="<?php the_permalink() ?>" class="blog-img mr-4"
				style="background-image: url('<?php echo $thumb ?>');">
			</a>
			<?php } else { ?>
			<a href="<?php the_permalink() ?>" class="blog-img mr-4"
				style="background-image: url('<?php echo NO_IMAGE ?>');">
			</a>
			<?php } ?>
			<div class="text">
				<h3 class="heading"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
				<div class="meta">
				<div><span class="icon-calendar"></span> <?php echo get_the_date('D. d, Y') ?></div>
				<div><span class="icon-person"></span><?php the_author() ?></div>
				</div>
			</div>
		</div>
		<?php endwhile; wp_reset_postdata();} ?>
	</div>
</div>
