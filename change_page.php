<?php
require_once "config.php";

$sql = "UPDATE pages SET title=:title,img_link=:img_link,description=:description,subtitle=:subtitle WHERE id=:id";
$dataBinded=array(
    ':title'=> $_POST['title'],
    ':img_link'=> $_POST['img_link'],
    ':description'=> $_POST['description'],
    ':subtitle'=> $_POST['subtitle'],
    ':id' => $_POST['id-page']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
for ($i=1; $i < 4 ; $i++) {
  $sql = "UPDATE objectifs SET title_objectifs=:titleObj".$i.",description_objectifs=:contentObj".$i.",logo_objectifs=:lienObj".$i.",typeLogo_objectifs=:typeLogoObj".$i." WHERE page_id=:id AND `order`=".$i."";
  $dataBinded=array(
      ':titleObj'.$i.''=> $_POST['titleObj'.$i.''],
      ':contentObj'.$i.''=> $_POST['contentObj'.$i.''],
      ':lienObj'.$i.''=> $_POST['lienObj'.$i.''],
      ':typeLogoObj'.$i.''=> $_POST['typeLogoObj'.$i.''],
      ':id' => $_POST['id-page']
  );
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

for ($i=1; $i < 4 ; $i++) {
  if (isset($_POST['titleAvis'.$i.''])) {
    $sql = "UPDATE avis SET title_avis=:titleAvis".$i.",description_avis=:contentAvis".$i.",logo_avis=:lienAvis".$i.",typeLogo_avis=:typeLogoAvis".$i." WHERE page_id=:id AND `order`=".$i."";
    $dataBinded=array(
        ':titleAvis'.$i.''=> $_POST['titleAvis'.$i.''],
        ':contentAvis'.$i.''=> $_POST['contentObj'.$i.''],
        ':lienAvis'.$i.''=> $_POST['lienAvis'.$i.''],
        ':typeLogoAvis'.$i.''=> $_POST['typeLogoAvis'.$i.''],
        ':id' => $_POST['id-page']
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
  }
  else{
    break;
  }
}

for ($i=1; $i < 5 ; $i++) {
  $sql = "UPDATE carousel SET carousel_link=:carousel".$i." WHERE page_id=:id AND `order`=".$i."";
  $dataBinded=array(
      ':carousel'.$i.''=> $_POST['carousel'.$i.''],
      ':id' => $_POST['id-page']
  );
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

for ($i=1; $i < 4 ; $i++) {
  $sql = "UPDATE parallax SET parallax_link=:parallax".$i." WHERE page_id=:id AND `order`=".$i."";
  $dataBinded=array(
      ':parallax'.$i.''=> $_POST['parallax'.$i.''],
      ':id' => $_POST['id-page']
  );
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}
header('Location:panel.php?page=pages');
?>
