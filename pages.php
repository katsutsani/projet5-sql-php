<?php
require_once "config.php";
$requete1 = 'SELECT * FROM pages';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$resultatPages = $resultat->fetchAll(PDO::FETCH_ASSOC);
?>
