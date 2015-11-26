<?php 
	if (!empty($_POST['password']) & !empty($_POST['account_name'])) {
		$password = htmlspecialchars($_POST['password']);
		$account_name = htmlspecialchars($_POST['account_name']);
		
		include 'Connexion_BDD.php';

		$reqInfoUser = mysqli_query($co, "SELECT ID, nom, prenom, type FROM user WHERE account_name ='$account_name' AND password = '$password'") or die ("Impossible d'éxecuter une requête SQL");

		$resInfoUser = mysqli_fetch_assoc($reqInfoUser);

		if (mysqli_num_rows($reqInfoUser) == 1)
		{
			// On démarre la session de l'user
			$_SESSION['ID'] = $resInfoUser['ID'];
			$_SESSION['nom'] = $resInfoUser['nom'];
			$_SESSION['prenom'] = $resInfoUser['prenom'];
			$_SESSION['type'] = $resInfoUser['type'];
			header('Location:../Index.php');
		}
	}
?>