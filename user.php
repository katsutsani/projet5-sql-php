<?php
require_once "config.php";
$requete1 = 'SELECT * FROM users';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$nbreResult = $resultat->rowCount(); // Nbre de ligne de résultat
$colcount = $resultat->columnCount(); // Nombre de colonne
while($ligne = $resultat->fetch()) {
		echo "<p>"." ".$ligne['id']. " ".$ligne['login']." ".$ligne['email']." ".$ligne['admin']."</p>";
	}
?>
