<?php
	SESSION_START();
$servername = "localhost";
$database = "Online Store";
$username = "root";
$password = "";

	$con = mysqli_connect($servername, $username, $password, $database);
	if(mysqli_connect_errno()){
		"Connection to Database Not Established" . mysqli_error();
	}

// username and password sent from form 
$username=$_POST['mail']; 
$password=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = $username;
$password = $password;
$sql="SELECT * FROM `user` WHERE Email='$username' and Password='$password'";
		$run = mysqli_query($con, $sql);
		if($row = mysqli_fetch_assoc($run)){
				$_SESSION['FName'] = $row['FName'];
				header("location: index.php");
				exit();
		}
?>