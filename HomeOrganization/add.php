<?php

$connection = mysqli_connect("localhost", "root", "toor")
or die ("Connection to Server Fail <br>" .mysqli_error($connection));

$db = mysqli_select_db($connection, "joinhand")
		or die ("Please Connect to a Database <br>".mysqli_error($connection));
		
$image = $_POST['avatar'];
$name = $_POST['txtoname'];
$address = $_POST['txtaddress'];
$usrtel1 = $_POST['txtphone1'];
$usrtel2 = $_POST['txtphone2'];
$fax = $_POST['txtfax'];
$url = $_POST['txturl'];
$purpose = $_POST['txtpurpose'];
$category = $_POST['category'];

$query = 'INSERT INTO `organizationinfo`(`image`,`organization-name`,`address`,`phone1`,`phone2`,`fax`,`website`,`purpose`,`category`) VALUES ("'.$image.'","'.$name.'",
"'.$address.'","'.$usrtel1.'","'.$usrtel2.'","'.$fax.'","'.$url.'","'.$purpose.'","'.$category.'")';

$result = mysqli_query($connection, $query)
or die ("Query Failed" .mysqli_error($connection));


mysqli_query($connection, $query);

if($query > 0)
    echo "<script> alert('Please Complete the Form'); location.href='register.php'; </script>";

else
{
    echo "<script> alert('Organization Information Added Sucessfully'); location.href='index.php'; </script>";
}

mysqli_close($connection);

?>