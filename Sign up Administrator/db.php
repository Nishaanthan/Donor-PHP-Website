<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'toor';
$db = 'joinhand';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
