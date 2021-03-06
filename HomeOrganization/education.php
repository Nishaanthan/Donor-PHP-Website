

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


<!DOCTYPE HTML>
<html class="no-js" lang="de">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="index,follow">

<title>JoinHands-Education</title>
<link rel="icon" type="image/png" href="images/logoicon.ico" /> 

<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/bootsnav.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/swipebox.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> 
</head>
<body>
<nav class="navbar navbar-default navbar-sticky bootsnav">
<div class="container">
<div class="row"> 
<div class="attr-nav">
<a class="sponsor-button" href="myaccount.php">My Account</a>
<a class="donation" href="logout.php">Logout</a>
</div>           
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
<i class="fa fa-bars"></i>
</button>
<a class="navbar-brand logo" href="index.php"><img src="images/JoinHands.jpg" class="img-responsive" /></a>
</div>
<div class="collapse navbar-collapse" id="navbar-menu">
<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
<li><a href="index.php">Project</a></li>
<li><a href="education.php">Education</a></li>
<li><a href="#">Volunteer</a></li>
<li><a href="EventPage/event.php">Events</a></li>
<li><a href="faq.php">FAQ</a></li>
</ul>
</div>
</div>
</div>
</nav>

<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1">
                        <h2 data-animation="animated bounceInDown"><span>Let Your Hands Help</span></h2>
                        <h3 data-animation="animated bounceInDown">Poverty entails fear and stress and sometimes depression. It meets a thousand petty humiliations and hardships. Climbing out of poverty by your own efforts that is something on which to pride yourself but poverty itself is romanticized by fools.</h3>
                    <!--    <h4 data-animation="animated bounceInUp"><a href="about-us.html">READ MORE</a></h4>   -->           
             </div> 
            <!-- Item 2 -->
            <div class="item slide2">
                        <h2 data-animation="animated bounceInDown"><span>Give a little change a lot</span></h2>
                        <h3 data-animation="animated bounceInDown">One of the best ways countries can combat poverty is to use development assistance to promote a growing private sector, in which the poor can fully participate.”</h3>
                     <!--   <h4 data-animation="animated bounceInUp"><a href="about-us.html">READ MORE</a></h4>   -->          
             </div>
            <!-- Item 3 -->
            <div class="item slide3">
                        <h2 data-animation="animated bounceInDown"><span>Raise fund Warm heart</span></h2>
                        <h3 data-animation="animated bounceInDown">So often the world sits idly by, watching ethnic conflicts flare up, as if these were mere entertainment rather than human beings whose lives are being destroyed. Shouldn’t the existence of even one single refugee be a cause for alarm throughout the world!</h3>
                       <!-- <h4 data-animation="animated bounceInUp"><a href="about-us.html">READ MORE</a></h4>   -->          
             </div>
            <!-- Item 4 -->
            <div class="item slide4">
                        <h2 data-animation="animated bounceInDown"><span>Raise Funds for a cause</span></h2>
                        <h3 data-animation="animated bounceInDown">Once poverty is gone, we'll need to build museums to display its horrors to future generations. They'll wonder why poverty continued so long in human society -- how a few people could live in luxury while billions dwelt in misery, deprivation and despair.</h3>
                     <!--   <h4 data-animation="animated bounceInUp"><a href="about-us.html">READ MORE</a></h4>       -->       
             </div>
            <!-- End Item 4 -->
    
        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>

<section id="about-sec">
<div class="container">
<div class="row text-center">
<h1>Education Services</h1>
</div>
</div>
</section>


  <div class="container">

                       <form id="contact-form" method="post" action="Education Page/createeducation.php" role="form">
                       

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Organization Name *</label>
                                        <input id="form_name" type="text" name="txtname" Value  =  "<?= $first_name.'' ?>" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required."> 
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Project Creater Name *</label>
                                        <input id="form_lastname" type="text" name="txtcname" class="form-control" placeholder="Please enter Project Creater Name *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="txtemail" value =" <?= $email.'' ?>" class="form-control" placeholder="Please enter your email *" required="required" data-error="Enter Valid E - mail.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_title">Project Title</label>
                                        <input id="form-title" type="text" name="txttitle" class="form-control" required="required" placeholder="Please enter Education Project Title">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                       <label for="form_title">Education Description</label>
                                        <textarea id="form_message" name="txtdescription" class="form-control" placeholder="Add Education Description " rows="4" required="required" data-error="Please add your Message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								
								 <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label for="form-requirement">Add Requirements</label>
									   <input id="form-requirement" type="text" name="txtreq1" class="form-control" required="required" placeholder="Add Requirements">
									   <input id="form-requirement" type="text" name="txtreq2" class="form-control" required="required" placeholder="Add Requirements">
									   <input id="form-requirement" type="text" name="txtreq3" class="form-control" placeholder="Add Requirements">
									   <input id="form-requirement" type="text" name="txtreq4" class="form-control"  placeholder="Add Requirements">
									   <input id="form-requirement" type="text" name="txtreq5" class="form-control"  placeholder="Add Requirements">
								
							<br>
							<br>
                                <div class="col-md-12">
								
                                    								
									<input type="submit" value="Send Message" class="btn btn-success btn-send" title="Click to Send Request">
                                </div>
                            </div>
							</form>
							
                            <div class="row">
                                <div class="col-md-12">
								<br>
                                    <p class="text-muted"><strong>*</strong> Marked Fields Needed to be Completed</p>
                                </div>
                            </div>
                        </div>

                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact-2.js"></script>

		  </div>



