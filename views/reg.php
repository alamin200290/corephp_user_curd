<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<form method="POST" action="../php/regCheck.php">
		<fieldset>
			<legend>Registration</legend>
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
				<td>Email:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td></td>
			</tr>
		</table>
		</fieldset>
	</form>

	<a href="login.php">SignIn</a>
</body>
</html>