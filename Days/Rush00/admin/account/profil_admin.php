<?php
	session_start();
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Mon Profil Admin</title>
		<style>
			body
			{
				font-family: sans-serif, arial, monospace, sans-serif;
			}
			h1
			{
				color: rgb(81, 170, 255);
			}
			div
			{
				float: left;
				text-align: center;
				padding: 12px 16px;
				display: inline-block;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}
			#login
			{
				background-color: rgb(81, 170, 255);
				font-size: large;
				font-weight: bold;
			}
		</style>
	<body>
		<h1>Mon Profil Admin</h1>
			<div>Mon login est : </div>
			<div id=login><?php echo $_SESSION['logged_on_user']?></div>
	</body>
</html>
