<?php
	if ($_POST['submit'] !== "OK" || !$_POST['login'] || !$_POST['passwd'])
		echo "ERROR\n";
	else
	{
		$login = $_POST['login'];
		$passwd = hash('whirlpool', $_POST['passwd']);
		$account = unserialize(file_get_contents('../../private/admin'));
		$match = FALSE;
		$count_admin = 0;
		foreach ($account as $i => $user)
				$count_admin = $count_admin + 1;
		if ($count_admin == 1)
			echo "ERROR\nVous êtes le seul administrateur, vous ne pouvez pas supprimer votre compte!";
		else
		{
			foreach ($account as $i => $user)
			{
				if ($user['login'] === $login && $user['passwd'] === $passwd)
				{
					$match = TRUE;
					unset($account[$i]);
					file_put_contents('../../private/admin', serialize($account));
					header('Location: ../admin/home_admin.php');
				}
			}
			if (!$match)
				echo "ERROR\n";
			else
				header('Location: ../account/logout_admin.php');
		}
	}
?>
