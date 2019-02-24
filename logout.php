<?php
session_start();
unset($_SESSION["FName"]);
header("Location: login.php");
?>