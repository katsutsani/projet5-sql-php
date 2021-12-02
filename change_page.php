<?php
require_once "config.php";

$requete1 = 'SELECT p.*,a.* FROM pages p
LEFT JOIN avis a ON p.id=a.page_id
WHERE p.id ='.$_POST['id-page'].' ORDER BY `order`';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$resultatPagesInfoAvis = $resultat->fetchAll(PDO::FETCH_ASSOC);

$requete1 = 'SELECT p.*,o.* FROM pages p
LEFT JOIN objectifs o ON p.id=o.page_id
WHERE p.id ='.$_POST['id-page'].' ORDER BY `order`';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$resultatPagesInfoObj = $resultat->fetchAll(PDO::FETCH_ASSOC);

$requete1 = 'SELECT p.*,c.* FROM pages p
LEFT JOIN carousel c ON p.id=c.page_id
WHERE p.id ='.$_POST['id-page'].' ORDER BY `order`';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$resultatPagesInfoCarousel = $resultat->fetchAll(PDO::FETCH_ASSOC);

$requete1 = 'SELECT * FROM parallax where page_id ='.$_POST['id-page'].' AND `order` = 1';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$resultatParallaxTop = current($resultat->fetchAll(PDO::FETCH_ASSOC));

$requete1 = 'SELECT * FROM parallax where page_id ='.$_POST['id-page'].' AND `order` = 2';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$resultatParallaxMid = current($resultat->fetchAll(PDO::FETCH_ASSOC));

$requete1 = 'SELECT * FROM parallax where page_id ='.$_POST['id-page'].' AND `order` = 3';
$resultat = $pdo->prepare($requete1);
$resultat->execute();
$resultatParallaxBot = current($resultat->fetchAll(PDO::FETCH_ASSOC));



$sql = "UPDATE pages
SET title=:title,img_link=:img_link,description=:description,subtitle=:subtitle  WHERE id=:page_changed";
$dataBinded=array(
    ':page_changed'=> $_POST['id-page'],
    ':img_link'=> $_POST['img_link'],
    ':description'=> $_POST['description'],
    ':subtitle'=> $_POST['subtitle']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

foreach ($resultatPagesInfoCarousel as $resultatPagesInfo) {
  $sql = "UPDATE carousel SET carousel_link=:carousel".$resultatPagesInfo['order']." WHERE page_id=:page_changed AND `order`=".$resultatPagesInfo['order']."";
  $dataBinded=array(
    ':page_changed'=> $_POST['id-page'],
    ':carousel'.$resultatPagesInfo['order']=> $_POST['carousel'.$resultatPagesInfo['order']]
  );
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

foreach ($resultatPagesInfoObj as $resultatPagesInfo) {
  $sql = "UPDATE objectifs
  SET logo_objectifs=:lienObj".$resultatPagesInfo['order'].",
  typeLogo_objectifs=:typeLogoObj".$resultatPagesInfo['order'].",
  title_objectifs=:titleObj".$resultatPagesInfo['order'].",
  description_objectifs=:contentObj".$resultatPagesInfo['order'].",
  WHERE page_id=:page_changed AND `order`=".$resultatPagesInfo['order']."";
  $dataBinded=array(
    ':page_changed'=> $_POST['id-page'],
    ':lienObj'.$resultatPagesInfo['order']=> $_POST['lienObj'.$resultatPagesInfo['order']],
    ':typeLogoObj'.$resultatPagesInfo['order']=> $_POST['typeLogoObj'.$resultatPagesInfo['order']],
    ':titleObj'.$resultatPagesInfo['order']=> $_POST['titleObj'.$resultatPagesInfo['order']],
    ':contentObj'.$resultatPagesInfo['order']=> $_POST['contentObj'.$resultatPagesInfo['order']]
  );
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

foreach ($resultatPagesInfoObj as $resultatPagesInfo) {
  $sql = "UPDATE objectifs
  SET logo_avis=:lienAvis".$resultatPagesInfo['order'].",
  typeLogo_avis=:typeLogoAvis".$resultatPagesInfo['order'].",
  title_avis=:titleAvis".$resultatPagesInfo['order'].",
  description_avis=:descAvis".$resultatPagesInfo['order'].",
   WHERE page_id=:page_changed AND `order`=".$resultatPagesInfo['order']."";
  $dataBinded=array(
    ':page_changed'=> $_POST['id-page'],
    ':lienAvis'.$resultatPagesInfo['order']=> $_POST['lienAvis'.$resultatPagesInfo['order']],
    ':typeLogoAvis'.$resultatPagesInfo['order']=> $_POST['typeLogoAvis'.$resultatPagesInfo['order']],
    ':titleAvis'.$resultatPagesInfo['order']=> $_POST['titleAvis'.$resultatPagesInfo['order']],
    ':descAvis'.$resultatPagesInfo['order']=> $_POST['descAvis'.$resultatPagesInfo['order']]
  );
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

$sql = "UPDATE parallax SET parallax_link=:parallax1,
 WHERE page_id=:page_changed AND `order`=1";
$dataBinded=array(
  ':page_changed'=> $_POST['id-page'],
  ':parallax1'=> $_POST['parallax1']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

$sql = "UPDATE parallax SET parallax_link=:parallax2,
 WHERE page_id=:page_changed AND `order`=2";
$dataBinded=array(
  ':page_changed'=> $_POST['id-page'],
  ':parallax2'=> $_POST['parallax2']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

$sql = "UPDATE parallax SET parallax_link=:parallax3,
 WHERE page_id=:page_changed AND `order`=3";
$dataBinded=array(
  ':page_changed'=> $_POST['id-page'],
  ':parallax3'=> $_POST['parallax3']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:panel.php?projet=0&page=pages');//on le redirige sur la page d'accueil du site !
?>
