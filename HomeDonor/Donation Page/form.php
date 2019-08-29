

<?php

$connection = mysqli_connect("localhost", "root", "toor")
or die ("Connection to Server Fail <br>" .mysqli_error($connection));

$db = mysqli_select_db($connection, "joinhand")
		or die ("Please Connect to a Database <br>".mysqli_error($connection));

$name = $_POST['txtname'];
$email = $_POST['txtemail'];
$address = $_POST['bill'];
$usrtel = $_POST['txtusrtel'];
$amount = $_POST['usrtel1'];
$message = $_POST['txtmessage'];





$query = 'INSERT INTO `donation-info`(`Name`, `Email`, `Address`, `ContactNo`, `Amount`, `Message`) VALUES ("'.$name.'","'.$email.'","'.$address.'",
"'.$usrtel.'", "'.$amount.'", "'.$message.'")';

$result = mysqli_query($connection, $query)
or die ("Query Failed" .mysqli_error($connection));


mysqli_query($connection, $query);

if($query > 0)
    echo "<script> alert('Please Complete the Form'); location.href='Thankyou.php'; </script>";

else
{
    echo "<script> alert('Thank you for Donating for a Life'); location.href='Thankyou.php'; </script>";
}




mysqli_close($connection);

?>

