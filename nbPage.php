<?php
require_once "config.php";
$requete1 = 'SELECT * FROM pages';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$resultatPagesId = $resultat->fetchAll(PDO::FETCH_ASSOC);
?>
