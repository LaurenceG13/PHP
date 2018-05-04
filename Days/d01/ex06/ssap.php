#!/usr/bin/php
<?php

  function ft_str_word_count($s)
  {
    $nb = 0;
    $i = 0;
    while ($s[$i])
    {
      if ($s[$i] == " ")
        $nb++;
      $i++;
    }
    return ($nb);
  }

  function ft_split($s)
  {
    $spaces = array("\t","\n","\r","\0","\x0B");
    $s = str_replace($spaces," ",$s);
  	$tab = explode(" ", $s);
  	sort($tab);
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

  if ($argc > 1)
  {
    $str_merge = "";
    $i = 1;
    while ($i < $argc)
    {
      $str = $argv[$i];
      $str = ft_epur_str($str);
      $str_merge = $str_merge.' '.$str;
      $i++;
    }
    $str_merge = trim($str_merge, ' ');
    $nb_words = ft_str_word_count($str_merge);
    $tab = ft_split($str_merge);
    $i = 0;
    while ($i < $nb_words + 1)
    {
      echo "$tab[$i]\n";
      $i++;
    }
  }
