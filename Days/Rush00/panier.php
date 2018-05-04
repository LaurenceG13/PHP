<?php
function afficherPanier($panier) {
	if ($panier) {
		foreach ($panier as $id) {
			$quantity[$id]++;
		}
		foreach ($quantity as $id => $number) {
			$file  = fopen('database/Produits.csv', 'r');
			while (($line = fgetcsv($file)) !== FALSE) {
				list($ref, $nom, $prix, $categorie) = $line;
				if ($ref == $id) {
					echo "<tr><td>".$nom."</td><td>".$prix."€</td><td>Quantité: ".$number."</td><td>".$number*$prix."€</td></tr>";
					$total += $number*$prix;
				}
			}
			fclose($file);
		}
		if ($_SESSION['logged_on_user']) {
			$archive = serialize($quantity);
			echo "<tr><td colspan='3'><form action='payer.php' method='post'>
				<input type='hidden' type='text' name='commande' value='$archive' />
				<input type='submit' name='submit' value='Payer' />
				</form></td><td>Total: ".$total."€</td></tr>";
			}
	}
}

session_start();
if ($_SESSION['logged_on_user'])
	$message = "Panier de ".$_SESSION['logged_on_user'].":";
else
	$message = "Veuillez vous connecter avant de finaliser la commande";

include('include/header.php')
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Panier</title>
		<link rel='stylesheet' href='categories/table.css'>
	</head>
	<body>
		<h1><?php echo $message ?></h1>
		<table><?php afficherPanier($_SESSION['panier']) ?></table>
	</body>
</html>
