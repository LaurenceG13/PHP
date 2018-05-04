<?php
  function ft_password_change(string $login, array $data_array, string $oldpw, string $newpw, string $file)
  {
      foreach ($data_array as $index => $user)
      {
        if ($user["login"] == $login and $user["passwd"] == $oldpw)
        {
          $data_array[$index]["passwd"] = $newpw;
          $data = (string)serialize($data_array);
          file_put_contents($file, $data);
          return true;
        }
      }
      return false;
  }

  $dir = '../private/';
  $file = '../private/passwd';
  $data_array = NULL;
  if ($_POST["login"] != "" and $_POST["oldpw"] != "" and $_POST["newpw"] != "")
  {
    $login = $_POST["login"];
    $oldpw = hash("whirlpool", $_POST["oldpw"]);
    $newpw = hash("whirlpool", $_POST["newpw"]);
		if ($_POST["submit"] != "OK")
			echo "ERROR\n";
    else
    {
  		$data = file_get_contents($file);
      if ($data)
        $data_array = (array)unserialize($data);
      if ($data_array != NULL and ft_password_change($login, $data_array, $oldpw, $newpw, $file))
      {
      	echo "OK\n";
      }
      else
        echo "ERROR\n";
    }
  }
  else
    echo "ERROR\n";
?>
