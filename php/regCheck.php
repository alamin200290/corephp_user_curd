<?php
	
	require_once('functions.php');

	if(isset($_POST['submit'])){

		$uname = $_POST['uname'];
		$password = $_POST['pass'];
		$email = $_POST['email'];

		if(empty($uname) == true || empty($password) == true || empty($email) == true){
			echo "null submission!";
		}else{

			$status = register($uname, $password, $email);

			if($status){

				header('location: ../views/login.php?msg=success');
			}else{
				header('location: ../views/reg.php?msg=dberror');
			}
		}

	}else{
		header('location: ../views/reg.php');
	}


?>