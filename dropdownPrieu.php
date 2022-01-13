<?php
require_once "config.php";
$requete1 = 'SELECT * FROM pages where type="Lilian" ORDER BY id_type';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$pagesPrieu = $resultat->fetchAll(PDO::FETCH_ASSOC);
?>
