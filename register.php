<?php
require_once "config.php";
$sql = "INSERT INTO users(email,password,login,admin) VALUES(:email,SHA1(:password),:login,0)";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
    ':login'=> $_POST['login']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:index.php?projet=0');//on le redirige sur la page d'accueil du site !
?>
