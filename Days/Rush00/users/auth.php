<?php
function auth($login, $passwd) {
	foreach (unserialize(file_get_contents('../private/passwd')) as $user) {
		if ($user['login'] === $login && $user['passwd'] === hash('whirlpool', $passwd))
			return TRUE;
	}
	return FALSE;
}
?>
