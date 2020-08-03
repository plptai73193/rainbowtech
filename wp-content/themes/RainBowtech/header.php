<?php 
	$logo = get_field('logo_header', 'option');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php bloginfo('name') ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
		rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/frontend/images/favicon.png">
	<link rel="stylesheet" href="<?php echo CSS_PATH; ?>frontend/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH; ?>frontend/css/animate.css">

	<link rel="stylesheet" href="<?php echo CSS_PATH; ?>frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH; ?>frontend/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH; ?>frontend/css/magnific-popup.css">

	<link rel="stylesheet" href="<?php echo CSS_PATH; ?>frontend/css/aos.css">

	<link rel="stylesheet" href="<?php echo CSS_PATH; ?>frontend/css/ionicons.min.css">

	<link rel="stylesheet" href="<?php echo CSS_PATH; ?>frontend/css/flaticon.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH; ?>frontend/css/icomoon.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH; ?>frontend/css/style.css">
</head>

<body>
	<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand logoHeader" href="<?php echo site_url() ?>"><img src="<?php echo $logo ?>" alt="<?php bloginfo('name') ?>"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="<?php echo site_url() ?>" class="nav-link">Trang chủ</a></li>
					<li class="nav-item"><a href="<?php echo site_url('gioi-thieu') ?>" class="nav-link">Giới thiệu</a></li>
					<li class="nav-item"><a href="<?php echo site_url('dich-vu') ?>" class="nav-link">Dịch vụ</a></li>
					<li class="nav-item"><a href="<?php echo site_url('thiet-ke') ?>" class="nav-link">Thiết kế</a></li>
					<li class="nav-item"><a href="<?php echo site_url('tin-tuc') ?>" class="nav-link">Tin tức</a></li>
					<li class="nav-item"><a href="<?php echo site_url('tuyen-dung') ?>" class="nav-link">Tuyển dụng</a></li>
					<li class="nav-item"><a href="<?php echo site_url('lien-he') ?>" class="nav-link">Liên hệ</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->


	<div class="hero-wrap js-fullheight" style="background-image: url('<?php echo set_key_visual(); ?>');"
		data-stellar-background-ratio="0.5">
		<?php if(!is_home()) { ?>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<h1 class="mb-3 bread"><?php echo get_page_name(); ?></h1>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
