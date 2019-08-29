

<?php

$connection = mysqli_connect("localhost", "root", "toor")
or die ("Connection to Server Fail <br>" .mysqli_error($connection));

$db = mysqli_select_db($connection, "joinhand")
		or die ("Please Connect to a Database <br>".mysqli_error($connection));
		
$id = $_POST['id'];
$fname = $_POST['txtname'];
$sname = $_POST['txtsurname'];
$mail= $_POST['txtemail'];
$phone = $_POST['txtphone'];
$message = $_POST['txtmessage'];




$query = 'INSERT INTO `education`(`ID`,`FirstName`, `SurName`, `Email`, `Phone`, `Message`) VALUES ("'.$id .'","'.$fname .'","'.$sname.'","'.$mail.'","'.$phone.'","'.$message.'")';

$result = mysqli_query($connection, $query)
or die ("Query Failed" .mysqli_error($connection));


mysqli_query($connection, $query);

    echo "<script> alert('Your Respond Has Been Recorded'); location.href='sucess.php'; </script>";


       
mysqli_close($connection);

?>



