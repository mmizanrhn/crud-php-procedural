<?php

$servername = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "crud";

// Create Connection 
$dbcon = new mysqli($servername, $dbuser, $dbpass, $dbname);

// Check Connection 
if($dbcon->connect_error){
	die("Connection Failed :". $dbcon->connect_error);
}else{
	//echo "Successfully Connected";
}


?>