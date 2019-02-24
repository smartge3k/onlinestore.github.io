<?php
$servername = "localhost";
$database = "Online Store";
$username = "root";
$password = "";

// Create connection

$conn = mysql_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
      die("Connection failed:" . mysqli_connect_error());
}


if(isset($_POST['name']) && isset($_POST['mail']) && (isset($_POST['password']) && isset($_POST['cont']) && isset($_POST['address'])))
{
  $name = $_POST['name'];
   $email = $_POST['mail'];
   $password = $_POST['password'];
   $contact = $_POST['cont'];
   $address = $_POST['address'];
   $to = 'info@abc.com';
   $subject = 'NEW REGISTRATION ON WEBSITE';
   $message = "Credentials are as follows: /n Full Name:" . $name . "/n Email Address". $email . "/n Contact Number:" . $contact . "/n Postal Address" . $address ;
   $sql = "INSERT INTO `user`(`FName`, `Contact`, `Email`, `Password`, `Address`) VALUES ('$name', '$contact', '$email', '$password', '$address')";
}

if(isset($_POST['submit']))
{
  header('Location: login.php');
}

else
{
  //echo "not working";
}

?>