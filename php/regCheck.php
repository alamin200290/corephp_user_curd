<?php

	if(isset($_POST['submit'])){

		$uname = $_POST['uname'];
		$password = $_POST['pass'];
		$email = $_POST['email'];

		if(empty($uname) == true || empty($password) == true || empty($email) == true){
			echo "null submission!";
		}else{

			$conn = mysqli_connect('localhost', 'root', '', 'webtech');
			$sql = "insert into users values('', '{$uname}','{$password}', '{$email}', 0)";

			if(mysqli_query($conn, $sql)){

				header('location: ../views/login.php?msg=success');
			}else{
				header('location: ../views/reg.php?msg=dberror');
			}
		}

	}else{
		header('location: ../views/reg.php');
	}


?>