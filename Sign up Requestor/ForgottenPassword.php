
<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <?php include 'css/css.html'; ?>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign In/Up form</title>
  <link rel="icon" type="image/png" href="img/logoicon.ico" /> 
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>			


<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
      <a class="navbar-brand page-scroll" href= "../Landing Page/index.php"> <link rel="icon" type="image/png" href="img/logoicon.ico" /> <font size = "5"> <b> JoinHands </b>  </font> </a> </div>
	   
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
      					<div class="dropdown">
							<button class="dropbtn">Login Now</button>
								<div class="dropdown-content">
										<a href="../Sign up Donor/index.php">Donor</a>
										<a href= "../Sign up NGO/index.php">NGO</a>
                    <a href= "../Sign up Requestor/index.php">Requester</a>
                    <a href= "../Sign up Administrator/index.php">Administrator</a>
												</div>
												</div>
		
</nav>



  
  <div  id="container" :class="state">
  
  <div class="col-xs-10 col-xs-offset-1 col-lg-6 col-lg-offset-3 animated fadeInDown" id="form">
   <form action="forgot.php" method="post">
  
    <div id="form-info" class="text-center">
      <transition
      mode="out-in"
      enter-active-class="animated zoomIn"
      leave-active-class="animated zoomOut">
	
      <div key="login" v-if="state == '__signingin'" data-validate = "Please Enter a Valid Email">
        <h2>Forgotten Password</h2>
        <p> Enter Your Email and get the reset password link to set new password</p>
        
      </div>
        <div key="register" v-if="state == '__registration'">
          <h1>Sign Up</h1>
          <p>Become a JoinHand Donor/Requester </p>

        </div>
      </transition>
    </div>
    <div id="form-slider">
    <transition
      mode="out-in"
      enter-active-class="animated fadeIn"
      leave-active-class="animated fadeOut">
    <div v-if="state == '__signingin'" class="animate fadeIn" key="login" id="login-form">
      <div class="form-group">
        <img src="img/Logo.png" alt="" class="img-responsive center-block" width="100"/>
      </div>
      <div class="form-group">

        <input type="email" name="email" class="form-control" placeholder="E-mail" required = "required"/>
      </div>
            <div class="form-group" >
		<button type="submit" class="Sbutton btnlocal" name="forgot" />Forgot Password</button>
		</form>
		        
      </div> 
	  
	  

	
    
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js'></script>

  

    <script  src="js/index.js"></script>

</body>

</html>
