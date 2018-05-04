#!/usr/bin/php
<?php
  function ft_do_op($s1, $s2, $s3)
  {
    $s1 = trim($s1);
    $s2 = trim($s2);
    $s3 = trim($s3);
  	$a = intval($s1);
  	$b = intval($s3);
  	if ($s2[0] == '+')
  		$nb = $a + $b;
  	if ($s2[0] == '-')
  		$nb = $a - $b;
  	if ($s2[0] == '*')
  		$nb = $a * $b;
  	if ($s2[0] == '/')
  		$nb = $a / $b;
  	if ($s2[0] == '%')
  		$nb = $a % $b;
  	return ($nb);
  }

  if ($argc != 4)
  {
    echo("Incorrect Parameters\n");
  	return (0);
  }
  else
  {
  	$n = ft_do_op($argv[1], $argv[2], $argv[3]);
    echo("$n\n");
  	return (0);
  }
?>
