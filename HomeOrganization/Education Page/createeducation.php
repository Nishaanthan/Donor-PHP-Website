

<?php

$connection = mysqli_connect("localhost", "root", "toor")
or die ("Connection to Server Fail <br>" .mysqli_error($connection));

$db = mysqli_select_db($connection, "joinhand")
		or die ("Please Connect to a Database <br>".mysqli_error($connection));
		
$id = $_POST['id'];
$oname = $_POST['txtname'];
$cname = $_POST['txtcname'];
$mail= $_POST['txtemail'];
$title = $_POST['txttitle'];
$des = $_POST['txtdescription'];
$req1 = $_POST['txtreq1'];
$req2 = $_POST['txtreq2'];
$req3 = $_POST['txtreq3'];
$req4 = $_POST['txtreq4'];
$req5 = $_POST['txtreq5'];




$query = 'INSERT INTO `educationproject`(`ID`,`organizationname`, `creater`, `Email`, `title`, `description`, `requirement1`, `requirement2`, `requirement3`, `requirement4`, `requirement5`) VALUES ("'.$id .'","'.$oname .'","'.$cname.'","'.$mail.'","'.$title.'","'.$des.'","'.$req1.'","'.$req2.'","'.$req3.'","'.$req4.'","'.$req5.'")';

$result = mysqli_query($connection, $query)
or die ("Query Failed" .mysqli_error($connection));


mysqli_query($connection, $query);

    echo "<script> alert('Your Project is Under Review'); location.href='sucess.php'; </script>";


       
mysqli_close($connection);

?>



CREATE TABLE `educationproject` (
  `ID` int(9) NOT NULL AUTO_INCREMENT,
  `organizationname` varchar(50) NOT NULL,
  `creater` varchar(50) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `requirement1` varchar(50) NOT NULL,
  `requirement2` varchar(50) NOT NULL,
  `requirement3` varchar(50) NOT NULL,
  `requirement4` varchar(50) NOT NULL,
  `requirement5` varchar(50) NOT NULL,
   PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
