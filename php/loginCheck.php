<?php

	session_start();
	if(isset($_POST['submit'])){

		$uname = $_POST['uname'];
		$password = $_POST['pass'];

		if(empty($uname) == true || empty($password) == true){
			echo "null submission!";
		}else{

			if($uname == $password){
				
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