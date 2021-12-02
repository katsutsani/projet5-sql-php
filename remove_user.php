<?php
require_once "config.php";
$sql = "DELETE FROM users WHERE id=:id";
$dataBinded=array(
    ':id'=> $_POST['id-user']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:panel.php?projet=0&page=users');
?>
