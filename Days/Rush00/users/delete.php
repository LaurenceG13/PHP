<?php
if ($_POST['submit'] !== "OK" || !$_POST['login'] || !$_POST['passwd'])
	echo "Mauvais identifiants.\n";
else {
	$login = $_POST['login'];
	$passwd = hash('whirlpool', $_POST['passwd']);
	$account = unserialize(file_get_contents('../private/passwd'));
	$match = FALSE;
	foreach ($account as $i => $user) {
		if ($user['login'] === $login && $user['passwd'] === $passwd) {
			$match = TRUE;
			unset($account[$i]);
			file_put_contents('../private/passwd', serialize($account));
			header('Location: ../index.php');
		}
	}
	if (!$match)
		echo "Mauvais identifiants.\n";
	else
		header('Location: logout.php');
}
?>
