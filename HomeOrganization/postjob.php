<!DOCTYPE HTML>
<html class="no-js" lang="de">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="index,follow">

<title>JoinHands</title>
<link rel="icon" type="image/png" href="images/logoicon.ico" /> 

<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/bootsnav.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/swipebox.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/organization registration.css">

  

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> 
</head>

<body>
<nav class="navbar navbar-default navbar-sticky bootsnav">
<div class="container">
<div class="row"> 
<div class="attr-nav">
<a class="sponsor-button" href="EditProfile.html">My Account</a>
<a class="donation" href="#">Logout</a>
</div>           
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
<i class="fa fa-bars"></i>
</button>
<a class="navbar-brand logo" href="HomePage.html"><img src="images/JoinHands.jpg" class="img-responsive" /></a>
</div>
<div class="collapse navbar-collapse" id="navbar-menu">
<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
<li><a href="/">My Jobs</a></li>
<li><a href="Education Page.html">Education </a></li>
<li><a href="#">Volunteering</a></li>
<li><a href="EventPage/EventPage.html">My Events</a></li>
<li><a href="#">FAQ</a></li>
</ul>
</div>
</div>
</div>
</nav>

<section id="inner-banner">
<div class="overlay">
<div class="container">
<div class="row"> 
<div class="col-sm-6"><h1>Create New Job</h1>
</div>
<div class="col-sm-6">
<h6 class="breadcrumb"><a href="/">MyProject</a></div>
</div>
</div>
</div>
</section>


<form action="createjob.php" method="post" enctype="multipart/form-data">
	  <br>
	  
   		  <br>
          <label for="name"> <strong> Name of the Job* </strong> </label>
          <input type="text" id = "name" name="user_name" required="required" data-error="Organization Name is Required">
          <br>
		  <label for="images"> <strong> Add Images for the Job* </strong> </b></label>
          <input type="file" id = "avatar" name = "image" /> 

		      		  <br>
         <label for="description"> <strong> Add Project Description</strong> </label>
           <textarea id="description" name="usr-description" required="required" data-error="Add purpose of the Project"></textarea>
		   <br>
		   
		<label for="Category"><strong> Select Category</strong> </label>
        <select id="Category" name="category" required="required" data-error="Please enter the Estimated Amount">
		
            <option value="frontend_developer">Select a Category</option>
            <option value="food">Food Items</option>
            <option value="funding">Money and Funding</option>
            <option value="disaster">Disaster Management</option>
            <option value="infrastructure">Infrastucture</option>
            <option value="cloating">Clothing</option>
            <option value="medication">Medication</option>
            <option value="medical">Organ and Blood Donation</option>
         
		</select>
		
		 <button type="submit">Create Project</button>
</form>



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
									<a href="#">Volunteer</a>
								</li>
                                <li>
									<a href="#">Events</a>
								</li>
								
								<li>
									<a href="#">Jobs</a>
								</li>
								
								<li>
									<a href="#">FAQ</a>
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
