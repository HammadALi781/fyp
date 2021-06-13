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
							<li><a href="../admin/Director-free/login.php">Admin</a></li>
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
	}
	if ($_POST) {
		$catagory = $_POST['movie'];
		$cinema = $_POST['cinema'];
		$name = $_POST['name'];
		$phone = $_POST['pnumber'];
		$cnic = $_POST['cnic'];
		$address = $_POST['address'];
		$price = $_POST['price'];
		$date = $_POST['date'];
		$seat = $_POST['seats'];
		$na = $_POST['netamount'];
		$insert = "insert into product(movie,cinema,name,phone,cnic,address,price,date,seat,net_amount) values ('$catagory','$cinema','$name','$phone','$cnic','$address','$price','$date','$seat','$na')";
		$res = mysqli_query($con, $insert);
		if (!$res) {
			echo mysqli_error($con);
		} else {
	?>
			<script>
				alert('Purchasing Done')
			</script>
	<?php
		}
		/*}*/
	}
	?>
	<div class="container">
		<h1 class="text-center pt-4 ">Book you Ticket From Here</h1>
		<section class="mt-4 mb-4">
			<form role="form" method="post">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Movie</label>
						<input type="text" name="movie" class="form-control" id="movie_name" value="<?php echo $datacat['movie_name']; ?>" required>
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Cinema</label>
						<select name="cinema" class="form-control" id="catagory_name" onchange="getrates();">
							<option>Select Cinema</option>
							<?php while ($datac = mysqli_fetch_array($ressc)) { ?>
								<option value="<?php echo $datac['cinema']; ?>"><?php echo $datac['cinema']; ?> </option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="inputAddress">Name</label>
					<input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="<?php if (isset($name)) echo $name; ?>" required>
				</div>
				<div class="form-group">
					<label for="inputAddress2">Phone number</label>
					<input type="number" name="pnumber" class="form-control" placeholder="Enter Phone number" value="<?php if (isset($phone)) echo $phone; ?>" required>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputCity">CNIC</label>
						<input type="number" name="cnic" class="form-control" placeholder="Enter Your CNIC number" value="<?php if (isset($cnic)) echo $cnic; ?>" required>
					</div>
					<div class="form-group col-md-4">
						<label for="inputState">address</label>
						<textarea  type="text" value="<?php if (isset($address)) echo $address; ?>" name="address" class="form-control" placeholder="Address"></textarea>
					</div>
					<div class="form-group col-md-2">
						<label for="inputZip">Price</label>
						<input type="number" name="price" class="form-control" id="price" value="<?php if (isset($pp)) echo $pdd; ?>" required>
					</div>
					<div class="form-group col-md-2">
						<label for="inputZip">Date</label>
						<input type="date" name="date" class="form-control" id="date" value="" required>
					</div>
					<div class="form-group col-md-2">
						<label for="inputZip">Seats</label>
						<input type="number" name="seats" class="form-control" id="rs" onKeyUp="addvalues(this)" placeholder="Enter your Seats" value="<?php if (isset($pdd)) echo $pdd; ?>" required>
					</div>
					<div class="form-group col-md-2">
						<label for="inputZip">Net Total</label>
						<input type="number" name="netamount" class="form-control" id="netprice" placeholder="Total Amount" value="<?php if (isset($na)) echo $na; ?>" required>
					</div>
				</div>

				<button type="submit" class="btn btn-primary text-center ">Submite</button>
			</form>
		</section>
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
	<script>
		function addvalues(qty) {

			var PerSeatPrice = document.getElementById('price').value;
			//var pweight = document.getElementById('pw').value;
			var qty1 = qty.value;
			// var totaldeduction = qty.value;
			var totalprice = parseFloat(PerSeatPrice) * parseFloat(qty1);
			if (qty1 == "") {
				document.getElementById('netprice').value = 0;
			} else {
				document.getElementById('netprice').value = totalprice;
			}
		}

		function getrates() {
			let catName = $("#catagory_name").val();
			let movieName = $("#movie_name").val();

			$.ajax({
				type: "POST",
				url: "select_price.php",
				data: ({
					name: catName,
					movie: movieName
				}),
				dataType: "json",
				success: function(response) {
					// show response for success
					console.log(response.id, response.Field_name);
					document.getElementById('price').value = response.price;
					// document.getElementById('pdeduction').value=$deduction_kg;
				}
			});
		}
	</script>
</body>

</html>