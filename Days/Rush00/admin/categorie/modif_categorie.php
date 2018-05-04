<?php
if ($_POST['submit'] !== "OK" || !$_POST['oldlog'] || !$_POST['newlog'] || !$_POST['pwd'])
	echo "ERROR\n";
else {
	$oldlog = $_POST['oldlog'];
	$newlog = $_POST['newlog'];
	$pwd = hash('whirlpool', $_POST['pwd']);
	$account = unserialize(file_get_contents('../../private/passwd'));
	$match = FALSE;
	foreach ($account as $i => $user) {
		if ($user['login'] === $oldlog && $user['passwd'] === $pwd) {
			$match = TRUE;
			$account[$i]['login'] = $newlog;
			file_put_contents('../../private/passwd', serialize($account));
			header('Location: ../home_admin.php');
		}
	}
	if (!$match)
		echo "ERROR\n";
}
?>
