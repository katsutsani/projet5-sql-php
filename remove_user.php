<?php
require_once "config.php";
$sql = "DELETE FROM users WHERE login=user_delete";
$dataBinded=array(
    ':user_delete'=> $_POST['login']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:index.php?projet=0');//on le redirige sur la page d'accueil du site !
?>
