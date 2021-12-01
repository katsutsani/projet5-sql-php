<?php
require_once "config.php";
$sql = "UPDATE users SET :user_champ=:user_value WHERE id=:user_changed";
$dataBinded=array(
    ':user_changed'=> $_POST['id'],
    ':user_champ'=> $_POST['champ'],
    ':user_value'=> $_POST['valeur']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
//on le redirige sur la page d'accueil du site !
?>
