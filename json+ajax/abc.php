<?php

	$data = $_GET['val'];
	$json = json_decode($data);

	//$json = ['id'=>'12', 'name'=>'alamin', 'course'=>'webtech'];
	header('Content-Type: application/json');
	echo json_encode($json);
?>