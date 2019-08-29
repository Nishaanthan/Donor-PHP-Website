<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname']; 
$_SESSION['country_name'] = $_POST['txtCountry'];


// Escape all $_POST variables to protect against SQL injections
$image = $mysqli->escape_string($_POST['avatar']);
$first_name = $mysqli->escape_string($_POST['fname']);
$last_name = $mysqli->escape_string($_POST['lname']);
$country_name = $mysqli->escape_string($_POST['txtCountry']);
$email = $mysqli->escape_string($_POST['email']);
$phone = $mysqli->escape_string($_POST['phone']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
      
// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM donor WHERE email='$email'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'Donor E - mail Already Exist!!';
    header("location: error.php");
    
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO 'donor' (image,first_name, last_name, country_name, email, phone password, hash) "
            . "VALUES ('$image','$first_name', '$last_name''$country_name','$email','$phone''$password', '$hash')";

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }
	}



