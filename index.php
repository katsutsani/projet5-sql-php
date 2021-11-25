<?php
session_start();
$pdo = new PDO(
    'mysql:host=localhost;dbname=portfolio;',
    'root',
    '',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);


require_once "index.php";
$sql = "INSERT INTO users(login,email,mdp,admin) VALUES(:login,:email,SHA1(:password),0)";
$dataBinded=array(
    ':login'=> $_POST['login'],
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:index.php');//on le redirige sur la page d'accueil du site !
?>
