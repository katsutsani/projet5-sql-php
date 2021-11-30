<?php
require_once "config.php";
$sql = "DELETE FROM pages WHERE title=:page_delete";
$dataBinded=array(
    ':page_delete'=> $_POST['title']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:index.php?projet=0');//on le redirige sur la page d'accueil du site !
?>
