<?php
require_once "config.php";
$sql = "INSERT INTO pages(title,img_link,description,subtitle) VALUES(:title,:img_link,:description,:subtitle)";
$dataBinded=array(
    ':title'   => $_POST['title'],
    ':img_link'=> $_POST['img_link'],
    ':description'=> $_POST['description'],
    ':subtitle'=> $_POST['subtitle']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:panel.php?page=pages');//on le redirige sur la page d'accueil du site !
?>
