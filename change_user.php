<?php
require_once "config.php";
$sql = "UPDATE users SET  WHERE id=user_changed";
$dataBinded=array(
    ':user_changed'=> $_POST['id_user']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:index.php?projet=0');//on le redirige sur la page d'accueil du site !
?>
