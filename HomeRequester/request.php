

<?php

$connection = mysqli_connect("localhost", "root", "toor")
or die ("Connection to Server Fail <br>" .mysqli_error($connection));

$db = mysqli_select_db($connection, "joinhand")
		or die ("Please Connect to a Database <br>".mysqli_error($connection));

$name = $_POST['txtname'];
$email = $_POST['txtemail'];
$phone = $_POST['txtphone'];
$message = $_POST['txtmessage'];





$query = 'INSERT INTO `request`(`Name`, `Email`, `Phone`, `Message`) VALUES ("'.$name.'","'.$email.'","'.$phone.'", "'.$message.'")';

$result = mysqli_query($connection, $query)
or die ("Query Failed" .mysqli_error($connection));


mysqli_query($connection, $query);

{
    echo "<script> alert('Your Request Form Has been Submitted for Review'); location.href='contact.php'; </script>";
}




mysqli_close($connection);

?>

