<?php
$connection = mysqli_connect("localhost", "root", "toor")
or die ("Connection to Server Fail <br>" .mysqli_error($connection));

$db = mysqli_select_db($connection, "joinhand-test")
		or die ("Please Connect to a Database <br>".mysqli_error($connection));


$name = $_POST['txtname'];
$sname = $_POST['txtsurname'];
$email = $_POST['txtemail'];
$phone = $_POST['txtphone'];
$message = $_POST['txtmessage'];




$query = 'INSERT INTO `educationrequest`(`FirstName`, `LastName`, `Email`, `Phone`, `Message`) VALUES ("'.$name.'","'.$sname.'","'.$email.'","'.$phone.'", "'.$message.'")';



$result = mysqli_query($connection, $query)
or die ("Query Failed" .mysqli_error($connection));

mysqli_query($connection, $query);

{
    echo "<script> alert('Your Education Request has been recorded'); location.href='sucess.php'; </script>";
}




mysqli_close($connection);

?>
