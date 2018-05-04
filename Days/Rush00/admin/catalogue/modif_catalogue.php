<?php
if ($_POST['submit'] === "OK")
{
	if (!file_exists('../../database/Produits.csv'))
	{
		echo "ERROR\n";
	}
	else
	{
		$in = fopen('../../database/Produits.csv', 'r');
		$out = fopen('../../database/tmp.csv', 'w');
		while ($row = fgetcsv($in))
		{
			list($id, $nom, $prix, $categorie) = $row;
		  if ($id == $_POST['id'])
			{
				$row = array((string)$_POST['id'], (string)$_POST['article'], (string)$_POST['price'], (string)$_POST['categorie']);
		  }
			fputcsv($out, $row);
			continue;
		}

		fclose($in);
		fclose($out);
		rename('../../database/tmp.csv', '../../database/Produits.csv');
		header('Location: ../home_admin.php');
	}
}
else
	echo "ERROR\n";
?>
