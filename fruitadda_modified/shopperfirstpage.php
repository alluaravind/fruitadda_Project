<?php
session_start();

	if (!isset($_SESSION['useremail'])) {
		echo "notset";
		header('location:retailerregistration.php');
		
	}
	echo $_SESSION['useremail'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h6>welcome to shopper</h6>
	<a href="retailerregistration.php?logout='1'">logout</a>
	<a href="test.php">Main</a>
</body>
</html>