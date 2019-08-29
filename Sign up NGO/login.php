<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM organization WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "Username or Password is Incorrect!!";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['country_name'] = $user['country_name'];
        $_SESSION['active'] = '1';
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: ../HomeOrganization/register.php");
    }
    else {
        $_SESSION['message'] = "Username or Password is Incorrect!!";
        header("location: error.php");
    }
}
