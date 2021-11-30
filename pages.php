<?php
require_once "config.php";
$requete1 = 'SELECT * FROM pages';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$nbreResult = $resultat->rowCount(); // Nbre de ligne de résultat
$colcount = $resultat->columnCount(); // Nombre de colonne
while($ligne = $resultat->fetch()) {
		echo "<p>"." ".$ligne['id']. " ".$ligne['title']." ".$ligne['img_link']." ".$ligne['description'].$ligne['subtitle']."</p>";
	}
?>
