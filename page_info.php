<?php require_once "config.php";
if(isset($_GET["page_id"])):
  $requete1 = 'SELECT p.*,a.* FROM pages p
  LEFT JOIN avis a ON p.id=a.page_id
  WHERE p.id ='.$_GET["page_id"].' ORDER BY `order`';
  $resultat = $pdo->prepare($requete1);
  $resultat->execute();
  $nbreResult = $resultat->rowCount(); // Nbre de ligne de résultat
  $colcount = $resultat->columnCount(); // Nombre de colonne
  $resultatPagesInfoOrder = $resultat->fetchAll(PDO::FETCH_ASSOC);

  $requete1 = 'SELECT p.*,c.* FROM pages p
  LEFT JOIN carousel c ON p.id=c.page_id
  WHERE p.id ='.$_GET["page_id"].' ORDER BY `order`';
  $resultat = $pdo->prepare($requete1);
  $resultat->execute();
  $resultatPagesInfoCarousel = $resultat->fetchAll(PDO::FETCH_ASSOC);

  $requete1 = 'SELECT p.*,o.* FROM pages p
  LEFT JOIN objectifs o ON p.id=o.page_id
  WHERE p.id ='.$_GET["page_id"].' ORDER BY `order`';
  $resultat = $pdo->prepare($requete1);
  $resultat->execute();
  $resultatPagesInfoObj = $resultat->fetchAll(PDO::FETCH_ASSOC);
endif
?>
