<?php
ob_start();
session_start();
$con = mysqli_connect("localhost", "root", "", "php_ticketbooking"); //"hostname", "db username", "db password", "db name"
if (!$con) {
	echo mysqli_error($con);
}
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Moviepoint - Online Movie</title>
	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="assets/img/favcion.png" />
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
	<!-- Slick nav CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css" media="all" />
	<!-- Iconfont CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
	<!-- Owl carousel CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
	<!-- Popup CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
	<!-- Main style CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
	<!-- Responsive CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />

	<link rel="stylesheet" href="movies.html">
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="header-area">
				<div class="logo">
					<h5>Cinema Booking</h5>
				</div>
				<div class="menu-area">
					<div class="responsive-menu"></div>
					<div class="mainmenu">
						<ul id="primary-menu">
							<li><a class="active" href="index.php">Home</a></li>
							<li><a  href="../admin/Director-free/login.php">Admin</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="login-area">
		<div class="login-box">
			<a href="#"><i class="icofont icofont-close"></i></a>
			<h2>LOGIN</h2>
			<form action="#">
				<h6>USERNAME OR EMAIL ADDRESS</h6>
				<input type="text" />
				<h6>PASSWORD</h6>
				<input type="text" />
				<div class="login-remember">
					<input type="checkbox" />
					<span>Remember Me</span>
				</div>
				<div class="login-signup">
					<span>SIGNUP</span>
				</div>
				<a href="#" class="theme-btn">LOG IN</a>
				<span>Or Via Social</span>
				<div class="login-social">
					<a href="#"><i class="icofont icofont-social-facebook"></i></a>
					<a href="#"><i class="icofont icofont-social-twitter"></i></a>
					<a href="#"><i class="icofont icofont-social-linkedin"></i></a>
					<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
					<a href="#"><i class="icofont icofont-camera"></i></a>
				</div>
			</form>

		</div>
	</div>
	<div class="buy-ticket">
		<div class="container">
			<div class="buy-ticket-area">
				<a href="#"><i class="icofont icofont-close"></i></a>
				<div class="row">
					<div class="col-lg-8">
						<div class="buy-ticket-box">
							<h4>Buy Tickets</h4>
							<h5>Seat</h5>
							<h6>Screen</h6>
							<div class="ticket-box-table">

							</div>
							<div class="ticket-box-available">
								<input type="checkbox" />
								<span>Available</span>
								<input type="checkbox" checked />
								<span>Unavailable</span>
								<input type="checkbox" />
								<span>Selected</span>
							</div>
							<a href="#" class="theme-btn">previous</a>
							<a href="#" class="theme-btn">Next</a>
						</div>
					</div>
					<div class="col-lg-3 offset-lg-1">
						<div class="buy-ticket-box mtr-30">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- header section end -->
	<!-- hero area start -->
	<section class="hero-area" id="home">
		<div class="container">
			<div class="hero-area-slider">
				<div class="row hero-area-slide">
					<div class="col-lg-6 col-md-5">
						<div class="hero-area-content">
							<!-- <img src="assets/img/slide2.png" alt="about" /> -->
						</div>
					</div>
					<div class="col-lg-6 col-md-7">
					</div>
				</div>
				<div class="row hero-area-slide">
					<div class="col-lg-6 col-md-5">
						<div class="hero-area-content">
							<!-- <img src="assets/img/slide1.png" alt="about" /> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<?php

		$uid = $_GET['uid'];
		$select = "select * from sub_catagories where movie_name = '$uid'";
		$resmovie = mysqli_query($con, $select);
		$ressc = mysqli_query($con, $select);
		$score = mysqli_num_rows($resmovie);
		$datacat = mysqli_fetch_array($resmovie);
		if ($score == "") {
			echo '<b><div class="alert alert-danger" role="alert">
					Ticket price for this movie has not been added.Select other movie<a href="http://localhost/php_ticket_booking/Movie/movies.php">See Movies</a>   
				</div></b>';
		} else {
			$uid = $_GET['uid'];
			$select = "select * from catagory where catagory_name = '$uid'";
			$res = mysqli_query($con, $select);
			$data = mysqli_fetch_array($res);
		?>
			<div class="row">
				<div class="col-md-6 mt-5 mb-5">
					<img style="height: 600px;" class="image_tag" src="../admin/Director-free/upload/<?php echo $data['image']; ?>">
				</div>
				<div class="col-md-6 mt-5 ">
					<h2><?php echo $data['catagory_name']; ?></h2>
					<button class="btn_2 mt-3">
						<a class="text-dark" href="contact.php?uid=<?php echo $data['catagory_name']; ?>">Cinema Booking</a></button>
				</div>
			</div>
	</div>

<?php
		}
?>















<!-- jquery main JS -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Slick nav JS -->
<script src="assets/js/jquery.slicknav.min.js"></script>
<!-- owl carousel JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Popup JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Isotope JS -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- main JS -->
<script src="assets/js/main.js"></script>
</body>

</html>