<?php
	
	include('../db/functions.php');
	$data = getAllUser();
?>

<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<h2>User List</h2>
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>

	<br>
	<br>

	<table border="1" >
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th> 
			<th>Email</th> 
			<th>Action</th> 
		</tr>

		
		<?php for($i=0; $i<count($data); $i++){ ?>
		<tr>
			<td><?= $data[$i]['id']; ?></td>
			<td><?= $data[$i]['username']; ?></td>
			<td><?= $data[$i]['password']; ?></td>
			<td><?= $data[$i]['email']; ?></td>
			<td>
				<a href="edit.php">Edit</a> | 
				<a href="../php/delete.php?id=<?=$data[$i]['id']?>">Delete</a> 
			</td>
		</tr>
		<?php	}  ?>
	</table>
</body>
</html>