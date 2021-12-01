<?php
require_once "config.php";
$requete1 = 'SELECT * FROM avis where page_id ='. $_GET['projet'].' ORDER BY `order`';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$nbreResult = $resultat->rowCount(); // Nbre de ligne de résultat
$colcount = $resultat->columnCount(); // Nombre de colonne
$resultatAviss = $resultat->fetchAll(PDO::FETCH_ASSOC);

$requete2 = 'SELECT * FROM avis where page_id ='. $_GET['page_id'].' ORDER BY `order`';
$resultat = $pdo->prepare($requete2);
$resultat->execute();
$resultatAvissModal = $resultat->fetchAll(PDO::FETCH_ASSOC);
?>
