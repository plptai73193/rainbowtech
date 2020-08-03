<?php 
/* Template Name: Giới Thiệu */ 
get_header(); 

?>
 <section class="ftco-section ftco-no-pt ftco-no-pb mt-50">
    	<div class="container">
			
    		<div class="row d-flex">
    			<!-- <div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(images/about.jpg);">
    					<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="icon-play"></span>
    					</a>
    				</div>
    			</div> -->
    			<div class="col-md-12 pl-md-12 py-md-12">
    				<div class="row justify-content-start pt-3 pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
						<?php
							while(have_posts()) : the_post();
						?>
							<?php the_content(); ?>
						<?php
							endwhile;
						?>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
	</section>
	

	<?php 
		$specialists = get_field('chuyen_gia');
		if(isset($specialists) && !empty($specialists) ) {

				
	?>		
    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Các chuyên gia hàng đầu</h2>
          </div>
		</div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
			<?php 
				foreach($specialists as $specialist) {	
			?>		

              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4"><?php echo $specialist['mo_ta'] ?></p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(<?php echo $specialist['avatar'] ?>)"></div>
                    	<div class="pl-3">
		                    <p class="name"><?php echo $specialist['ten'] ?></p>
		                    <span class="position"><?php echo $specialist['chuc_vu'] ?></span>
		                  </div>
	                  </div>
                  </div>
                </div>
			  </div>
			  
              <?php } ?>
             
              
            </div>
          </div>
        </div>
      </div>
	</section>
	<?php } ?>
<?php get_footer(); ?>