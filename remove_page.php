<?php
require_once "config.php";
$sql = "DELETE FROM pages WHERE title=:page_delete";
$dataBinded=array(
    ':page_delete'=> $_POST['id']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:panel.php?projet=0&page=pages');//on le redirige sur la page d'accueil du site !
?>
