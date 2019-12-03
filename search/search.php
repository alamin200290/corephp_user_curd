<?php
	
	require_once('db.php');

	$term = $_POST['key'];
	$con = getConnection();
	$sql = "select username from users where username like '%{$term}'";
	$result = mysqli_query($con, $sql);
	$row = "";
	while($data = mysqli_fetch_assoc($result)){
		$row .= $data['username']."|";
	}
	echo $row;
?>