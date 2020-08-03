<?php  
	/* Template Name: Liên hệ */ 
  get_header(); 
  $googleMap = get_field('google_map', 'option');
?>

<?php 
	$contactInfo = get_field('contact_info', 'option');
?>
	<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Thông tin liên hệ</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> <?php echo $contactInfo[0]['dia_chi'] ?></p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel:<?php echo $contactInfo[0]['tel_mobile'] ?>"><?php echo $contactInfo[0]['tel_mobile'] ?></a></p>
		  </div>
		  <div class="col-md-3">
            <p><span>TelePhone:</span> <a href="tel:<?php echo $contactInfo[0]['telephone'] ?>"><?php echo $contactInfo[0]['telephone'] ?></a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:<?php echo $contactInfo[0]['mail'] ?>"><?php echo $contactInfo[0]['mail'] ?></a></p>
          </div>
        </div>
        <div class="row block-9 no-gutters">
          <div class="col-lg-6 order-md-last d-flex">
            <div class="bg-light p-4 p-md-5 contact-form">
              <?php the_content(); ?>
            </div>
          </div>
          <div class="col-lg-6 d-flex">
          	<div id="ggmap" class="bg-white">
              <?php
                echo $googleMap
              ?>
			      </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>