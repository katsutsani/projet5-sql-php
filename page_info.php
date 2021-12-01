<?php require_once "config.php";
if(isset($_GET["page_id"])):
  $requete1 = 'SELECT * FROM pages WHERE id ='.$_GET["page_id"].'';
  $resultat = $pdo->prepare($requete1);
  $resultat->execute();
  $nbreResult = $resultat->rowCount(); // Nbre de ligne de résultat
  $colcount = $resultat->columnCount(); // Nombre de colonne
  $resultatPagesInfo = $resultat->fetchAll(PDO::FETCH_ASSOC);
endif
?>
