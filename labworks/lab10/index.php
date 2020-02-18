<?php 
	session_start();
	if(!isset($_SESSION['suserid'])){
		header('Location:login.php');
	}
?>
Hello, This is our dashboard

<br><br>

<a href="logout.php">Logout</a>