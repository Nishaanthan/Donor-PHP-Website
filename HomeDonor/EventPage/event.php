<?php	
	/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
    $_SESSION['message'] = "You must log in before viewing your profile page!";
    header("location: error.php");
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $country_name = $_SESSION['country_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>

	
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>JoinHands - Events</title>
		<link rel="icon" type="image/png" href="img/logoicon.ico" /> 
		

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">=
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link href="css/availability-calendar.css" rel="stylesheet">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="../index.php"><img src="img/logo.jpg" alt=""></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="../index.php">Projects</a>
									<a href="../education.php">Education</a>
									<a href="#volunteer">Volunteer</a>
									<a href="event.php">Events</a>
									<a href="#upcoming">FAQ</a>
									<a href="../myaccount.php">My Account</a>
									<a href="logout.php">Logout</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- End Header Area -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
						<div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
							<div class="banner-content col-lg-6 col-md-12">
								<h1> <b>
									Give Donation for Students in Maskeliya School for their Studies </b>
								</h1>
				        		<div class="row clock_sec d-flex flex-row justify-content-between" id="clockdiv">
				                    <div class="clockinner">
				                        <span class="days"></span>
				                        <div class="smalltext">Days</div>
				                    </div>
				                    <div class="clockinner">
				                        <span class="hours"></span>
				                        <div class="smalltext">Hours</div>
				                    </div>
				                    <div class="clockinner">
				                        <span class="minutes"></span>
				                        <div class="smalltext">Minutes</div>
				                    </div>
				                    <div class="clockinner">
				                        <span class="seconds"></span>
				                        <div class="smalltext">Seconds</div>
				                    </div>

				                </div>
							</div>
						</div>
				</div>
			</section>
			<!-- End banner Area -->

			
		

			

			<!-- Start events Area -->
			<section class="events-area section-gap" id="upcoming">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>Upcoming Events</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="row no-padding">
						<div class="col-lg-6 col-sm-6">
							<div class="single-events row no-padding">
								<div class="col-lg-4 image">
									<img src="img/e1.jpg" alt="">
								</div>
								<div class="col-lg-7 details">
									<a href="#">
										<h4>Give Donation for Students 
										Give Support for Students in Maskaliya.</h4>
									</a>
									<p>
										Maskaliya Students are expecting School Needs for their Education Purpose 
									</p>
									<p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
								</div>
							</div>
							<div class="single-events row no-padding">
								<div class="col-lg-4 image">
									<img src="img/e2.jpg" alt="">
								</div>
								<div class="col-lg-7 details">
									<a href="#">
										<h4>Addiction When Gambling
										Becomes A Problem</h4>
									</a>
									<p>
										inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
									</p>
									<p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">20 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
									<p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">20 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
								</div>
							</div>
							<div class="single-events row no-padding">
								<div class="col-lg-4 image">
									<img src="img/e3.jpg" alt="">
								</div>
								<div class="col-lg-7 details">
									<a href="#">
										<h4>Addiction When Gambling
										Becomes A Problem</h4>
									</a>
									<p>
										inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
									</p>
									<p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">55 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">16 comments</span></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-6">
							<div class="single-events row no-padding">
								<div class="col-lg-4 image">
									<img src="img/e4.jpg" alt="">
								</div>
								<div class="col-lg-7 details">
									<a href="#">
										<h4>Addiction When Gambling
										Becomes A Problem</h4>
									</a>
									<p>
										inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
									</p>
									<p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
								</div>
							</div>
							<div class="single-events row no-padding">
								<div class="col-lg-4 image">
									<img src="img/e5.jpg" alt="">
								</div>
								<div class="col-lg-7 details">
									<a href="#">
										<h4>Addiction When Gambling
										Becomes A Problem</h4>
									</a>
									<p>
										inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
									</p>
									<p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
								</div>
							</div>
							<div class="single-events row no-padding">
								<div class="col-lg-4 image">
									<img src="img/e6.jpg" alt="">
								</div>
								<div class="col-lg-7 details">
									<a href="#">
										<h4>Addiction When Gambling
										Becomes A Problem</h4>
									</a>
									<p>
										inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
									</p>
									<p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End events Area -->

<div class="bwt-footer-copyright">
<div class="container">
<div class="row">

<div class="left-text"> <center> Copyright &copy; JoinHands 2019. All Rights Reserved </center> </div>

</div>
        </div>
        </div>
        </div> 

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/availability-calendar.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="js/countdown.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>
