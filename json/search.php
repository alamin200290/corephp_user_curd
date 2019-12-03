<?php
	
	$json = "{'uname': 'test','id':'12','dept':'CS'}";	
	header('content-type:application/json');
	echo json_encode($json);
?>