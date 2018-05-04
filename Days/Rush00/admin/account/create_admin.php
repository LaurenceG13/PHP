<?php
if ($_POST['submit'] === "OK" && $_POST['login'] && $_POST['passwd']) {
	if (!file_exists('../../private'))
		mkdir("../../private");
	if (!file_exists('../../private/admin'))
		file_put_contents('../../private/admin', "");
	$account = unserialize(file_get_contents('../../private/admin'));
	if ($account) {
		$exist = FALSE;
		foreach ($account as $user) {
		if ($user['login'] === $_POST['login'])
			$exist = TRUE;
		}
	}
	if ($exist)
		echo "ERROR\n";
	else {
		$tmp['login'] = $_POST['login'];
		$tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
		$account[] = $tmp;
		file_put_contents('../../private/admin', serialize($account));
		header('Location: ../home_admin.php');
	}
}
else
	echo "ERROR\n";
?>
