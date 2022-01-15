<?php
require_once "config.php";
$requete1 = 'SELECT * FROM pages where type="Commun" ORDER BY id_type';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$pagesCommun = $resultat->fetchAll(PDO::FETCH_ASSOC);
?>
