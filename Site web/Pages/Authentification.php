<?php 
	session_start();
	if (!(empty($_SESSION['ID']) & empty($_SESSION['nom']) & empty($_SESSION['prenom']) & empty($_SESSION['type'])))
			header('Location:../Index.php');
?>

<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//Dtd XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/Dtd/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<title>Authentification</title>
		<link rel="stylesheet" href="../Styles/style.css"/>
	</head>
	
	<body>
		<div class="bloc_page">
			<div class="bandeau">
				<img src="../Images/Logo/Logo+Transparent.png" alt="Logo Gestion Stage IUT"/>
			</div>
			<div class="contenu">
				<div class="logo_connexion"><p><img src="../Images/Logo/Logo+transparent.png" alt="Logo Gestion Stage IUT"/></p></div>
				<div class="espace_connexion">
					<p>Bienvenue sur l'espace de gestion de stage de l'IUT d'Orsay !</p>
					<?php
						if (!empty($_POST['account_name']) & !empty($_POST['password']))
							echo '<p><info>Mauvais identifiant ou mot de passe.<info></p>';
						else if (!empty($_POST['account_name']))
							echo '<p><info>Veuillez renseigner votre mot de passe.<info></p>';
						else if (!empty($_POST['password']))
							echo '<p><info>Veuillez renseigner votre identifiant Paris-Sud.<info></p>';
					?>
					<form method="post" action="Authentification.php">
						<p><input type="text" name="account_name" placeholder="Identifiant Paris-Sud" class="champ_connexion"/></p>
						<p><input type="password" name="password" placeholder="Mot de passe" class="champ_connexion"/></p>
						<p><input type="submit" class="bouton_connexion" value="Connexion"></p>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>

<?php 
	include 'Script_Authentification.php';
?>
