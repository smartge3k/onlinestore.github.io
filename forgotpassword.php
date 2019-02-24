<?php
$servername = "localhost";
$database = "Online Store";
$username = "";
$password = "";
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

   $email = $_GET['mail'];
   $password = $_GET['password'];
   
   $sql = "Select * from `user` where Email='$email'";
   $sql = "REPLACE INTO 'user'(password) VALUES('$password');";
   echo $sql;

if (!mysqli_query($conn, $sql)) {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

if(mail($to, $subject, $message))
{   
    header('Location: login.php');
}
else
{
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    echo "mail not sent";
}

?>