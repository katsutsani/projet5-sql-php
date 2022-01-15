<?php
if(isset($_GET["type"])&& isset($_GET["projet"])){
  $requete1 = 'SELECT * FROM `pages` WHERE type="'.$_GET["type"].'" AND id_type='.$_GET["projet"].'';
  $resultat = $pdo->prepare($requete1);
  $resultat->execute();
  $resultatPages = current($resultat->fetchAll(PDO::FETCH_ASSOC));
}

$requete1 = 'SELECT p.*,a.* FROM pages p LEFT JOIN avis a ON p.id= a.page_id WHERE p.type ="'.$_GET["type"].'" AND p.id_type='.$_GET["projet"].' ORDER BY `order`';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$resultatPagesAvis = $resultat->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
$requete1 = 'SELECT p.*,o.* FROM pages p LEFT JOIN objectifs o ON p.id= o.page_id WHERE p.type ="'.$_GET["type"].'" AND p.id_type='.$_GET["projet"].' ORDER BY `order`';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$resultatPagesObjectifs = $resultat->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
$requete1 = 'SELECT p.*,c.* FROM pages p LEFT JOIN carousel c ON p.id= c.page_id WHERE p.type ="'.$_GET["type"].'" AND p.id_type='.$_GET["projet"].' ORDER BY `order`';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$resultatPagesCarousel = $resultat->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
$requete1 = 'SELECT p.*,pa.* FROM pages p LEFT JOIN parallax pa ON p.id= pa.page_id WHERE p.type ="'.$_GET["type"].'" AND p.id_type='.$_GET["projet"].' AND `order` = 1';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$resultatPagesParallaxTop = current($resultat->fetchAll(PDO::FETCH_ASSOC));
?>

<?php
$requete1 = 'SELECT p.*,pa.* FROM pages p LEFT JOIN parallax pa ON p.id= pa.page_id WHERE p.type ="'.$_GET["type"].'" AND p.id_type='.$_GET["projet"].' AND `order` = 2';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$resultatPagesParallaxMid = current($resultat->fetchAll(PDO::FETCH_ASSOC));
?>

<?php
$requete1 = 'SELECT p.*,pa.* FROM pages p LEFT JOIN parallax pa ON p.id= pa.page_id WHERE p.type ="'.$_GET["type"].'" AND p.id_type='.$_GET["projet"].' AND `order` = 3';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$resultatPagesParallaxBot = current($resultat->fetchAll(PDO::FETCH_ASSOC));
?>
