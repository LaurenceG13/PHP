<?php
	function auth($login, $passwd)
	{
		foreach (unserialize(file_get_contents('../private/passwd')) as $index => $user)
		{
			if ($user["login"] == $login and $user["passwd"] == hash(whirlpool, $passwd))
				return true;
			return false;
		}
	}
?>
