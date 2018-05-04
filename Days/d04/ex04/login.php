<?php
  include "auth.php";
  session_start();
  if (auth($_POST[login], $_POST[passwd]))
  {
    $_SESSION[logged_on_user] = $_POST[login];
    echo '<iframe name="chat" src="chat.php" width="100%" height="550px"></iframe>';
    echo '<iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>';
  }
  else
  {
    $_SESSION[logged_on_user] = "";
    //header('Location: index.html');
    echo "ERROR\n";
  }
?>
