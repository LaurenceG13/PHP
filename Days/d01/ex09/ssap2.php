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
    return ($nb + 1);
  }

  function ft_strlen($s)
  {
  	$i = 0;
  	while ($s[$i])
  		$i++;
  	return ($i);
  }

  function ft_tolower($c)
  {
    if ($c  >= 'A' && $c <= 'Z')
      $c = chr(ord($c) + 32);
    return ($c);
  }

  function ft_sort($a, $b)
  {
    $i = 0;
    $len = ft_strlen($a);
    while ($i < $len)
    {
  		$tmp[$i] = ft_tolower($a[$i]);
  		$i++;
  	}
    $a = $tmp;
    $i = 0;
    $len = ft_strlen($a);
    while ($i < $len)
    {
      $tmp[$i] = ft_tolower($b[$i]);
      $i++;
    }
    $b = $tmp;
    $i = 0;
  	while ($a[$i] && $a[$i] == $b[$i])
  		$i++;
  	$a = ft_tolower($a[$i]);
  	$b = ft_tolower($b[$i]);
  	if ($a >= '0' && $a <= '9')
  		$a = $a + 1000;
  	else if ($a < 'a' || $a > 'z')
  		$a = $a + 10000;
  	if ($b >= '0' && $b <= '9')
  		$b = $b + 1000;
  	else if ($b < 'a' || $b > 'z')
  		$b = $b + 10000;
    $result = 1;
    if ($a < $b)
      $result = -1;
    return ($result);
  }

  function ft_split($s)
  {
    $spaces = array("\t","\n","\r","\0","\x0B");
    $s = str_replace($spaces," ",$s);
  	$tab = explode(" ", $s);
    usort($tab, "ft_sort");
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
    while ($i < $nb_words)
    {
      echo "$tab[$i]\n";
      $i++;
    }
  }
