<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ($_SESSION['logged_in'] != 1) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");
} else {
  // Makes it easier to read
  $first_name = $_SESSION['first_name'];
  $country_name = $_SESSION['country_name'];
  $email = $_SESSION['email'];
  $active = $_SESSION['active'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>JoinHands-Project</title>
  <link rel="icon" type="image/png" href="images/logoicon.ico" />


  <link href="css/bootsnav.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
  <link rel="stylesheet" href="./donate.css">

</head>

<body>

  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container">
      <div class="row">
        <div class="attr-nav">
          <a class="sponsor-button" href="myaccount.php">My Account</a>
          <a class="donation" href="../Sign Up Donor/logout.php">Logout</a>
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

  <!-- partial:index.partial.html -->
  <div class="container theme-background-white main-body">

    <div class="col-md-12">
      <div class="row donate-bar">
        <div class="col-md-4 theme-blue">
          GIVE WHERE NEEDED MOST
        </div>
        <div class="col-md-8">
          <ul class="nav navbar-nav navbar-left donate-buttons" id="donate-buttons">
            <li><a href="#">
                <button class="btn-blue active" data-dollars='25' data-impact="Covers housing or counseling services for one person">
                  $25
                </button>
              </a></li>
            <li><a href="#">
                <button class="btn-blue" data-dollars='50' data-impact="Covers housing or counseling services for two people">
                  $50
                </button>
              </a></li>
            <li><a href="#">
                <button class="btn-blue" data-dollars='100' data-impact="Covers housing or counseling services for four people">
                  $100
                </button>
              </a></li>
            <li><a href="#">
                <button class="btn-blue" data-dollars='500' data-impact="Covers housing or counseling services for twenty people">
                  $500
                </button>
              </a></li>
            <li id="other"><a href="#">
                <button class="btn-blue-other" data-dollars='other' data-impact="Thank you!">
                  OTHER
                </button>
              </a></li>
            <li id="other-input">
              <span>$</span>
              <input data-impact="That’s great. Thank you!">
            </li>
            <li><a href="#">
                <button class="btn-green" data-toggle="modal" data-target="#myModal">
                  DONATE
                </button>
              </a></li>
            <li style="display: none;"><a href="#">
                LEARN MORE<i class="fa fa-chevron-right margin-left"></i>
              </a></li>
          </ul>
          <p class="impact">
            Covers housing or counseling services for one person
          </p>
          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header well text-center theme-background-blue">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h2>You’re Donating:</h2>
                  <h1 style="font-size: 5.5em; margin-top: 0;">$<span id="price"></span></h1>
                  <em>Thank you!</em>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <section class="col-md-12">
                      <form>
                        <fieldset class="col-md-6">
                          <legend>
                            Your personal info
                          </legend>
                          <label>Your Name</label>
                          <input type="string" class="form-control">
                          <label>Your email</label>
                          <input type="email" class="form-control">
                          <label>Address</label>
                          <input type="email" class="form-control">
                          <label>City, State, Zip Code</label>
                          <input type="email" class="form-control">
                        </fieldset>
                        <fieldset class="col-md-6">
                          <legend>
                            Credit Card Information
                          </legend>
                          <label for="card-number">Credit Card Number</label>
                          <input placeholder="1234 5678 9012 3456" pattern="[0-9]*" type="text" class="form-control card-number" id="card-number">
                          <label for="card-number">Expiration Date</label>
                          <input placeholder="MM/YY" pattern="[0-9]*" type="text" class="form-control card-expiration" id="card-expiration">
                          <label for="card-number">CVV Number</label>
                          <input placeholder="CVV" pattern="[0-9]*" type="text" class="form-control card-cvv" id="card-cvv">
                          <label for="card-number">Billing Zip Code</label>
                          <input placeholder="ZIP" pattern="[0-9]*" type="text" class="form-control card-zip" id="card-zip">
                        </fieldset>
                      </form>
                    </section>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">BACK</button>
                  <button type="button" class="btn-green">CONTINUE</button>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        </div>
      </div>
      <!--/.donate-bar-->
    </div><!-- /.col-md-12 -->
</div>

<center><img src="donate.png"  width="300" height="300" style="margin:20px;"></center>

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

            <div class="left-text">
              <center> Copyright &copy; JoinHands 2019. All Rights Reserved </center>
            </div>

          </div>
        </div>
      </div>
  </div>
  </footer>
    <!-- partial -->

    


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js'></script>
  <script src="./donate.js"></script>

</body>

</html>