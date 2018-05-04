<?php
if ($_POST['submit'] === "OK")
{
	if (!file_exists('../../database/Produits.csv'))
	{
		echo "ERROR\n";
	}
	else
	{
		$article = $_POST['article'];

		$in = fopen('../../database/Produits.csv', 'r');
		$out = fopen('../../database/tmp.csv', 'w');
		while ($row = fgetcsv($in))
		{
			list($id, $nom, $prix, $categorie) = $row;
		  if ($nom != $_POST['article'])
			{
				fputcsv($out, $row);
		  }
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
