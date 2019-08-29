<?php
include("DBConnect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db,$_POST['txtEmail']);
    $mypassword = mysqli_real_escape_string($db,$_POST['txtPassword']);

    $sql = "SELECT * FROM donorsignup WHERE Email = '$myusername' and Password = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    mysqli_query($sql);

    if($sql > 0)
        echo "<script> alert('Username already exist'); location.href='NgoSign.html'; </script>";

    else
    {
        echo "<script> alert('You are successfully Login '); location.href='construction.html'; </script>";
    }
}
?>