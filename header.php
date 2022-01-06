<?php
session_start();
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manu.php";
require "models/user.php";
require "models/paymethod.php";
require "models/cart.php";
require "models/cartdetail.php";
$cartdetail = new CartDetail;
$cart = new Cart;
$product = new Product();
$manu = new Manufacture;
$user = new User;
$paymentmethod = new PaymentMethod;
$getAllManu = $manu->getAllManu();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Nhom 2 - Store</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="#"><i class="fa fa-phone"></i> +84-98433-36-36</a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> quynhanh0298@gmai.com</a></li>
					<li><a href="map.php"><i class="fa fa-map-marker"></i> 53 Vo Van Ngan</a></li>
				</ul>
				<?php
				if (isset($_SESSION['user'])) { ?>
					<ul class="header-links pull-right">
						<li><a href="indexeditprofile.php"> Edit Profile</a></li>
						<li><a href="yourorder.php"> Your Orders</a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> Welcome <?php echo $_SESSION['user'] ?></a></li>
						<li><a href="./login/logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
					</ul>
				<?php
				} else { ?>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> VND</a></li>
						<li><a href="./login/indexlogin.php"><i class="fa fa-user-o"></i> Login</a></li>
					</ul>
				<?php
				}
				?>
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="index.php" class="logo">
								<img src="./img/logo.png" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form method="get" action="result.php">
								<input class="input" placeholder="Search here" name="keyword">
								<button type="submit" class="search-btn">Search</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">
							<!-- Wishlist -->
							<div>
								<?php
								if (isset($_SESSION['user'])) { ?>
									<a href="wishlist.php">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<?php if (isset($_SESSION['wishlist']['qty'])) { ?>
											<div class="qty"><?php echo $_SESSION['wishlist']['qty'] ?></div>
										<?php } else { ?>
											<div class="qty">0</div>
										<?php } ?>
									</a>
								<?php
								} else { ?>
									<a href="./login/indexlogin.php">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">0</div>
									</a>
								<?php
								}
								?>

							</div>
							<!-- /Wishlist -->

							<!-- Cart -->
							<div>
								<?php
								if (isset($_SESSION['user'])) { ?>
									<a href="cart.php">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<?php if (isset($_SESSION['cart']['qty'])) { ?>
											<div class="qty"><?php echo $_SESSION['cart']['qty'] ?></div>
										<?php } else { ?>
											<div class="qty">0</div>
										<?php } ?>
									</a>
								<?php
								} else { ?>
									<a href="./login/indexlogin.php">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty">0</div>
									</a>
								<?php
								}
								?>
							</div>
							<!-- /Cart -->

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->
	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<?php
					foreach ($getAllManu as $value) :
					?>
						<li><a href="result.php?manu_id=<?php echo $value['manu_id'] ?>">
								<?php echo $value['manu_name'] ?></a></li>
					<?php
					endforeach;
					?>
				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->