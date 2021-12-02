<?php
require_once "config.php";
$sql = "INSERT INTO users(email,password,login,admin) VALUES(:email,SHA1(:password),:login,:admin)";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
    ':login'=> $_POST['login'],
    ':admin'=> $_POST['admin'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:panel.php?projet=0&page=users');
?>
