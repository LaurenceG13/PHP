#!/usr/bin/php
<?php

  function ft_split($s)
  {
    $spaces = array("\t","\n","\r","\0","\x0B");
    $s = str_replace($spaces," ",$s);
  	$tab = explode(" ", $s);
  	return (array_values(array_filter($tab)));
  }

  function ft_epur_str($str)
  {
    $str = trim($str, " ");
    $tab = explode(" ", $str);
    $tab = array_filter($tab);
    $str = implode($tab, " ");
    return $str;
  }

  $i = 1;
  $str_merge = "";
  if ($argc > 1)
  {
    $i = 1;
      $str = $argv[$i];
      $str = ft_epur_str($str);
      $nb_words = str_word_count($str);
      $tab = ft_split($str);
      $n = 1;
      while ($n < $nb_words)
      {
        echo "$tab[$n] ";
        $n++;
      }
      echo "$tab[0]\n";
      $i++;
  }
?>
