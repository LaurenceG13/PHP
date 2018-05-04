<?php
if ($_POST['submit'] === "OK")
{
	if (!file_exists('../../database/'))
		mkdir('../../database/');
	if (!file_exists('../../database/Produits.csv'))
		mkdir('../../database/Produits.csv');
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$categorie = $_POST['categorie'];

	$line = array((string)$id, (string)$name, (string)$price, (string)$categorie);
	$file = fopen('../../database/Produits.csv', "a");
	fputcsv($file, $line);
	fclose($file);
	header('Location: ../home_admin.php');
}
else
	echo "ERROR\n";
?>
