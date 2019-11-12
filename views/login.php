<?php
	
	if(isset($_GET['msg'])){
		
/*		if($_GET['msg'] == 'success'){

		}*/
		echo $_GET['msg'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<form method="POST" action="../php/loginCheck.php">
		<fieldset>
			<legend>Login</legend>
		<table>
			<tr>
				<td>UserName:</td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td></td>
			</tr>
		</table>
		</fieldset>
	</form>

	<a href="reg.php">Signup</a>
</body>
</html>