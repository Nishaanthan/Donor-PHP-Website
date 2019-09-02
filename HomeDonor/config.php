<?php
//ob_start();
error_reporting(0);
session_start();

/* DATABASE CONFIGURATION */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_DATABASE', 'joinhand');
define('DB_PASSWORD', 'toor');
define("BASE_URL", "http://localhost/JoinHands/");

define('PRO_PayPal', 0);

if(PRO_PayPal){
	define("PayPal_CLIENT_ID", "#########################");
	define("PayPal_SECRET", "###################");
	define("PayPal_BASE_URL", "https://api.paypal.com/v1/");
}
else{
	define("PayPal_CLIENT_ID", "AfZBoOAE7JEB5HH2cICbtdwLHfxz7SbsnX7BWWW8AJNciHh_4hxYyCpu5T_qtyc3BgzhNy54-vgFYwL-");
	define("PayPal_SECRET", "ENlTIV_oC5sWsvkcSGGzGQCYi4mI4suer8-wDri8UAD4c9yU0mBDwToIu3FZzrWTyreRJB6BdXuB3EE5");
	define("PayPal_BASE_URL", "https://api.sandbox.paypal.com/v1/");
}



function getDB() 
{
	$dbhost=DB_SERVER;
	$dbuser=DB_USERNAME;
	$dbpass=DB_PASSWORD;
	$dbname=DB_DATABASE;
	$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbConnection->exec("set names utf8");
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbConnection;
}
?>