<?php
session_start();
	//initialize cart if not set or is unset
if(!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}

	//unset qunatity
unset($_SESSION['qty_array']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Simple Shopping Cart using Session in PHP</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,700' rel='stylesheet' type='text/css' />
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.1.0/css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css" />
	<link rel="stylesheet" type="text/css" href="../css/owl.carousel.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../css/owl.theme.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../css/style.css" media="all" />
	<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/owl.carousel.js"></script>
	<script type="text/javascript" src="../js/customize.js"></script>
	<style>
	.product_image{
		height:200px;
	}
	.product_name{
		height:80px; 
		padding-left:20px; 
		padding-right:20px;
	}
	.product_footer{
		padding-left:20px; 
		padding-right:20px;
	}
</style>
</head>
<body>
<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div class="logo">
						<a href="#"><img src="../images/home_11/logo.png" alt="" /></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="top-nav">
					<div class="row">
						<div class="col-md-10 col-sm-12 col-xs-12">
							<div class="main-nav">
								<ul class="list-inline">
									<li class="has-mega-menu">
										<a href="#">Satchel Totes</a>
										<ul class="sub-menu">
											<li>
												<div class="wrap-mega-menu">
													<div class="row">
														<div class="col-md-6 col-sm-6 col-xs-12">
															<div class="mega-menu-simple-banner text-outer">
																<div class="mega-menu-simple-thumb">
																	<a href="#"><img
																			src="../images/home_11/mega-menu-women.png"
																			alt="" /></a>
																</div>
																<div class="mega-menu-simple-text">
																	<p class="mega-menu-text-intro"><strong>Women
																			fashion</strong> <span>| Lorem ipsum dolor
																			sit amet</span></p>
																</div>
															</div>
															<!-- End Mega Menu Simple Banner -->
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<div class="mega-menu-list-category">
																<h2>Categories</h2>
																<ul>
																	<li><a href="index2.html">Elektronik</a></li>
																	<li><a href="index3.html">Celana Jeans</a></li>
																	<li><a href="index4.html">Jam Tangan</a></li>
																	<li><a href="index5.html">Baju</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- End Nav -->
						</div>
						<div class="col-md-2 col-sm-12 col-xs-12">
							<div class="header-info">
								<div class="box-account-lc box">
									<a href="#" class="link-user-top"><img src="images/home_11/icon-user.png"
											alt="" /></a>
									<div class="box-inner">
										<ul class="links">
											<li class="first"><a href="#" title="My Account"
													class="top-link-myaccount">My Account</a></li>
											<li><a href="#" title="My Wishlist" class="top-link-wishlist">My
													Wishlist</a></li>
											<li><a href="logout/" title="Checkout" class="top-link-checkout">Logout</a>
											</li>
											<li class="last"><a href="login/" title="Log In" class="top-link-login">Log
													In</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Header Info -->
					</div>
				</div>
			</div>
		</div>
		</div>
	</header>
	<br/>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Simple Shopping Cart</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<!-- left nav here -->
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="view_cart.php"><span class="badge"><?php echo count($_SESSION['cart']); ?></span> Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add Product</button>
		<p/>
		<?php
		//info message
		if(isset($_SESSION['message'])){
			?>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-6">
					<div class="alert alert-info text-center">
						<?php echo $_SESSION['message']; ?>
					</div>
				</div>
			</div>
			<?php
			unset($_SESSION['message']);
		}


		//connection
		$conn = new mysqli('localhost', 'root', '', 'estore');

		$sql = "SELECT * FROM products";
		$query = $conn->query($sql);
		$inc = 4;
		while($row = $query->fetch_assoc()){
			$inc = ($inc == 4) ? 1 : $inc + 1; 
			if($inc == 1) echo "<div class='row text-center'>";  
			?>
			<div class="col-sm-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row product_image">
							<img src="<?php echo $row['photo'] ?>" width="80%" height="auto">
						</div>
						<div class="row product_name">
							<h4><?php echo $row['name']; ?></h4>
						</div>
						<div class="row product_footer">
							<p class="pull-left"><b><?php echo $row['price']; ?></b></p>
							<span class="pull-right"><a href="add_cart.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Cart</a></span>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
		if($inc == 1) echo "<div></div><div></div><div></div></div>"; 
		if($inc == 2) echo "<div></div><div></div></div>"; 
		if($inc == 3) echo "<div></div></div>";
		
		//end product row 
		?>

	</div>

	<div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="save_query.php" method="POST" enctype="multipart/form-data">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Product Name</label>
								<input class="form-control" type="text" name="name">
							</div>
							<div class="form-group">
								<label>Product Price</label>
								<input class="form-control" type="number" name="price">
							</div>
							<div class="form-group">
								<label>Product Photo</label>
								<input class="form-control" type="file" name="photo">
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<footer id="footer">
			<div class="footer-newsletter" data-parallax="scroll" data-image-src="images/home_11/parallax_02.png">
				<div class="container">
					<div class="row">
						<div class="newsletter-intro pull-left">
							<span class="envalope-icon"><i class="fa fa-envelope-o"></i></span>
							<p>SUBSCRIBE TO OUR NEWSLETTER TO RECEIVE NEWS, <br />UPDATES, AND ANOTHER STUFF BY EMAIL.
							</p>
						</div>
						<div class="newsletter-form pull-right">
							<form method="post">
								<input type="text" name="newsletter" value="Enter your email..."
									onfocus="if (this.value==this.defaultValue) this.value = ''"
									onblur="if (this.value=='') this.value = this.defaultValue" />
								<input type="submit" value="subscribe" />
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End Newsletter -->
			<div class="footer-quick-search">
				<div class="container">
					<div class="row">
					</div>
				</div>
			</div>
			<!-- End Quick Search -->
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-sm-3 col-xs-6">
							<div class="logo-footer"><a href="#"><img src="images/home_11/logo.png" alt="" /></a></div>
						</div>
						<div class="col-md-4 col-sm-3 col-xs-6">
							<div class="copy-right">
								<p>© 2019 <a href="#" class="privacy-policy">Privacy Policy</a></p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="contact-footer">
								<p>My Company, GR32 onlinestore.com<br />Call us now: 0892-1827-1113</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="social-footer">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-rss"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>