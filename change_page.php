<?php
require_once "config.php";
$sql = "UPDATE pages SET :page_champ=:page_value  WHERE id=page_changed";
$dataBinded=array(
    ':page_changed'=> $_POST['id']
    ':page_champ'=> $_POST['champ'],
    ':page_value'=> $_POST['valeur']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:panel.php?projet=0&page=pages');//on le redirige sur la page d'accueil du site !
?>
