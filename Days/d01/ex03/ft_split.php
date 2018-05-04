<?php
function ft_split($s)
{
  $spaces = array("\t","\n","\r","\0","\x0B");
  $s = str_replace($spaces," ",$s);
	$tab = explode(" ", $s);
	sort($tab);
	return (array_values(array_filter($tab)));
}
?>
