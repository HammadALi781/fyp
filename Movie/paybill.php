<?php
ob_start();
session_start();
$con = mysqli_connect("localhost" , "root" , "" , "php_ticketbooking");//"hostname", "db username", "db password", "db name"
if(!$con)
{
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

<body onload="checkmovie();">
 
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
							<li><a href="movies.php">Movies</a></li>
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
<?php                                          
               
if($_POST)
{
$name = $_POST['name']; 
$method = $_POST['method'];
$card = $_POST['card'];
$cnic = $_POST['cnic'];
$code = $_POST['code'];
$price = $_POST['price'];
$insert = "insert into payments(name,method,card_number,pin,cnic,amount) values ('$name','$method','$card','$code','$cnic','$price')";
$res = mysqli_query($con, $insert);
if(!$res)
{
  echo mysqli_error($con);
}
else
{
?>
  <script>alert ('Purchasing Done')</script>
  <?php
}
/*}*/
}
?>
	<div class="container">
		<h1 class="text-center pt-4 ">Pay Amount</h1>
		<section class="mt-4 mb-4">
			<form role="form" method="post">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Name</label>
						<input type="text" name="name" class="form-control"  
                             value="<?php echo $_SESSION['name']; ?>" required>
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Cinema</label>
							<select name="method" class="form-control">
                 <option value="Jazz Cash">Jazz Cash</option>
                 <option value="Jazz Cash">HBL</option>
             </select>
					</div>
				</div>
				<div class="form-group">
					<label for="inputAddress">Card Number</label>
						<input type="number" name="card" class="form-control"  
                                          placeholder="Enter Card number"  required>
        				<div class="form-group">
					<label for="inputAddress">Code</label>
						<input type="number" name="code" class="form-control"  
                                          placeholder="Card Pin"  required>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputCity">CNIC</label>
						<input type="number" name="cnic" class="form-control"  
                                          placeholder="Enter Your CNIC number" value="<?php echo $_SESSION['cnic']; ?>" required>
					</div>

					<div class="form-group col-md-2">
						<label for="inputZip">Price</label>
						              <input type="number" name="price" class="form-control" id="price"  
                       value="<?php echo $_SESSION['netamount']; ?>"required>
					</div>											
				</div>
				
				<button type="submit" class="btn btn-primary text-center ">PayNow</button>
			</form>
		</section >
	</div>

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