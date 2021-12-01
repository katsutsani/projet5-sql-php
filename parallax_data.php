<?php
require_once "config.php";
$requete1 = 'SELECT * FROM parallax where page_id ='. $_GET['projet'].' AND `order` = 1';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$nbreResult = $resultat->rowCount(); // Nbre de ligne de résultat
$colcount = $resultat->columnCount(); // Nombre de colonne
$resultatParallaxTop = current($resultat->fetchAll(PDO::FETCH_ASSOC));

$requete1 = 'SELECT * FROM parallax where page_id ='. $_GET['projet'].' AND `order` = 2';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$nbreResult = $resultat->rowCount(); // Nbre de ligne de résultat
$colcount = $resultat->columnCount(); // Nombre de colonne
$resultatParallaxMid = current($resultat->fetchAll(PDO::FETCH_ASSOC));

$requete1 = 'SELECT * FROM parallax where page_id ='. $_GET['projet'].' AND `order` = 3';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$nbreResult = $resultat->rowCount(); // Nbre de ligne de résultat
$colcount = $resultat->columnCount(); // Nombre de colonne
$resultatParallaxBot = current($resultat->fetchAll(PDO::FETCH_ASSOC));
?>
