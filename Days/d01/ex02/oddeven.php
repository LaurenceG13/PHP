#!/usr/bin/php
<?php
  $file_handle = fopen("php://stdin", "r");
  while (!feof($file_handle))
  {
    echo('Entrez un nombre: ');
    if ($line = fgets($file_handle))
    {
      $spaces = array("\t","\n","\r","\0","\x0B");
      $nb = str_replace($spaces,'',$line);
      if (is_numeric($nb))
      {
        if ($nb % 2 == 0)
        {
          echo ("Le chiffre $nb est Pair\n");
        }
        else
        {
          echo ("Le chiffre $nb est Impair\n");
        }
      }
      else
        echo "'$nb' n'est pas un chiffre\n";
    }
  }
  echo ("\n");
?>
