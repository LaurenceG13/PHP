<?php
  function ft_user_exist(string $login, array $array)
  {
      foreach ($array as $user)
      {
        if ($user["login"] == $login)
          return true;
      }
      return false;
  }

  $dir = '../private/';
  $file = '../private/passwd';
  if ($_POST["login"] != "" and $_POST["passwd"] != "")
  {
    $login = $_POST["login"];
    $password = $_POST["passwd"];
		if ($_POST["submit"] != "OK")
			echo "ERROR\n";
    else
    {
      $tmp["login"] = $_POST["login"];
      $tmp["passwd"] = hash("whirlpool", $password);
  		if (!file_exists($dir))
  			mkdir($dir);
  		if (file_exists($file))
  			$data = file_get_contents($file);
      if ($data)
        $data_array = (array)unserialize($data);
      if ($data_array != NULL and ft_user_exist($login, $data_array))
      		echo "ERROR\n";
      else
      {
        $data_array[] = $tmp;
        $data = (string)serialize($data_array);
        file_put_contents($file, $data);
        echo "OK\n";
      }
    }
  }
  else
    echo "ERROR\n";
?>
