#!/usr/bin/php
<?PHP
  include("ft_is_sort.php");
  //$tab = array("!/@#;^", "42", "Hello World", "salut", "zZzZzZz");
  //$tab[] = "Et qu’est-ce qu’on fait maintenant ?";
  $tab = array("zz","aaa","bb","cc","dd");
  if (ft_is_sort($tab))
    echo "Le tableau est trie\n";
  else
    echo "Le tableau n’est pas trie\n";
?>
