<?php
$connection = mysqli_connect("localhost", "root", "toor")
or die ("Connection to Server Fail <br>" .mysqli_error($connection));

$db = mysqli_select_db($connection, "joinhand")
		or die ("Please Connect to a Database <br>".mysqli_error($connection));


$avatar = $_POST['avatar'];
$name = $_POST['fname'];
$sname = $_POST['lname'];
$country = $_POST['txtcountry'];
$email = $_POST['email'];
$phone = $_POST['phone'];





$query = 'INSERT INTO `donor`(`image`,`firstname`, `lastname`,`country_name` `email`, `phone`) VALUES (""'.$avatar.'","'.$name.'","'.$sname.'","'.$country.'","'.$email.'",
"'.$phone.'",)';



$result = mysqli_query($connection, $query)
or die ("Query Failed" .mysqli_error($connection));

mysqli_query($connection, $query);

if($query > 0)
    echo "<script> alert('Username already exist'); location.href='myaccount.php'; </script>";

else
{
    echo "<script> alert('You are successfully Registered  '); location.href='.myaccount.php'; </script>";
}



mysqli_close($connection);
?>
