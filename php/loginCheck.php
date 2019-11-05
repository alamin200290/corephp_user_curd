<?php

	session_start();
	if(isset($_POST['submit'])){

		$uname = $_POST['uname'];
		$password = $_POST['pass'];

		if(empty($uname) == true || empty($password) == true){
			echo "null submission!";
		}else{

			$conn = mysqli_connect('localhost', 'root', '', 'webtech');
			//$sql = "select * from users where username='".$uname."' and password='".$password."'";

			$sql = "select * from users where username='{$uname}' and password='{$password}'";

			$result = mysqli_query($conn, $sql);
			$user = mysqli_fetch_assoc($result);

			if(count($user) > 0){
				
				$_SESSION['username'] = $uname;
				$_SESSION['password'] = $password;

				setcookie("username", $uname, time()+3600, "/");
				header('location: ../views/home.php');

			}else{
				echo "invalid username/password";
			}
		}

	}else{
		header('location: login.html');
	}


?>