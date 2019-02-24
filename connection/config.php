<?php
$servername = "localhost";
$database = "shaheenoutdoors";
$username = "root";
$password = "";

	$con = mysqli_connect($servername, $username, $password, $database);
	if(mysqli_connect_errno()){
		"Connection to Database Not Established" . mysqli_error();
	}
?>
