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
		<title>VIMAK INFOTECH LABS</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="VIMAK navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.php">VIMAK<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsVIMAK" aria-controls="navbarsVIMAK" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbars">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<!-- <li><a class="nav-link" href="shop.php">Shop</a></li> -->
						<li><a class="nav-link" href="about.php">About us</a></li>
						<li><a class="nav-link" href="services.php">Services</a></li>
						<!-- <li><a class="nav-link" href="blog.php">Blog</a></li> -->
						<li><a class="nav-link" href="contact.php">Contact us</a></li>
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
								<h1>Modern Dynamic <span clsas="d-block">Website Development</span></h1>
								<p class="mb-4">VIMAK INFOTECH LABS, is a Tech,
									Web-Development  Solutions Company providing Quality,
									 Affordable and Custom-made Web and Software solutions to our clientele.</p>
									 <p><a href="services.php" class="btn btn-secondary me-2">Shop Now</a><a href="index.php" class="btn btn-white-outline">Explore</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<!-- <img src="images/vimak-infotech-labs-logo.png" style="height: 400px; width: 450px;" class="img-fluid"> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
                    
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Crafted with expertise.</h2>
						<p class="mb-4">Hello! VIMAK INFOTECH LABS,
                            is a company dealing with all aspects of website visually appealing and user-friendly development, and Software development.
                            <br> We are excited about, every opportunity to contribute our skills and knowledge to help businesses establish a strong online presence and connect with their target audience effectively.
                        </p>
						<p><a href="index.php" class="btn">Explore</a></p>
					</div> 
					<!-- End Column 1 -->
                        <?php
                                require 'config.php';
                                $sql="SELECT * FROM product";
                                 $result=mysqli_query($conn,$sql);
                       ?>
					
                        <?php
                         while($row=mysqli_fetch_array($result)){
                        ?>
                        
                        
                    <!-- Start Column 2 -->
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                            <div class="product-item">
                                    <img src="<?= $row['product_image']; ?>" class="img-fluid product-thumbnail">
                                        <h5 class="card-title">Product : <?= $row['product_name']?></h5>
                                        <h3>Price : $ <?= number_format($row['product_price']); ?> </h3>
                                        <a class="product-item" href="cart.php?id=<?= $row['id']; ?>">
                                            <span class="icon-cross">
                                                <img src="images/cross.svg" class="img-fluid">
                                            </span>
                                        </a>
                        </div>	
					</div> 
                    <?php }?>
					<!-- End Column 2 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us</h2>
						<p>Welcome to Vimak Infotech Labs.</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/truck.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Fast &amp; Efficient Development Time</h3>
									<p>We ensure to develop all your needs efficiently and quickly. </p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Responsive Design</h3>
									<p>Creating web pages that look good on all devices! A responsive web design will automatically adjust for different screen sizes</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>24/7 Support</h3>
									<p>Enjoy 24/7 support from our team on any software package dveloped for you, by us!</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/return.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Easy to Customize</h3>
									<p>Creating web pages that look good on all devices! A responsive web design will automatically adjust for different screen sizes</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="images/vimak-infotech-labs-logo.png" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="images/vimak-infotech-labs-logo.png" alt="IgnatiusVMK"></div>
							<div class="grid grid-2"><img src="images/vimak-infotech-labs-logo.png" alt="IgnatiusVMK"></div>
							<div class="grid grid-3"><img src="images/002vmk-infotech-labs-logo (002).png" alt="IgnatiusVMK"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">We Help You Develop Custom Wesbites for your Businesses.</h2>
						<p>
                        Hello! VIMAK INFOTECH LABS,
                        is a company dealing with all aspects of website visually appealing and user-friendly development, and Software development.
                        <br> We are excited about, every opportunity to contribute our skills and knowledge to help businesses establish a strong online presence and connect with their target audience effectively.
                        <br> If you are looking for a dedicated and creative developer to bring your website vision to life, We would love to hear from you!
                        </p>

						<ul class="list-unstyled custom-list my-4">
							<li>Best Quality Design</li>
							<li>Clean & Modern Design</li>
							<li>Responsive Design</li>
							<li>Easy to Customize</li>
						</ul>
						<p><a herf="#" class="btn">Explore</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End We Help Section -->

		<!-- Start Popular Product -->
        

		<div class="popular-product">
			<div class="container">
				<div class="row">
        <?php
                require 'config.php';
                $sql="SELECT * FROM product";
                $result=mysqli_query($conn,$sql);
            ?>
                        
            <?php
                while($row=mysqli_fetch_array($result)){ 
         ?>
          <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
                            <img src="<?= $row['product_image']; ?>" class="img-fluid product-thumbnail">
							</div>
							<div class="pt-3">
                            <h5 class="card-title">Product : <?= $row['product_name']?></h5>
                            <h3>Price : $ <?= number_format($row['product_price']); ?>/-</h3>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>
         <?php }?>

				</div>
			</div>
		</div>
        
		<!-- End Popular Product -->

		<!-- Start Testimonial Slider -->
		<div class="testimonial-section before-footer-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title">Testimonials</h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<div class="testimonial-slider">
								
							<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;I had the pleasure of working with VIMAK INFOTECH LABS on a critical Web development project, and I couldn't be happier with the outcome.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/user.svg" alt="IgnatiusVMK" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Zacheus Ochieng</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, GZIC Cleaning Services Ltd.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;The very best was expected from them ,and they delivered only the best.&rdquo;</p>
												</blockquote>
												<div class="author-info">
													<div class="author-pic">
														<img src="images/user.svg" alt="IgnatiusVMK" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">IgnacioVMK</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, ignaciovmk.netlify.app</span>
												</div>
											</div>

										</div>
									</div>
								</div>
								<!-- END item -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->
		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title">Recent Blog</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="#" class="more">View All Posts</a>
					</div>
				</div>

				<div class="row">

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/vimak-infotech-labs-logo.png" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Website SEO</a></h3>
								<div class="meta">
									<span>by <a href="#">IgnatiusVMK</a></span> <span>on <a href="#">Sep 19, 2023</a></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/002vmk-infotech-labs-logo (002).png" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Web Server Management</a></h3>
								<div class="meta">
									<span>by <a href="#">IgnatiusVMK</a></span> <span>on <a href="#">Sept 15, 2023</a></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/vimak-infotech-labs-logo.png" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Website Hsoting</a></h3>
								<div class="meta">
									<span>by <a href="#">IgnatiusVMK</a></span> <span>on <a href="#">Aug 12, 2023</a></span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Blog Section -->	

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

			<div class="sofa-img">
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