<?php
if ($_POST['submit'] === "OK" && $_POST['categorie']) {
	/*
	if (!file_exists('../../private'))
		mkdir("../../private");
	if (!file_exists('../../private/passwd'))
		file_put_contents('../../private/passwd', "");
	$account = unserialize(file_get_contents('../../private/passwd'));
	*/
	if ($account) {
		$exist = FALSE;
		foreach ($account as $user) {
		if ($user['login'] === $_POST['categorie'])
			$exist = TRUE;
		}
	}
	if ($exist)
		echo "ERROR\n";
	else {
		/*
		$tmp['login'] = $_POST['categorie'];
		$account[] = $tmp;
		file_put_contents('../../private/passwd', serialize($account));
		header('Location: ../home_admin.php');
		*/

	}
}
else
	echo "ERROR\n";
?>

<?php
$file  = fopen('../../database/Produits.csv', 'r');

while (($line = fgetcsv($file)) !== FALSE) {
	list($id, $nom, $prix, $categorie) = $line;
	echo "<tr>";
	echo "<td>" . $categorie . "</td>";
	echo "</tr>\n";
}
fclose($file);
?>
