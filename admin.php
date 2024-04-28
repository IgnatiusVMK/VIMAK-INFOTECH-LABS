<!-- /*
* Project Name: VIMAK
* Author: IgnatiusVMK
* URL: https://www.vimak-infotech-labs.co.ke
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="IgnatiusVMK">
  <link rel="shortcut icon" href="images/favicon.ico">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
        <!-- jQuery library -->
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
		<title>VIMAK_DB</title>
        <style>

*{
	font-family: sans-serif;
	box-shadow: border-box;
}

/*div.login{
	border: 2px solid #ccc;
	width: 500px;
	left: 50%;
	bottom: 50%;
	right: 50;
	/* position: absolute; */
	/* padding: 30px; */
	/* margin: -50px 0 0 -50px;
	border-radius: 15px;
}*/
  form#login{/* */
	border: 2px solid #ccc;
	width: 500px;
	left: 50%;
	bottom: 50%;
	right: 50;
	/* position: absolute; */
	/* padding: 30px; */
	/* margin: -50px 0 0 -50px; */
	border-radius: 15px;
     width: 500px;
     border: 2px solid #ccc;
     padding: 30px;
     background: #fff;
     border-radius: 15px;
	 
} */

h2{
	text-align: center;
	margin-bottom: 40px;
}

input{
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label{
	color: #888;
	font-size: 18px;
	padding: 10px;
}

button{
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	opacity: .7;
}
.error{
	background: #F2DEDE;
	color: #A94442;
	padding: 10px;
	width: 95%;
	border-radius: 5px;
	margin: 20px auto;
}

.success {
	background: #D4EDDA;
	color: #40754C;
	padding: 10px;
	width: 95%;
	border-radius: 5px;
	margin: 20px auto;
}

h1{
	text-align: center;
	color: #fff;
}

.ca {
	font-size: 14px;
	display: inline-block;
	padding: 10px;
	text-decoration: none;
	color: #444;
}
.ca:hover{
	text-decoration: underline;

}

        </style>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="VIMAK navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.php">VIMAK<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsVIMAK" aria-controls="navbarsVIMAK" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsVIMAK">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<!-- <li><a class="nav-link" href="shop.html">Shop</a></li> -->
						<li><a class="nav-link" href="about.html">About us</a></li>
						<li><a class="nav-link" href="services.html">Services</a></li>
						<!-- <li><a class="nav-link" href="blog.html">Blog</a></li> -->
						<li class="active"><a class="nav-link" href="contact.html">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="login.php"><img src="images/user.svg"></a></li>
						<li><a class="nav-link" href="#"><img src="images/cart.svg"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Product Creation</h1>
								<p class="mb-4">VIMAK INFOTECH LABS, is a Tech,
									Web-Development  Solutions Company providing Quality,
									 Affordable and Custom-made Web and Software solutions to our clientele.</p>
								<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src=""  class="img-fluid"> <!--images/vimak-infotech-labs-logo.png__style="height: 500px; width: 600px;  "-->
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->
		
		<!-- Start Admin Login Section -->
		<div class="container">
			 <div ><!--class="login" -->
					 <form action="login.php" method="post" id="login"> <!--"-->
						<h2>LOGIN</h2>
							<?php 
								if (isset($_GET['error'])) { 
							?>
								<p class="error">
							<?php 
								echo $_GET['error']; 
							?>
								</p>
							<?php }?>
							<label>User Name</label>
							<input type="text" name="uname" placeholder="User Name"><br>

							<label>Password</label>
							<input type="password" name="password" placeholder="Password"><br>

							<button type="submit">Login</button>
										
					</form> 
			</div>
		</div>
			
			
		<!-- End Admin Login Section -->
		<!-- <a href="signup.php" class="ca">Create an account</a> -->


		<!-- Start Footer Section -->
		
		<footer class="footer-section">
			<div class="container relative">
			
				<div class="sofa-img">
				<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br/> -->
					<img src="images/vimak-infotech-labs-logo.png" alt="Image" class="img-fluid">
			   </div>

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">VIMAK<span>.</span></a></div>
						<p class="mb-4">VIMAK INFOTECH LABS, is a Tech,
							Web-Development  Solutions Company providing Quality,
							 Affordable and Custom-made Web and Software solutions to our clientele.</p>

						<ul class="list-unstyled custom-social">
							<li><a href="https://www.facebook.com/profile.php?id=100093203151471" target="_blank"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="https://twitter.com/VIMAK_InfoTech" target="_blank"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="https://www.instagram.com/vimak_infotech_labs/" target="_blank"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#" target="_blank"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="about.html">About us</a></li>
									<li><a href="services.php">Services</a></li>
									<!-- <li><a href="#">Blog</a></li> -->
									<li><a href="contact.php">Contact us</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="mailto:info@vimak-infotech-labs.co.ke">Support</a></li>
									<li><a href="#">Knowledge base</a></li>
									<li><a href="#">Live chat</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<!-- <li><a href="#">Jobs</a></li> -->
									<li><a href="about.php">Our team</a></li>
									<li><a href="terms&conditions.php">Terms &amp; Conditions</a></li>
									<li><a href="privacy_policy.php">Privacy Policy</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="services.php">Wesbsite Development</a></li>
									<li><a href="services.php">Website Maintenance</a></li>
									<li><a href="services.php">Web Server services</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed by <a href="https://IgnatiusVMK">IgnatiusVMK</a>
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="terms&conditions.php">Terms &amp; Conditions</a></li>
								<li><a href="privacy_policy.php">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
