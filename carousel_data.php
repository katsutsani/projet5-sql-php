<?php
require_once "config.php";
$requete1 = 'SELECT * FROM carousel where page_id ='. $_GET['projet'].' ORDER BY `order`';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$nbreResult = $resultat->rowCount(); // Nbre de ligne de résultat
$colcount = $resultat->columnCount(); // Nombre de colonne
$resultatCarouselOrder = $resultat->fetchAll(PDO::FETCH_ASSOC);
?>
