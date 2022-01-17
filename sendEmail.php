<?php
require_once "config.php";
$email = $_POST["email"];
$objet = $_POST['objet'];
$content = $_POST['content'];
if(mail($email,$objet,$content)){
  header('Location:index.php');
}else{
  header('Location:index.php?page=pages');
}
?>
