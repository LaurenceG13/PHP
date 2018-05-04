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

  session_start();
  //if ($_SESSION[logged_on_user] != "" && ft_found($_SESSION[logged_on_user]))
  $login = $_SESSION[logged_on_user];
  $msg = $_POST["msg"];
  $dir = '../private/';
  $file = '../private/chat';
  $array_user = unserialize(file_get_contents('../private/passwd'));
  if ($login != "" and ft_user_exist($login, $array_user))
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
        header("Location: index.html");
        echo "OK\n";
      }
  }
  else
    echo "ERROR\n";
?>
