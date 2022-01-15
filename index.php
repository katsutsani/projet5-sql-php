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
  <div class="home_page">
    <!--content-->
    <div class="content">
      <!--Lilian Prieu-->
      <div class="description_lp center">
        <img class="top circle" src="img/home_page/lprieu.jpg">
        <h2 class="white-text nom_age">Prieu Lilian<br>19 ans</h2>
        <p class="light white-text">Etudiant à Gaming Campus, adepte des MMO et programmeur passionné. J'ai l'Univers du Krosmoz dans mon coeur.</p>
        <div class="media_lp">
          <div class="linkedin_lp"><a id="linkedin_lp" href="https://www.linkedin.com/in/lilian-prieu-554058221"><i class="fab fa-linkedin-in small"></i></a></div>
          <div class="mail_lp"><a id="mail_lp" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=lprieu@gaming.tech"><i class="fas fa-envelope-open-text small"></i></a></div>
          <div class="school"><a id="school" href="https://gamingcampus.fr"><i class="fas fa-user-graduate small"></i></a></div>
        </div>
      </div>
      <!--Guillaume Simoes-->
      <div class="description_gs center">
        <img class="top circle" src="img/home_page/gsimoes.jpg">
        <h2 class="white-text nom_age">Simoes Guillaume<br>18 ans</h2>
        <p class="light white-text">Étudiant à Gaming Campus, adepte de MMO et DotA-Like tel que ligue of legends ainsi que programmeur passionné.</p>
        <div class="media_gs">
          <div class="linkedin_gs"><a id="linkedin_gs" href="https://www.linkedin.com/in/guillaume-simoes-378246226"><i class="fab fa-linkedin-in small"></i></a></div>
          <div class="mail_gs"><a id="mail_gs" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=gsimoes@gaming.tech"><i class="fas fa-envelope-open-text small"></i></a></div>
          <div class="school"><a id="school" href="https://gamingcampus.fr"><i class="fas fa-user-graduate small"></i></a></div>
        </div>
      </div>
    </div>
    <!--easter egg-->
    <div class="easteregg bottom left">
      <a href="snake/index.html"><i class="material-icons white-text small">all_inclusive</i></a>
    </div>
  </div>
  <!-- Modal Structure -->
    <?php require_once "modals.php" ?>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script src="https://kit.fontawesome.com/27933c4485.js" crossorigin="anonymous"></script>
</body>
</html>
