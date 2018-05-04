<?php
session_start();
if ($_SESSION['logged_on_user'])
	$login = $_SESSION['logged_on_user'];
else
	$login = "Invité";
include('include/header.php')
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
	</head>
	<body>
		<h1><?php echo "Hello ".$login ?></h1>
	</body>
</html>
