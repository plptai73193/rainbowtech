<?php /* Template Name: Writer Template */ get_header(); ?>
<div class="main_section clearfix">
	<div id="content">
		<div class="in_content">
			<h2 class="title">FCライター紹介</h2>
			<?php
				$list_authors = get_all_authors();
			?>
			
			<div class="w_post">
				<?php
					foreach ($list_authors as $author) {
						$author_id = $author['ID'];
						$author_avatar = get_wp_user_avatar($author_id);
				?>
				<div id="author-<?php echo $author_id; ?>" class="item clearfix">
					<p class="writer-photo photo">
						<a href="<?php echo $author['posts_url']; ?>">
							<?php echo $author_avatar; ?>
						</a>
					</p>
					<div class="post">
						<h3><span><?php echo $author['name']; ?></span></h3>
						<p class="txt">
							<?php echo get_the_author_meta( 'description', $author_id ); ?>
						</p>
						<p class="btn"><a href="<?php echo $author['posts_url']; ?>">記事一覧 &gt;&gt;</a></p>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		
	</div>
	<?php get_sidebar('custom'); ?>
</div>
<?php get_footer(); ?>