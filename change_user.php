<?php
require_once "config.php";
$sql = "UPDATE users SET email=:email,login=:login,password=SHA1(:password),admin=:admin WHERE id=:id";
$dataBinded=array(
    ':email'=> $_POST['email'],
    ':login'=> $_POST['login'],
    ':password'=> $_POST['password'],
    ':admin'=> $_POST['admin'],
    ':id' => $_POST['id']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
//on le redirige sur la page d'accueil du site !
header('Location:panel.php?projet=0&page=users');
?>
