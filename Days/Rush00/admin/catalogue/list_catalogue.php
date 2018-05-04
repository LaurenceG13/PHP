<?php
//include("navbar.php");
echo '<html><body><link href="../../include/account.css" rel="stylesheet" type="text/css"/>';
echo '<h1>Liste des articles</h1>';

//echo include("../../categories/navbar.php");
  
//echo "<link rel='stylesheet' href='table.css'>\n";
echo "<link rel='stylesheet' href='../../categories/table.css'>\n";
echo "<table>\n\n";
//$file  = fopen('../database/Produits.csv', 'r');
$file  = fopen('../../database/Produits.csv', 'r');

while (($line = fgetcsv($file)) !== FALSE) {
	list($id, $nom, $prix, $categorie) = $line;
	echo "<tr>";
	foreach ($line as $cell) {
		echo "<td>" . htmlspecialchars($cell) . "</td>";
	}
	echo "</tr>\n";
}
fclose($file);
echo "\n</table></body></html>";
?>
