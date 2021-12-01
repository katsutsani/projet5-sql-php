<?php
require_once "config.php";
$sql = "DELETE FROM users WHERE id=:user_delete";
$dataBinded=array(
    ':user_delete'=> $_POST['id']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:panel.php?projet=0&page=users');//on le redirige sur la page d'accueil du site !
?>
