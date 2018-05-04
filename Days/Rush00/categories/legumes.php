<?php
include("navbar.php");

echo "<link rel='stylesheet' href='table.css'>\n";
echo "<html><body><table>\n\n";
$file  = fopen('../database/Produits.csv', 'r');

$words = array('Legumes', 'Categories');
$words = array_map('preg_quote', $words);
$regex = '/'.implode('|', $words).'/i';

while (($line = fgetcsv($file)) !== FALSE) {
	list($id, $nom, $prix, $categorie) = $line;
	if(preg_match($regex, $categorie)) {
		echo "<tr>";
		foreach ($line as $cell) {
			echo "<td>" . htmlspecialchars($cell) . "</td>";
		}
		if($categorie !== "Categories")
		echo "<td><form action='ajouter.php' target='dummyframe' method='post'>
			<input type='hidden' type='text' name='id' value='$id' />
			<input type='submit' name='submit' value='Ajouter' />
		</form></td>";
		echo "</tr>\n";
	}
}
fclose($file);
echo "\n</table></body></html>";
?>
