<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>Portfolio Projet 3</title>
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

  <div class="section white">
    <div class="row container">
      <h2 class="center"><i class="small material-icons">folder</i> Exaltya</h2>
      <h5 class="grey-text text-darken-3 lighten-3">Exaltya est un bot discord permettant de se lancer dans un petit Rpg
        grace à de simples commandes, il est donc accessible de n'importe où tant que vous disposez d'une connexion et
        facile d'utilisation, ce projet est encore en cours de développement. Projet personnel de SIMOES Guillaume.</h5>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="img/exaltya/parallax/parallax1.jpg" alt="parallax projet 3 Portfolio"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="center" id="Objectifs"><i class="small material-icons">build</i> Objectifs</h2>
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><img src="img/exaltya/icons/djs.png" alt="icon projet 3 Portfolio"></h2>
          <h5 class="center">Créer un bot discord</h5>
          <p class="light">Correcteur d'orthographe et de grammaire
            français

            Dans un premier temps l'objectif de ce projet était de se familiariser avec le Javascript passant beaucoup
            de temps sur discord, quoi de mieux que de se faire un bot discord personnalisé. J'ai relevé le défi et je
            me suis lancé.</p>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><img src="img/exaltya/icons/heroku.png" alt="icon projet 3 Portfolio"></h2>
          <h5 class="center">Disponibility 24h/24 et 7j/7</h5>
          <p class="light">Pour avoir un vrai bot, il est mieux qu'il soit connecté 24h/24 et 7j/7 alors j'ai fait
            beaucoup de recherches pour trouver des hébergeurs gratuits et j'ai fini par trouver Heroku. J'ai alors
            commencé à utiliser git pour pouvoir mettre mon bot sur l'hébergeur.</p>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><img src="img/exaltya/icons/jss.png" alt="icon projet 3 Portfolio"></h2>
          <h5 class="center">Créer un rpg sur discord</h5>
          <p class="light">Ayant des amis fanatiques du roleplay, le bot qui était essentiellement prévu pour me
            familiariser avec le Javascript c'est transfort en un projet de Rpg sur discord. Pour enregister les
            informations de chaque joueur, forcement il m'a fallu une base de donné. J'ai donc utilisé MongoBD pour
            cela. Mais le projet n'est pas encore fini et il y a pu une nouvelle mise à jour de discord js a appliqué
            beaucoup de changements, je suis donc entrain de revoir tout mon code avant de la continuer, il détient une
            fonction musicale pour ceux qui aimeraient écouter de la musique pendant qu'ils jouent.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="img/exaltya/parallax/parallax2.jpeg" alt="parallax projet 3 Portfolio"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="center" id="Result"><i class="small material-icons">flag</i> Résultat</h2>
      <div class="carousel carousel-slider col s12 m12 l8 offset-l2">
        <a class="carousel-item" href="#one!"><img src="img/exaltya/carousel/carousel1.PNG"
            alt="carousel projet 3 Portfolio"></a>
        <a class="carousel-item" href="#two!"><img src="img/exaltya/carousel/carousel2.PNG"
            alt="carousel projet 3 Portfolio"></a>
        <a class="carousel-item" href="#three!"><img src="img/exaltya/carousel/carousel3.PNG"
            alt="carousel projet 3 Portfolio"></a>
        <a class="carousel-item" href="#four!"><img src="img/exaltya/carousel/carousel4.PNG"
            alt="carousel projet 3 Portfolio"></a>
      </div>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="img/exaltya/parallax/parallax3.PNG" alt="parallax projet 3 Portfolio"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="center" id="Opinion"><i class="small material-icons">thumbs_up_down</i> Avis</h2>
      <div class="col s12 m12 l5">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="small material-icons">plus_one</i></h2>
          <h5 class="center">développer ses connaissances</h5>
          <p class="light">Selon moi, il est toujours bon de toujours chercher à développer ses connaissances et ses
            projets mon été très utile pour cela car avant de le commencer je n'avais jamais fait de Javascript et je
            n'avais jamais utilisé github ou encore héroku.</p>
        </div>
      </div>
      <div class="col s12 m12 l5 offset-l1">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="small material-icons">accessibility</i></h2>
          <h5 class="center">Développer pour aider</h5>
          <p class="light">En plus de vouloir développer mes connaissances se projet aussi pourra simplifier la façon de
            s'amuser de plusieurs personnes. Après tout qui ne voudrait pas d'un petit Rpg qui demande seulement une
            connexion internet, même pas besoin d'avoir un puissant appareil, il suffit juste de pouvoir installer
            discord.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Structure -->
  <div id="Contact" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>Contactez-nous</h4>
      <div class="col s12 m4">
        <form novalidate="" method="post">
          <label for="name">Nom</label>
          <input type="text" name="name" placeholder="What's your full name?" value="">
          <label for="email">Adresse mail</label>
          <input type="email" name="email" placeholder="you@example.com" value="">
          <label for="message">Message</label>
          <textarea name="message" placeholder="Write your message for the team here" type="text"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn colorBtn">Agree</a>
      </div>
    </div>
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
