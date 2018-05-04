<?php
if ($_POST['submit'] !== "OK" || !$_POST['login'] || !$_POST['oldpw'] || !$_POST['newpw'])
	echo "ERROR\n";
else {
	$login = $_POST['login'];
	$oldpwd = hash('whirlpool', $_POST['oldpw']);
	$newpwd = hash('whirlpool', $_POST['newpw']);
	$account = unserialize(file_get_contents('../../private/admin'));
	$match = FALSE;
	foreach ($account as $i => $user) {
		if ($user['login'] === $login && $user['passwd'] === $oldpwd) {
			$match = TRUE;
			$account[$i]['passwd'] = $newpwd;
			file_put_contents('../../private/admin', serialize($account));
			header('Location: ../home_admin.php');
		}
	}
	if (!$match)
		echo "ERROR\n";
}
?>
