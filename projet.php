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
  <?php require "avis_data.php"?>
  <?php require "pages_data.php"?>
  <div class="section white">
    <div class="row container">
      <div class="icon-block">
        <h2 class="center"><i class="small material-icons">folder</i><?php echo $resultatPages ['title']; ?></h2>
        <h2 class="center"><img class="circle" src=<?php echo $resultatPages ['img_link']; ?>></h2>
        <h5 class="center"><?php echo $resultatPages ['subtitle']; ?></h5>
        <?php if ($_GET['projet'] == 1): ?>
          <p class="light"><?php echo $resultatPages ['description']; ?></p>
        <?php endif ?>
      </div>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="img/puissance_quatre/parallax/top.jpg" alt="parallax projet 1 Portfolio"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="center" id="Objectifs"><i class="small material-icons">build</i> Objectifs</h2>
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><img src="img/puissance_quatre/icons/linux.png" alt="icon projet 1 Portfolio">
          </h2>
          <h5 class="center">Environnement linux</h5>
          <p class="light">Lors de ce projet, l'un des objectifs était de développer sur un environnement Linux. Pour se
            faire nous avons utilisé Debian. Au début le plus difficile était de se déplacer dans les fichiers car
            Debian n'a pas d'interface graphique et toute action se fait à partir de ligne de commande.</p>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><img src="img/puissance_quatre/icons/github.png" alt="icon projet 1 Portfolio">
          </h2>
          <h5 class="center">Github</h5>
          <p class="light">Afin de travailler en groupe, ont nous à demander d'utiliser git et github et de nous créer
            un environnement professionnel afin de stocker notre travail et de pouvoir se mettre à jour lorsque l'un de
            nous faisait une modification.</p>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><img src="img/puissance_quatre/icons/manette.png" alt="icon projet 1 Portfolio">
          </h2>
          <h5 class="center">Puissance 4</h5>
          <p class="light">Pour la partie programmation, le projet consistait à faire une puissance 4 pour ce faire, il
            nous à falloir un éditeur de texte type Emacs puis il nous a fallu utiliser Gcc afin de compiler notre code
            pour pouvoir le lancer.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="img/puissance_quatre/parallax/mid.jpg" alt="parallax projet 1 Portfolio"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="center" id="Result"><i class="small material-icons">flag</i> Résultat</h2>
      <div class="carousel carousel-slider col s12 m12 l8 offset-l2">
        <a class="carousel-item" href="#one!"><img src="img/puissance_quatre/carousel/1.png"
            alt="carousel projet 1 Portfolio"></a>
        <a class="carousel-item" href="#two!"><img src="img/puissance_quatre/carousel/2.png"
            alt="carousel projet 1 Portfolio"></a>
        <a class="carousel-item" href="#three!"><img src="img/puissance_quatre/carousel/3.png"
            alt="carousel projet 1 Portfolio"></a>
        <a class="carousel-item" href="#four!"><img src="img/puissance_quatre/carousel/4.png"
            alt="carousel projet 1 Portfolio"></a>
      </div>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="img/puissance_quatre/parallax/bot.png" alt="parallax projet 1 Portfolio"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="center" id="Opinion"><i class="small material-icons">thumbs_up_down</i> Avis</h2>
      <?php foreach ($resultatAviss as $resultatAvis): ?>
        <div class="col s12 m12 <?php echo count($resultatAviss)>2?'l4':'l6' ?> ">
          <div class="icon-block">
            <h2 class="center brown-text"><?php echo $resultatAvis['logo']; ?></h2>
            <h5 class="center"><?php echo $resultatAvis['title']; ?></h5>
            <p class="light"><?php echo $resultatAvis['description']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <?php require_once "modals.php" ?>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
