<?php require_once "config.php";
if(isset($_GET["user_id"])):
  $requete1 = 'SELECT * FROM users WHERE id ='.$_GET["user_id"].'';
  $resultat = $pdo->prepare($requete1);
  $resultat->execute();
  $nbreResult = $resultat->rowCount(); // Nbre de ligne de résultat
  $colcount = $resultat->columnCount(); // Nombre de colonne
  $resultatUsersInfo = $resultat->fetchAll(PDO::FETCH_ASSOC);
endif
?>
