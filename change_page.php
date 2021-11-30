<?php
require_once "config.php";
$sql = "UPDATE pages SET  WHERE id=page_changed";
$dataBinded=array(
    ':page_changed'=> $_POST['id_page']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:index.php?projet=0');//on le redirige sur la page d'accueil du site !
?>
