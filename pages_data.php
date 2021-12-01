<?php
require_once "config.php";
$requete1 = 'SELECT * FROM pages where id ='. $_GET['projet'];
$requete2 = 'SELECT * FROM pages where id ='. $_GET['projet'];
$resultat = $pdo->prepare($requete1);
$resultat = $pdo->prepare($requete2);
$resultat->execute();
$nbreResult = $resultat->rowCount(); // Nbre de ligne de résultat
$colcount = $resultat->columnCount(); // Nombre de colonne
$resultatPages = current($resultat->fetchAll(PDO::FETCH_ASSOC));
?>
