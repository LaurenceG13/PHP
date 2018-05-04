<?php
if ($_GET["action"] and $_GET["name"]){
  if ($_GET["action"] === 'set'){
    setcookie($_GET["name"], $_GET["value"], time() + 365*24*36000, null, null, false, true);
  }
  if ($_GET["action"] === 'get'){
    if ($_COOKIE[$_GET["name"]]){
      echo $_COOKIE[$_GET["name"]]."\n";
    }
  }
  if ($_GET["action"] === 'del'){
      setcookie($_GET["name"], "", time() + 365*24*36000, null, null, false, true);
  }
}
?>
