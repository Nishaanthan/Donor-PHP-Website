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
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="index,follow">

<title>JoinHands-FAQ</title>
<link rel="icon" type="image/png" href="images/logoicon.ico" /> 

<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/bootsnav.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/swipebox.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> 


    <meta charset="utf-8" />
    <title>JoinHands FAQ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
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
<li><a href="index.php">Request for Help</a></li>
<li><a href="education.php">Learn Skills</a></li>
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
<h1>Frequently Asked Questions (FAQ)</h1>
</div>
</div>
</section>

<!-- Bootstrap FAQ - START -->
<div class="container">
    <br />
		
	<center>
		<a class="typeform-share button" href="https://shahan3.typeform.com/to/koAe2f" data-mode="popup" style="display:inline-block;text-decoration:none;background-color:#2F0A68;color:white;cursor:pointer;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:50px;text-align:center;margin:0;height:50px;padding:0px 33px;border-radius:25px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;" target="_blank">Ask Me Anything </a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> 
		</center>

    <br/>
	<br/>
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        This section contains a wealth of information, related to <strong>JoinHands</strong> and if you cannot find any information please be free to ask by clicking <strong>Ask Me Anything</strong>
    </div>
</div>

	 <div class="panel-group" id="accordion">
        <div class="faqHeader">General questions</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Why JoinHands</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    JoinHands is a Web based solution which is created in order to give solution for people who are in need and who can offer services when needed
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Do I need any account to use this website</a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="panel-body">
                    This Website can only be accessible for people who have an account. So it's better to ave an Account to access the entire features 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">What is Poverty ?</a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="panel-body">
                   Poverty refers to the share of individuals whose house hold per capital consumption will drop drastically below official poverty line. 
                </div>
            </div>
        </div>

        <div class="faqHeader">Donors</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Who is a Donor</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    Donor is a Person who is willing to offer services for people who are in need 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">How donation is given for Projects</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    Just click on with a Project and You can donate, share on Social Media. Here Donation is given via Paypal integration to the System in which transaction is done using <strong> USD </strong>. 
                  
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">How a Donor can give Education Support</a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
                    Simply give your request in which you can select the preffered Education Skill wanted to offer and you will receive a Mail from Organization calling to offer Education Services
                    <br />
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Why Volunteer Service</a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
                    Give support for organization in Completing the Project that they undertaken Sucessfully
                     </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">Purpose of Having Event Page</a>
                </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse">
                <div class="panel-body">
                    Here a Donor can View events and simply navigate to the Events posted by Organization  
                </div>
            </div>
        </div>
        

        <div class="faqHeader">Organization</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">I want to buy a theme - what are the steps?</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    Buying a theme on <strong>PrepBootstrap</strong> is really simple. Each theme has a live preview. 
                    Once you have selected a theme or template, which is to your liking, you can quickly and securely pay via Paypal.
                    <br />
                    Once the transaction is complete, you gain full access to the purchased product. 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Is this the latest version of an item</a>
                </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="panel-body">
                    Each item in <strong>PrepBootstrap</strong> is maintained to its latest version. This ensures its smooth operation.
                </div>
            </div>
        </div>
		
		<div class="faqHeader">Help Requestor</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">I want to buy a theme - what are the steps?</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    Buying a theme on <strong>PrepBootstrap</strong> is really simple. Each theme has a live preview. 
                    Once you have selected a theme or template, which is to your liking, you can quickly and securely pay via Paypal.
                    <br />
                    Once the transaction is complete, you gain full access to the purchased product. 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Is this the latest version of an item</a>
                </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="panel-body">
                    Each item in <strong>PrepBootstrap</strong> is maintained to its latest version. This ensures its smooth operation.
                </div>
            </div>
        </div>
    </div>
</div>
	
<style>
    .faqHeader {
        font-size: 27px;
        margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "\e072"; /* "play" icon */
        float: right;
        color: #F58723;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
</style>

<!-- Bootstrap FAQ - END -->

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