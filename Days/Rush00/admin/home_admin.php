<html>
	<head>
		<meta charset="utf-8">
		<title>ADMIN</title>
		<style>
		  body {
		       font-family: sans-serif, arial, monospace, sans-serif;
		  }

		  ul {
		      list-style-type: none;
		      margin: 0;
		      padding: 0;
		      overflow: hidden;
		      background-color: #333;
		  }

		  li {
		      float: left;
		  }

		  li a, .dropbtn {
		      display: inline-block;
		      color: white;
		      text-align: center;
		      padding: 14px 16px;
		      text-decoration: none;
		  }

		  li a:hover, .dropdown:hover .dropbtn {
		      background-color: rgb(81, 170, 255);
		  }
		  #admin{
		    background-color: rgb(81, 170, 255);
		    color: #333;
		    font-weight: bold;
		    padding: 12px 16px;
		    display: inline-block;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		    border-style: solid;
		    border-color : white;
		  }

		  li.dropdown {
		      display: inline-block;
		  }

		  .dropdown-content {
		      display: none;
		      position: absolute;
		      background-color: #f9f9f9;
		      min-width: 160px;
		      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		      z-index: 1;
		  }

		  .dropdown-content a {
		      color: black;
		      padding: 12px 16px;
		      text-decoration: none;
		      display: block;
		      text-align: left;
		  }

		  .dropdown-content a:hover {background-color: #f1f1f1}

		  .dropdown:hover .dropdown-content {
		      display: block;
		  }
		</style>

		<link href="../include/account.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<ul>
			<li ><a id=admin href="home_admin.php">ADMIN</a></li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">Mon Compte</a>
				<div class="dropdown-content">
					<a href="../admin/account/profil_admin.php">Afficher mon profil</a>
					<a href="../admin/account/modif_admin.html">Modifier mon mot de passe</a>
					<a href="../admin/account/delete_admin.html">Supprimer mon compte</a>
					<a href="../admin/account/logout_admin.php">Me déconnecter</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">Gestion Admin</a>
				<div class="dropdown-content">
					<a href="../admin/account/list_admin.php" target="_blank">Afficher la liste des admin</a>
					<a href="../admin/account/create_admin.html">Ajouter un admin</a>
					<a href="../admin/account/delete_admin.html">Supprimer un admin</a>
					<a href="../admin/account/modif_admin_login.html">Modifier le login d'un admin</a>
					<a href="../admin/account/modif_admin_pssword.html">Modifier le mot de passe d'un admin</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">Gestion Clients</a>
				<div class="dropdown-content">
					<a href="../admin/client/list_client.php" target="_blank">Afficher la liste des clients</a>
					<a href="../admin/client/create_client.html">Ajouter un client</a>
					<a href="../admin/client/delete_client.html">Supprimer un client</a>
					<a href="../admin/client/modif_client_login.html">Modifier le login d'un client</a>
					<a href="../admin/client/modif_client_pssword.html">Modifier le mot de passe d'un client</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">Catalogue</a>
				<div class="dropdown-content">
					<a href="../admin/catalogue/list_catalogue.php" target="_blank">Afficher le catalogue</a>
					<a href="../admin/catalogue/create_catalogue.html">Ajouter un article</a>
					<a href="../admin/catalogue/delete_catalogue.html">Supprimer un article</a>
					<a href="../admin/catalogue/modif_catalogue.html">Modifier un article</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">Catégories</a>
				<div class="dropdown-content">
					<a href="../admin/categorie/list_categorie.php" target="_blank">Afficher la liste des catégories</a>
				</div>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">Commandes</a>
				<div class="dropdown-content">
					<a href="../admin/commande/list_commande.php" target="_blank">Afficher la liste des commandes</a>
				</div>
			</li>
		</ul>
	</body>
</html>
