
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

<title>JoinHands-Organization Registration</title>
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
       
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
<i class="fa fa-bars"></i>
</button>
<a class="navbar-brand logo" href="#"><img src="images/JoinHands.jpg" class="img-responsive" /></a>
</div>

</div>
</div>
</nav>

   
      <form action="add.php" method="post">
	  <br>
	  <br>
	   <br>
	    <br>
      
        <h1>Register Your Organization Information</h1>
        
        		  
		  <label for="avatar"> Add Your Avatar Image </label>
          <input type="file" id = "avatar" name = "avatar"> 
		  <br>
          <label for="name">Name of the Organization*</label>
          <input type="text" id = "name" name="txtoname" required="required" data-error="Organization Name is Required" value = "<?= $first_name.'' ?>">
          <br>
          <label for="address">Address*</label>
          <textarea  id="address" name="txtaddress" required="required" data-error="Enter Organization Address"> </textarea>
          <br>
          <label for="purpose">Purpose* </label>
           <textarea id="purpose" name="txtpurpose" required="required" data-error="Add purpose of the Project"></textarea>
		   <br>
		    <label for="name">Organization Contact Number*:</label>
          <input type="number" id = "phone1" name="txtphone1" required="required" data-error="Enter Your Contact Number" placeholder = "Number 1">
          <input type="number" id = "phone2" name="txtphone2" placeholder = "Number 2">
		  <br>
		   <label for="name">Fax Number if Available</label>
           <input type="number" id = "fax" name="txtfax">
		   <br>
		   <label for="name">Website if Available</label>
           <input type="url" id = "url" name="txturl">
          <br>
                 
               
          <label>Select Your Service Category</label>
          <input type="checkbox" id="education" value="category" name="category[]"><label class="light" for="education">Education Service</label><br>
            <input type="checkbox" id="volunteer" value="category" name="category[]"><label class="light" for="volunteer">Volunteering Services</label><br>
          <input type="checkbox" id="public" value="category" name="category[]"><label class="light" for="public">Public Relation</label> <br>
          <input type="checkbox" id="project" value="category" name="category[]"><label class="light" for="project">Project Management</label> <br>
          <input type="checkbox" id="funding" value="category" name="category[]"><label class="light" for="funding">Funding</label><br>
          <input type="checkbox" id="monitoring" value="category" name="category[]"><label class="light" for="monitoring">Monitoring and Control</label> 
		  <br>
		  <br>
        
        </fieldset>
        <button type="submit">Add Organization Information</button>
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
						<h4 class="footer-section-title"></h4><!-- /.footer-section-title -->
						
						<div class="footer-section-body">
							<ul class="list-links">
								

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
<!-- <div class="col-md-6 copyright"> -->
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
