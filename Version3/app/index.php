<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>

Congratulation! You have logged in successfully to Azubi Cloud Project Version 2. <a href="logout.php">Click here</a> to Logout.