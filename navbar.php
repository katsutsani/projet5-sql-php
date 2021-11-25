<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
    $link = $_GET['projet'];
    if ($link == 0): ?>
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper">
            <h1><a href="index.php?projet=0" class="center brand-logo">Portfolio</a></h1>
            <a href="index.php?projet=0" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="projet1.php?projet=1">Projet 1</a></li>
              <li><a href="projet2.php?projet=2">Projet 2</a></li>
              <li><a href="projet3.php?projet=3">Projet 3</a></li>
              <li><a id="contact" href="#Contact" class="waves-effect waves-light btn modal-trigger pulse">Contact</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <ul class="sidenav" id="mobile-demo">
        <li><a href="projet1.php?projet=1">Projet 1</a></li>
        <li><a href="projet2.php?projet=2">Projet 2</a></li>
        <li><a href="projet3.php?projet=3">Projet 3</a></li>
        <li><a id="contact" href="#Contact" class="waves-effect waves-light btn colorBtn modal-trigger pulse">Contact</a>
        </li>
      </ul>
<?php else: ?>
           <div class="navbar-fixed">
             <nav>
               <div class="nav-wrapper">
                 <h1><a href="index.php?projet=0" class="center brand-logo">Portfolio</a></h1>
                 <a href="index.php?projet=0" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                 <ul class="right hide-on-med-and-down">
                   <li><a href="#Objectifs">Objectifs</a></li>
                   <li><a href="#Result">Résultat</a></li>
                   <li><a href="#Opinion">Avis</a></li>
                   <li><a href="#Contact" class="waves-effect waves-light btn modal-trigger pulse">Contact</a></li>
                 </ul>
               </div>
             </nav>
           </div>

           <ul class="sidenav" id="mobile-demo">
             <li><a href="#Objectifs">Objectifs</a></li>
             <li><a href="#Result">Résultat</a></li>
             <li><a href="#Opinion">Avis</a></li>
             <li><a href="#Contact" class="waves-effect waves-light btn modal-trigger pulse">Contact</a></li>
           </ul>
<?php endif ?>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
