#login.php
<?php
require_once "config.php";
$sql = "SELECT * FROM users WHERE login='".$_POST['login']."' AND password= SHA1('".$_POST['password']."')";
$pre = $pdo->prepare($sql);
$pre->execute();
$user = current($pre->fetchAll(PDO::FETCH_ASSOC));//current prend la première ligne du tableau
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
}else{
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté

}
header('Location:index.php');//on le redirige sur la page d'accueil du site !
?>
