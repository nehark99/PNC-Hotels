<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<html>
	<head>
		<title>PNC Hotel | Home</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		  </script>
	</head>
	<body> 
			<div class="header">
				<div class="content-box">
				<?php if (isset($_SESSION['success'])) : ?>
					<div class="error success" >
				<?php 
					unset($_SESSION['success']);
				?> </div>
				<?php endif ?>
				<div class="wrap">
					<div class="header-top">
						<div class="logo">
							<a href="home.php"><img src="images/logo2.png" title="logo" /></a>
						</div>
						<div class="contact-info">
						<p><br></p>
						<?php  if (isset($_SESSION['username'])) : ?>
							<p class="phone">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
							<p class="gpa"> <a href="home.php?logout='1'" style="color: red;">logout</a> </p>
							<?php endif ?>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="header-top-nav">
					<div class="wrap">
						<ul>
							<li class="active"><a href="home.php">Home</a></li>
							<?php if( $_SESSION['username'] == 'admin') {  ?> 
							<li><a href="view.php">User Records</a></li>
							<?php } else { ?>
							<li><a href="registration.php">Booking</a></li>
							<?php } ?>
							<?php if( $_SESSION['username'] == 'admin') {  ?> 
							<li><a href="adminlogin.php">User Bookings</a></li>
							<?php } else { ?>
							<li><a>Services</a></li>
							<?php } ?>														
							<li><a>Gallery</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
					<div class="image-slider">
						    <ul class="rslides" id="slider1">
						      <li><img src="images/slider3.jpg" alt=""></li>
						    </ul>
					</div>			
			<div class="content">
				<div class="quit">
					<p><span class="start"></span>The art of meeting your highest expectations.<span class="end"></span></p>
				</div>
<<<<<<< HEAD
				<!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" preloader-text="Loading" data-fw-param="123905/"></script> <!-- end feedwind code -->
=======
<!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" preloader-text="Loading" data-fw-param="123905/"></script> <!-- end feedwind code -->
>>>>>>> 2e3b7d25891be90655a0025d1ba7e0c976fe0d21
					<div class="content-grids">
						<div class="wrap">
						<div class="content-grid">
							<div class="content-grid-pic">
								<a href="#"><img src="images/icon1.png" title="image-name" /></a>
							</div>
							<div class="content-grid-info">
								<h3>Best food Ever</h3>
								<p></p> <!---desc--->
								
							</div>
							<div class="clear"> </div>
						</div>
						<div class="content-grid">
							<div class="content-grid-pic">
								<a href="#"><img src="images/icon2.png" title="image-name" /></a>
							</div>
							<div class="content-grid-info">
								<h3>24x7 phone support</h3>
								<p></p><!---desc--->
								
							</div>
							<div class="clear"> </div>
						</div>
						<div class="content-grid">
							<div class="content-grid-pic">
								<a href="#"><img src="images/iocn3.png" title="image-name" /></a>
							</div>
							<div class="content-grid-info">
								<h3>Best Room Services</h3>
								<p></p><!---desc--->
								
							</div>
							<div class="clear"> </div>
						</div>
						
						<div class="clear"> </div>
					</div>
				</div>
				<div class="clear"> </div>
				<div class="content-box">
					<div class="wrap">
					<div class="content-box-left">
						<div class="content-box-left-topgrid">
							<h3> Welcome to PNC Hotel </h3>
							<p> A HOME OUTSIDE HOME </p>
							<p> The PNC Hotel is located in the city centre, surrounded by well known scenic spots that you could die for. </p>
							<p> It has 100 rooms equipped with complete facilities and functions. 
							We offer guests the refined luxury of heritage, the effortlessly efficient service and amenities
							and a local experience with the assurance of quality. </p>
							
							<span>For more information about our Hotel, <br>Call 1800-PNC-789</span>
						</div> 
						
						<div class="content-box-left-bootomgrids">
							<div class="content-box-left-bootomgrid">
								<h3>Deluxe Rooms</h3>
								<p> <!---desc---></p>
								<a href="#"><img src="images/slider1.jpg" title="image-name" /></a>
							</div>
							<div class="content-box-left-bootomgrid">
								<h3>Luxury Rooms</h3> 
								<p><!---desc---></p>
								<a href="#"><img src="images/slider2.jpg" title="image-name" /></a>
							</div>
							<div class="content-box-left-bootomgrid lastgrid">
								<h3>Executive Rooms</h3>
								<p><!---desc---></p>
								<a href="#"><img src="images/slider3.jpg" title="image-name" /></a>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="content-box-right">
					<div class="content-box-right-topgrid">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.1124825456054!2d78.4829253152879!3d10.570370265852494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baa7b135ad715b5%3A0xa51ac287e997f8bb!2sPNC%20Hotel!5e0!3m2!1sen!2sin!4v1581350269418!5m2!1sen!2sin" 
							width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="">
							</iframe>
						</div>
						<div class="content-box-right-bottomgrid">
							<h3>Today's Specials</h3>
							<a href="#"><img src="images/slider1.jpg" title="imnage-name" /></a>
							<h4>Super Discount Offer</h4>
							<p><!---desc---></p>
							<a href="#">Read More</a>
						</div>
						
					</div>
					<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
				<div class="boxs">
				<div class="wrap">
				<div class="box">
			
				</div>
				<div class="box center-box">
					<ul>
						<li><a >Leave a Feedback</a></li>
						<li><a >Reviews and Ratings</a></li>
						<li><a >FAQs</a></li>	
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
			</div>
		</div>
	</body>
</html>

