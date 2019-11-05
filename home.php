<?php
	//session_start();
	if(isset($_COOKIE['username'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>

	<h1>Welcome Home! <?=$_COOKIE['username']?></h1> 
	<a href="logout.php">logout</a>
</body>	
</html>



<?php		
	}else{
		header('location: login.html');
	}

?>

