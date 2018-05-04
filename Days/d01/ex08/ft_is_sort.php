<?php
function ft_is_sort($tab)
{
	$tab_sorted = sort($tab);
	return ($tab_sorted == $tab);
}
?>
