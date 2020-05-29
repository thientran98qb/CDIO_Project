<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Divisima | Linh Kiện MoTO</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?=BASE_URL?>/public/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?=BASE_URL?>/public/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?=BASE_URL?>/public/css/flaticon.css"/>
	<link rel="stylesheet" href="<?=BASE_URL?>/public/css/slicknav.min.css"/>
	<link rel="stylesheet" href="<?=BASE_URL?>/public/css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="<?=BASE_URL?>/public/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<?=BASE_URL?>/public/css/animate.css"/>
	<link rel="stylesheet" href="<?=BASE_URL?>/public/css/style.css"/>

</head>
<body>
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<!-- header -->
		<?php require_once "./mvc/views/customer/blocks/header.php"; ?>
		<?php require_once "./mvc/views/customer/blocks/menu.php"; ?>
	</header>
	<!-- Header section end -->
		<?php require_once "./mvc/views/customer/pages/".$data["page"].".php"; ?>
	<!-- Hero section -->
	<section class="footer-section">
		<?php require_once "./mvc/views/customer/blocks/footer.php"; ?>	
	</section>
	<script src="<?=BASE_URL?>/public/js/jquery-3.2.1.min.js"></script>
	<script src="<?=BASE_URL?>/public/js/bootstrap.min.js"></script>
	<script src="<?=BASE_URL?>/public/js/jquery.slicknav.min.js"></script>
	<script src="<?=BASE_URL?>/public/js/owl.carousel.min.js"></script>
	<script src="<?=BASE_URL?>/public/js/jquery.nicescroll.min.js"></script>
	<script src="<?=BASE_URL?>/public/js/jquery.zoom.min.js"></script>
	<script src="<?=BASE_URL?>/public/js/jquery-ui.min.js"></script>
	<script src="<?=BASE_URL?>/public/js/main.js"></script>
</body>
</html>