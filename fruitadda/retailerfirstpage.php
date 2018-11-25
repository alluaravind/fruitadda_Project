<?php
session_start();

	if (!isset($_SESSION['email'])) {
		echo "notset";
		header('location:retailerregistration.php');
		
	}
	echo $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h6>welcome to reatiler page</h6>
	<a href="retailerregistration.php?logout='1'">logout</a>
	
</body>
</html>