<?php
	require 'db.php';
	if(isset($_POST['add'])){
		extract($_POST); // makes variables of array indexs
		$pdo->query("INSERT INTO tbl_user(id,name,address,email,birthdate) 
			VALUES('', '$name', '$address', '$email', '$birthdate')");
		echo 'Inserted';
	}
	if(isset($_GET['msg'])){
		echo $_GET['msg'];
	}

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$pdo->query("DELETE FROM tbl_user WHERE id = '$id'");
		echo 'User Deleted';
	}
?>
<h3>Enter User Detail</h3>
<form method="POST" action="">
	Name : <input type="text" name="name"><br><br>
	Address : <input type="text" name="address"><br><br>
	Email : <input type="email" name="email"><br><br>
	Birth Date : <input type="date" name="birthdate"><br><br>
	<input type="submit" name="add" value="Add">
</form>

<h3>User List</h3>
<table border="2">
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Email</th>
			<th>Birth Date</th>
			<th>Action</th>
		</tr>
		<?php
		$userList = $pdo->query("SELECT * FROM tbl_user");
		foreach ($userList as $user) {?>
			<tr>
				<td><?php echo $user['name'] ?></td>
				<td><?php echo $user['address'] ?></td>
				<td><?php echo $user['email'] ?></td>
				<td><?php echo $user['birthdate'] ?></td>
				<td>
					<a href="edituser.php?id=<?php echo $user['id'];?>">Edit</a> | 
					<a href="user.php?id=<?php echo $user['id'];?>">Delete</a>
				</td>
			</tr>
		<?php }
		?>
</table>









