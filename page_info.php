<?php require_once "config.php";
if(isset($_GET["page_id"])):
  $requete1 = 'SELECT p.*,a.* FROM pages p
  LEFT JOIN avis a ON p.id=a.page_id
  WHERE p.id ='.$_GET["page_id"].' ORDER BY `order`';
  $resultat = $pdo->prepare($requete1);
  $resultat->execute();
  $resultatPagesInfoAvis = $resultat->fetchAll(PDO::FETCH_ASSOC);

  $requete1 = 'SELECT p.*,o.* FROM pages p
  LEFT JOIN objectifs o ON p.id=o.page_id
  WHERE p.id ='.$_GET["page_id"].' ORDER BY `order`';
  $resultat = $pdo->prepare($requete1);
  $resultat->execute();
  $resultatPagesInfoObj = $resultat->fetchAll(PDO::FETCH_ASSOC);

  $requete1 = 'SELECT p.*,c.* FROM pages p
  LEFT JOIN carousel c ON p.id=c.page_id
  WHERE p.id ='.$_GET["page_id"].' ORDER BY `order`';
  $resultat = $pdo->prepare($requete1);
  $resultat->execute();
  $resultatPagesInfoCarousel = $resultat->fetchAll(PDO::FETCH_ASSOC);

  $requete1 = 'SELECT * FROM parallax where page_id ='. $_GET['page_id'].' AND `order` = 1';
  $resultat = $pdo->prepare($requete1);
  $resultat->execute();
  $resultatParallaxTop = current($resultat->fetchAll(PDO::FETCH_ASSOC));

  $requete1 = 'SELECT * FROM parallax where page_id ='. $_GET['page_id'].' AND `order` = 2';
  $resultat = $pdo->prepare($requete1);
  $resultat->execute();
  $resultatParallaxMid = current($resultat->fetchAll(PDO::FETCH_ASSOC));

  $requete1 = 'SELECT * FROM parallax where page_id ='. $_GET['page_id'].' AND `order` = 3';
  $resultat = $pdo->prepare($requete1);
  $resultat->execute();
  $resultatParallaxBot = current($resultat->fetchAll(PDO::FETCH_ASSOC));
endif
?>
