<?php
if ($_POST['submit'] === "OK" && $_POST['login'] && $_POST['passwd']) {
	if (!file_exists('../private'))
		mkdir("../private");
	if (!file_exists('../private/passwd'))
		file_put_contents('../private/passwd', "");
	$account = unserialize(file_get_contents('../private/passwd'));
	if ($account) {
		$exist = FALSE;
		foreach ($account as $user) {
		if ($user['login'] === $_POST['login'])
			$exist = TRUE;
		}
	}
	if ($exist)
		echo "Cet identifiant n'est pas disponible\n";
	else {
		$tmp['login'] = $_POST['login'];
		$tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
		$account[] = $tmp;
		file_put_contents('../private/passwd', serialize($account));
		header('Location: ../index.php');
	}
}
else
	echo "Une erreur s'est produite lors de la creation du compte, veuillez recommencer.\n";
?>
