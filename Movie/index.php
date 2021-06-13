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
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css" media="all" />
	<!-- Responsive CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>



	<!-- <div id="preloader"></div> -->
	<header class="header">
		<div class="container">
			<div class="header-area">
				<div class="logo">
					<h5>Cinema booking</h5>
				</div>
				<div class="menu-area">
					<div class="responsive-menu"></div>
					<div class="mainmenu">
						<ul id="primary-menu">
							<li><a class="active" href="index.php">Home</a></li>
							<li><a href="../admin/Director-free/login.php">Admin</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- breadcrumb area start -->
	<section class="breadcrumb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-area-content">
						<h1>Movies Page</h1>
					</div>
				</div>
			</div>
		</div>
	</section><!-- breadcrumb area end -->
	<!-- portfolio section start -->
	<section class="portfolio-area pt-60">
		<div class="container">
			<div class="row flexbox-center">
				<div class="col-lg-6 text-center text-lg-left">
					<div class="section-title">
						<h1 class=''>Book Your Movie</h1>
					</div>
				</div>
				<div class="col-lg-6 text-center text-lg-right">
					<div class="portfolio-menu">
						<!-- <ul>
								<li data-filter="*" class="active">Latest</li>
								<li data-filter=".soon">Comming Soon</li>
								<li data-filter=".top">Top Rated</li>
								<li data-filter=".released">Recently Released</li>
							</ul> -->
					</div>
				</div>
			</div>
			<hr />
			<div class="row portfolio-item">
				<?php
				$select = "select * from catagory";
				$res = mysqli_query($con, $select);
				while ($data = mysqli_fetch_array($res)) {
				?>

					<div class="col-lg-3 col-md-4 col-sm-6 soon released">
						<div class="single-portfolio">
							<div class="single-portfolio-img mt-5">
								<a href="movies.php?uid=<?php echo $data['catagory_name']; ?>">
									<img style="height: 350px;" src="../admin/Director-free/upload/<?php echo $data['image']; ?>" alt="portfolio" />
								</a>
								<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
									<!-- <i class="icofont icofont-ui-play"></i> -->
								</a>
							</div>
							<div class="portfolio-content">
								<h2><a href="movies.php?uid=<?php echo $data['catagory_name']; ?>">
										<?php echo $data['catagory_name']; ?>
									</a></h2>
								<div class="review">
									<div class="author-review">
										<!-- <i class="icofont icofont-star"></i> -->
										<!-- <i class="icofont icofont-star"></i> -->
										<!-- <i class="icofont icofont-star"></i> -->
										<!-- <i class="icofont icofont-star"></i> -->
										<!-- <i class="icofont icofont-star"></i> -->
									</div>
									<!-- <h4>180k voters</h4> -->
								</div>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</section><!-- portfolio section end -->
	<section class="video ptb-90">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title pb-20">
						<h1><i class="icofont icofont-film"></i> Trailers & Videos</h1>
					</div>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="col-md-12">
					<div class="video-slider mt-20">
						<div class="video-area">
							<img src="assets/img/video/video2.png" alt="video" />
							<a href="https://www.youtube.com/watch?v=KbnM3cnsHuE" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
						</div>
						<div class="video-area">
							<img src="assets/img/video/video3.png" alt="video" />
							<a href="https://www.youtube.com/watch?v=NSCQQ69eaks" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
						</div>
						<div class="video-area">
							<img src="assets/img/video/video4.png" alt="video" />
							<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
						</div>
						<div class="video-area">
							<img src="assets/img/video/video5.png" alt="video" />
							<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
						</div>
						<div class="video-area">
							<img src="assets/img/video/video2.png" alt="video" />
							<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
						</div>
						<div class="video-area">
							<img src="assets/img/video/video3.png" alt="video" />
							<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
						</div>
						<div class="video-area">
							<img src="assets/img/video/video4.png" alt="video" />
							<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
						</div>
						<div class="video-area">
							<img src="assets/img/video/video5.png" alt="video" />
							<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- video section end -->
	<!-- footer section start -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="widget">
						<h5>Cinema booking</h5>
						<!-- <img src="assets/img/logo.png" alt="about" /> -->
						<p>7th Harley Place, London W1G 8LZ United Kingdom</p>
						<h6><span>Call us: </span>(+880) 111 222 3456</h6>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="widget">
						<h4>Admin panal</h4>
						<ul>
							<li><a href="#">login</a></li>
							<li><a href="#">Home</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="widget">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter system now to get latest news from us.</p>
					</div>
				</div>
			</div>
			<hr />
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 text-center text-lg-right">
						<div class="copyright-content">
							<a href="#" class="scrollToTop">
								Back to top<i class="icofont icofont-arrow-up"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- footer section end -->
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