<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>Portfolio Page principale</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
  <link rel="stylesheet" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <!--NavBar-->
<?php require_once "navbar.php" ?>
  <!--parallax-->
  <div class="parallax-container">
    <div class="parallax"> <img src="img/portfolio.jpg" alt="Parallax du Portfolio"></div>
  </div>
  <div class="easterEgg center hide" id="btns">
    <a href="snake/index.html"><img src="img/easteregg.png" alt="easterEgg du Portfolio"></a>
  </div>
  <div class="section white">
    <div class="row container">
      <div class="col s12 m12 l5">
        <div class="panel">
          <h2 class="brown-text nom">Prieu Lilian<img class="top right circle" src="img/home_page/lprieu.jpg"
              alt="photo Lilian Portfolio"></h2>
          <h2 class="brown-text nom age">19 ans</h2>
          <p class="light">Etudiant à Gaming Campus, adepte des MMO et programmeur passioné. J'ai l'Univers du Krosmoz
            dans mon coeur et j'aime manger les petites part de gâteau.<br><a
              href="https://www.linkedin.com/in/lilian-prieu-554058221" target="blank" rel="nofollow"><br><span><img
                  src="img/linkedin.png" alt="logo linkedin pour Portfolio"></span></a> pour aller sur la page
            Linkedin<br><br><button onclick="copyToClipboard('Firzus#6969')"><img src="img/discord.png"
                alt="Logo discord pour Portfolio"></button>pour copier l'identifiant Discord</p>
          <p class="light"><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=lprieu@gaming.tech"
              target="_blank" rel="nofollow"><img class="text" src="img/Gmail.png" alt="Logo gmail pour Portfolio"></a>
            pour envoyer un mail </p>
        </div>
      </div>
      <div class="col s12 m12 l5 offset-l1">
        <div class="panel">
          <h2 class="brown-text nom">Simoes Guillaume<img class="top right circle" src="img/home_page/gsimoes.jpg"
              alt="photo Guillaume Portfolio"></h2>
          <h2 class="brown-text nom age">18 ans</h2>
          <p class="light">Étudiant à Gaming Campus, adepte de MMO et DotA-Like tel que ligue of legends ainsi que
            programmeur passionné. J'aime manger les petites parts de gâteau.<br><a
              href="https://www.linkedin.com/in/guillaume-simoes-378246226" target="blank" rel="nofollow"><br><span><img
                  src="img/linkedin.png" alt="logo linkedin pour Portfolio"></span></a> pour aller sur la page
            Linkedin<br><br><button onclick="copyToClipboard('Katsutsani#2104')"><img src="img/discord.png"
                alt="Logo discord pour Portfolio"></button>pour copier l'identifiant Discord</p>
          <p class="light"><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=gsimoes@gaming.tech"
              target="_blank" rel="nofollow"><img class="text" src="img/Gmail.png" alt="Logo gmail pour Portfolio"></a>
            pour envoyer un mail </p>
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
