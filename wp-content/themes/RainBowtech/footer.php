<?php 
	$logoFooter = get_field('logo_footer', 'option');
	$desc = get_field('mo_ta_ngan', 'option');
	$contactInfo = get_field('contact_info', 'option');
	$social = get_field('social', 'option');
?>

<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="logoFooter"><a href="<?php echo site_url() ?>"><img src="<?php echo $logoFooter ?>" alt="<?php bloginfo('name') ?>"></a></h2>
						<p><?php echo $desc ?></p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="<?php echo $social[0]['twitter'] ?>"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="<?php echo $social[0]['facebook'] ?>"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="<?php echo $social[0]['instagram'] ?>"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Site map</h2>
						<ul class="list-unstyled">
							<li><a href="<?php echo site_url() ?>" class="py-1 d-block"><span
										class="ion-ios-arrow-forward mr-3"></span>Trang chủ</a></li>

							<li><a href="<?php echo site_url('gioi-thieu') ?>" class="py-1 d-block"><span
										class="ion-ios-arrow-forward mr-3"></span>Giới thiệu</a></li>

							<li><a href="<?php echo site_url('dich-vu') ?>" class="py-1 d-block"><span
										class="ion-ios-arrow-forward mr-3"></span>Dịch vụ</a></li>
										
							<li><a href="<?php echo site_url('thiet-ke') ?>" class="py-1 d-block"><span
										class="ion-ios-arrow-forward mr-3"></span>Thiết kế</a></li>

							<li><a href="<?php echo site_url('tin-tuc') ?>" class="py-1 d-block"><span
							class="ion-ios-arrow-forward mr-3"></span>Tin tức</a></li>

							<li><a href="<?php echo site_url('tuyen-dung') ?>" class="py-1 d-block"><span
							class="ion-ios-arrow-forward mr-3"></span>Tuyển dụng</a></li>

							<li><a href="<?php echo site_url('lien-he') ?>" class="py-1 d-block"><span
							class="ion-ios-arrow-forward mr-3"></span>Liên hệ</a></li>

									
	


						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Liên hệ</h2>
						<div class="block-23 mb-3">
							<?php 
								if(isset($contactInfo) && !empty($contactInfo)) {
							?>

							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text"><?php echo $contactInfo[0]['dia_chi'] ?></span></li>
								<li><a href="tel:<?php echo $contactInfo[0]['tel_mobile'] ?>"><span class="icon icon-mobile-phone"></span><span class="text"><?php echo $contactInfo[0]['tel_mobile'] ?></span></a></li>

								<li><a href="tel:<?php echo $contactInfo[0]['telephone'] ?>"><span class="icon icon-phone"></span><span class="text"><?php echo $contactInfo[0]['telephone'] ?></span></a></li>
											
								<li><a href="mailto:<?php echo $contactInfo[0]['mail'] ?>"><span class="icon icon-envelope"></span><span
											class="text"><?php echo $contactInfo[0]['mail'] ?></span></a></li>
							</ul>
								<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						&copy;
						<script>document.write(new Date().getFullYear());</script> RainBowtech All rights reserved
					</p>
				</div>
			</div>
		</div>
	</footer>

	<script src="<?php echo JS_PATH; ?>frontend/js/jquery.min.js"></script>
	<script src="<?php echo JS_PATH; ?>frontend/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?php echo JS_PATH; ?>frontend/js/popper.min.js"></script>
	<script src="<?php echo JS_PATH; ?>frontend/js/bootstrap.min.js"></script>
	<script src="<?php echo JS_PATH; ?>frontend/js/jquery.easing.1.3.js"></script>
	<script src="<?php echo JS_PATH; ?>frontend/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo JS_PATH; ?>frontend/js/jquery.stellar.min.js"></script>
	<script src="<?php echo JS_PATH; ?>frontend/js/owl.carousel.min.js"></script>
	<script src="<?php echo JS_PATH; ?>frontend/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo JS_PATH; ?>frontend/js/aos.js"></script>
	<script src="<?php echo JS_PATH; ?>frontend/js/jquery.animateNumber.min.js"></script>
	<script src="<?php echo JS_PATH; ?>frontend/js/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="<?php echo JS_PATH; ?>frontend/js/google-map.js"></script>
	<script src="<?php echo JS_PATH; ?>frontend/js/main.js"></script>

</body>

</html>