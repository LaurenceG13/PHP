<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Liste des administrateurs</title>
		<link href="../../include/account.css" rel="stylesheet" type="text/css"/>
		<style>
			p
			{
		    font-family: sans-serif, arial, monospace, sans-serif;
		    font-size: medium;
				color: #333;
		  }
			td
			{
				background-color: #e6f5ff;
				text-align: left;
			}
			.dark-grey
			{
				background-color: #ccebff;
			}
		</style>
	</head>
	<body>
		<h1>Liste des administrateurs</h1>
		<?php
		$count = 0;
		echo '<table>';
			foreach (unserialize(file_get_contents('../../private/admin')) as $user)
			{
				if ($count % 2 == 0)
				{
					echo '<tr>';
					echo '<td><p>'. $count . '<p></td>' ;
					echo '<td><p>'. $user['login'] . '<p></td>' ;
					echo '<tr>';
				}
				else
				{
					echo '<tr>';
					echo '<td class=dark-grey><p>'. $count . '<p></td>' ;
					echo '<td class=dark-grey><p>'. $user['login'] . '<p></td>' ;
					echo '<tr>';
				}
				$count = $count + 1;
			}
		echo '</table>';
		?>
	</body>
</html>