<footer class="footer">
		<div class="footer-body">
                <div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="footer-section">
						<h4 class="footer-section-title">About JoinHands</h4><!-- /.footer-section-title -->
						
						<div class="footer-section-body">
							<p> JoinHands - Let Your Hands Help is a Service oriented website which was created to give support to those people who are living under poverty under different types categories.
							By joining on this website a donor can offer more and more services to those people</p>
						</div><!-- /.footer-section-body -->
					</div><!-- /.footer-section -->
				</div><!-- /.columns large-3 medium-12 -->
				
				<div class="col-md-3">
					<div class="footer-section">
						<h4 class="footer-section-title">Sitemap</h4><!-- /.footer-section-title -->
						
						<div class="footer-section-body">
							<ul class="list-links">
								<li>
									<a href="HomePage.html">Project</a>
								</li>
								
								<li>
									<a href="#">Education</a>
								</li>
								
								<li>
									<a href="Education Page.html">Education</a>
								</li>
								
								<li>
									<a href="#">Volunteer</a>
								</li>
                                <li>
									<a href="Event Page/EventPage.html">Events</a>
								</li>
								
																
								<li>
									<a href="FAQ.html">FAQ</a>
								</li>
								
								
							</ul><!-- /.list-links -->

						</div><!-- /.footer-section-body -->
					</div><!-- /.footer-section -->
				</div><!-- /.columns large-3 medium-12 -->
				
				<div class="col-md-3">
					<div class="footer-section">
						<h4 class="footer-section-title">Newsletter Sign up</h4><!-- /.footer-section-title -->
						
						<div class="footer-section-body">
							<p>Subscribe for Newsletter </p>

							<div class="subscribe">
								<form action="?" method="post">
									<input type="submit" value="Go" class="subscribe-btn">
									
									<div class="subscribe-inner">
										<input type="email" id="mail" name="mail" value="" placeholder="Email Address" class="subscribe-field">
									</div><!-- /.subscribe-inner -->
								</form>
							</div><!-- /.subscribe -->
						</div><!-- /.footer-section-body -->
					</div><!-- /.footer-section -->
				</div><!-- /.columns large-3 medium-12 -->
				
				<div class="col-md-3">
					<div class="footer-section">
						<h4 class="footer-section-title">Contact Us</h4><!-- /.footer-section-title -->
						
						<div class="footer-section-body">
							<p><b>Address:</b>&nbsp;&nbsp;&nbsp;&nbsp; Colombo, Sri Lanka</p>

							<div class="footer-contacts">
								<p>
									<b>
										<i class="fa fa-phone"></i> Phone:
									</b> &nbsp;&nbsp;&nbsp;&nbsp;
									0094777777777
								</p>
								
								<p>
									<b>
										<i class="fa fa-envelope-o"></i> Email:
									</b> &nbsp;&nbsp;
									joinhandssrilanka@gmail.com
								</p>
							</div><!-- /.footer-contacts -->
						</div><!-- /.footer-section-body -->
					</div><!-- /.footer-section -->
				</div><!-- /.columns large-3 medium-12 -->
			</div><!-- /.row -->
		</div>
        </div><!-- /.footer-body -->

		<div class="bwt-footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-6 copyright">
<div class="left-text"> <center> Copyright &copy; JoinHands 2019. All Rights Reserved </center> </div>
</div>
        </div>
        </div>
        </div>
	</footer>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/banner.js"></script>  
<script src="js/jquery.swipebox.js"></script>
<script type="text/javascript">
	$( document ).ready(function() {

			/* Basic Gallery */
			$( '.swipebox' ).swipebox();
			
			/* Video */
			$( '.swipebox-video' ).swipebox();

			/* Dynamic Gallery */
			$( '#gallery' ).click( function( e ) {
				e.preventDefault();
				$.swipebox( [
					{ href : 'http://swipebox.csag.co/mages/image-1.jpg', title : 'My Caption' },
					{ href : 'http://swipebox.csag.co/images/image-2.jpg', title : 'My Second Caption' }
				] );
			} );

      });
</script>
<script src="js/script.js"></script>
</body>
</html>
