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

<title>JoinHands</title>
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

<section id="inner-banner">
<div class="overlay">
<div class="container">
<div class="row"> 
<div class="col-sm-6"><h1>Education</h1>
</div>
<div class="col-sm-6">
<h6 class="breadcrumb"><a href="education.php">Education</a></div>
</div>
</div>
</div>
</section>

<section id="about-sec">
<div class="container">
<div class="row text-center">
<h2>Your Response has been Recorded</h2>
</div>
</div>
</section>

<section id="inner-banner">
<div class="col-sm-6">
<h5 class="breadcrumb"><a href="individualpost.php">Navigate Back</a></div>
</section>