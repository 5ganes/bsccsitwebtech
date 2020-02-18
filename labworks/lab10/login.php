<?php
	session_start();
	if(isset($_SESSION['suserid'])){
		header('Location:index.php');
	}
	require 'db.php';
	if(isset($_POST['login'])){
		extract($_POST);
		$user = $pdo->prepare("SELECT * FROM tbl_user WHERE username=:username 
			and password = :password");
		$criteria = [
			'username' => $username,
			'password' => $password
		];
		$user->execute($criteria);
		if($user->rowCount() == 1){
			$row = $user->fetch();
			$_SESSION['suserid'] = $row['id'];
			header('Location:index.php'); 
		}
		else{
			echo 'Invalid Credentials. Please try again.';
		}
	}
?>
<h2>Login  Here</h2>
<form method="POST" action="">
	Username : <input type="text" name="username"><br><br>
	Password : <input type="password" name="password"><br><br>
	<input type="submit" name="login" value="Login">
</form>