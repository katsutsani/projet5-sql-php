<?php
require_once "config.php";
$requete1 = 'SELECT * FROM pages';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$nbreResult = $resultat->rowCount(); // Nbre de ligne de résultat
$colcount = $resultat->columnCount(); // Nombre de colonne
$resultatPages = $resultat->fetchAll(PDO::FETCH_ASSOC);
?>
