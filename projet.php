<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>Portfolio Projet 1</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
  <link rel="stylesheet" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <?php require_once "navbar.php" ?>
  <?php require "pages_data.php"?>
  <div class="section white">
    <div class="row container">
      <div class="icon-block">
        <h2 class="center"><i class="small material-icons">folder</i><?php echo $resultatPages ['title']; ?></h2>
        <h2 class="center"><img class="circle" src=<?php echo $resultatPages ['img_link']; ?>></h2>
        <h5 class="center"><?php echo $resultatPages ['subtitle']; ?></h5>
        <p class="light"><?php echo $resultatPages ['description']; ?></p>
      </div>
    </div>
  </div>
    <div class="parallax-container">
      <div class="parallax">
          <img src=<?php echo $resultatPagesParallaxTop ['parallax_link']; ?>>
      </div>
    </div>
  <div class="section white">
    <div class="row container">
      <h2 class="center" id="Objectifs"><i class="small material-icons">build</i> Objectifs</h2>
      <?php foreach ($resultatPagesObjectifs as $resultatPageObjectifs): ?>
        <div class="col s12 m4 <?php echo count($resultatPageObjectifs)>2?'l4':'l6' ?> ">
          <div class="icon-block">
            <h2 class="center brown-text"><?php if($resultatPageObjectifs['typeLogo_objectifs']=="image"):
              echo '<img src="'.$resultatPageObjectifs['logo_objectifs'].'">';
              elseif ($resultatPageObjectifs['typeLogo_objectifs']=="icon") :
                echo '<i class="small material-icons">'.$resultatPageObjectifs['logo_objectifs'].'</i>';
                endif?></h2>
            <h5 class="center"><?php echo $resultatPageObjectifs['title_objectifs']; ?></h5>
            <p class="light"><?php echo $resultatPageObjectifs['description_objectifs']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
    <div class="parallax-container">
      <div class="parallax">
        <img src=<?php echo $resultatPagesParallaxMid ['parallax_link']; ?>>
      </div>
    </div>
  <div class="section white">
    <div class="row container">
      <h2 class="center" id="Result"><i class="small material-icons">flag</i> Résultat</h2>
      <div class="carousel carousel-slider col s12 m12 l8 offset-l2">
        <?php foreach ($resultatPagesCarousel as $resultatPageCarousel): ?>
          <a class="carousel-item" href="#one!"><img src=<?php echo $resultatPageCarousel ['carousel_link']; ?>></a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax">
      <img src=<?php echo $resultatPagesParallaxBot ['parallax_link']; ?>>
    </div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="center" id="Opinion"><i class="small material-icons">thumbs_up_down</i> Avis</h2>
      <?php foreach ($resultatPagesAvis as $resultatPageAvis): ?>
        <div class="col s12 m12 <?php echo count($resultatPagesAvis)>2?'l4':'l6' ?> ">
          <div class="icon-block">
            <h2 class="center brown-text"><?php if ($resultatPageAvis['typeLogo_avis']=="image") :
              echo '<img src="'.$resultatPageAvis['logo_avis'].'">';
              elseif ($resultatPageAvis['typeLogo_avis']=="icon") :
                echo '<i class="small material-icons">'.$resultatPageAvis['logo_avis'].'</i>';
                endif
                ?></h2>
            <h5 class="center"><?php echo $resultatPageAvis['title_avis']; ?></h5>
            <p class="light"><?php echo $resultatPageAvis['description_avis']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
