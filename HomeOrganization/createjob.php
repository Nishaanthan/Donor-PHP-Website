<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = 'localhost';
$user = 'root';
$pass = 'toor';
$db = 'joinhand';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);

$user_name = $mysqli->escape_string($_POST['user_name']);

$name = $_FILES['image']['name'];
$target_dir = "../upload/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

// Select file type
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Valid file extensions
$extensions_arr = array("jpg", "jpeg", "png", "gif");


$description = $mysqli->escape_string($_POST['usr-description']);
$category = $mysqli->escape_string($_POST['category']);


// Check extension
if (in_array($imageFileType, $extensions_arr)) {

    // Upload file
    move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $name);

    $sql = "INSERT INTO jobs (user_name, image, description, category) "
        . "VALUES ('$user_name','$name','$description','$category')";

    if ($mysqli->query($sql)) {
        echo "Job Created successfully ! ";
        // header("refresh:5;url=postjob.php");
    } else {
        echo "failed :(";
    }
}
