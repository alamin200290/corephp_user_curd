<?php

	include_once('../db/functions.php');

	if(isset($_GET['id'])){

		$status = deleteUser($_GET['id']);
		if($status){
			header('location: ../views/userlist.php');
		}else{
			echo "Error: try again";
		}
	}else{
		echo "invalid request";
	}

?>