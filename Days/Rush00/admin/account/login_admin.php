<?php
include '../account/auth_admin.php';
session_start();
if (auth($_POST['login'], $_POST['passwd'])){
	$_SESSION['logged_on_user'] = $_POST['login'];
	header('Location: ../home_admin.php');
}
else {
	$_SESSION['logged_on_user'] = "";
	echo "ERROR\n";
}
?>
