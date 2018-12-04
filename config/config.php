<?php
//############## SQL Connection ################################################
// Database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'asset');

// Get Connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// If Connection Fail
if ($mysqli->connect_error) {
	die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Global Variables.
define("LOCAL", "http://localhost/asset/"); //local URL
define("WEB", "http://192.168.1.72:80/asset/"); //website URL
$environment = LOCAL; //change to WEB if you're live
?>
