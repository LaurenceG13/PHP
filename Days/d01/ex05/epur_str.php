#!/usr/bin/php
<?php
if ($argc == 2)
{
    $str = $argv[1];
    $str = trim($str, " ");
    $tab = explode(" ", $str);
    $tab = array_filter($tab);
    $str = implode($tab, " ");
    echo "$str\n";
}
?>
