<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
<link rel="stylesheet" href="css/style.css">

<?php require_once "config.php" ?>
    <?php
    if(isset($_SESSION['user'])):
      $link = $_GET['projet'];
      if($_SESSION['user']['admin'] == 1):
        if ($link == 0): ?>
          <div class="navbar-fixed">
            <nav>
              <div class="nav-wrapper">
                <h1><a href="index.php?projet=0" class="center brand-logo">Portfolio</a></h1>
                <a href="index.php?projet=0" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="projet.php?projet=1">Projet 1</a></li>
                  <li><a href="projet.php?projet=2">Projet 2</a></li>
                  <li><a href="projet.php?projet=3">Projet 3</a></li>
                  <li><a href="logout.php"><?php echo $_SESSION['user']['login']; ?></a></li>
                  <?php if(isset($_GET['page'])) :
                    if($_GET['page']=='users'):?>
                    <li><a href="panel.php?projet=0&page=pages"> Pages Panel</a></li>
                  <?php else: ?>
                    <li><a href="panel.php?projet=0&page=users"> Users Panel</a></li>
                  <?php endif?>
                <?php else: ?>
                  <li><a href="panel.php?projet=0&page=users"> Panel</a></li>
                <?php endif ?>
                  <li><a id="contact" href="#Contact" class="btn modal-trigger pulse">Contact</a></li>
                </ul>
              </div>
            </nav>
          </div>
          <ul class="sidenav" id="mobile-demo">
            <li><a href="projet.php?projet=1">Projet 1</a></li>
            <li><a href="projet2.php?projet=2">Projet 2</a></li>
            <li><a href="projet3.php?projet=3">Projet 3</a></li>
            <li><a href="logout.php"><?php echo $_SESSION['user']['login']; ?><i class="material-icons right">arrow_drop_down</i></a></li>
            <?php if(isset($_GET['page'])) :
              if($_GET['page']=='users'):?>
              <li><a href="panel.php?projet=0&page=pages"> Pages Panel</a></li>
            <?php else: ?>
              <li><a href="panel.php?projet=0&page=users"> Users Panel</a></li>
            <?php endif?>
          <?php else: ?>
            <li><a href="panel.php?projet=0&page=users"> Panel</a></li>
          <?php endif ?>
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
                  <li><a href="logout.php"> <?php echo $_SESSION['user']['login']; ?></a></li>
                  <?php if(isset($_GET['page'])) :
                    if($_GET['page']=='users'):?>
                    <li><a href="panel.php?projet=0&page=pages"> Pages Panel</a></li>
                  <?php else: ?>
                    <li><a href="panel.php?projet=0&page=users"> Users Panel</a></li>
                  <?php endif?>
                <?php else: ?>
                  <li><a href="panel.php?projet=0&page=users"> Panel</a></li>
                <?php endif ?>
                  <li><a href="#Contact" class="waves-effect waves-light btn modal-trigger pulse">Contact</a></li>
                </ul>
              </div>
            </nav>
          </div>
          <ul class="sidenav" id="mobile-demo">
            <li><a href="#Objectifs">Objectifs</a></li>
            <li><a href="#Result">Résultat</a></li>
            <li><a href="#Opinion">Avis</a></li>
            <li><a href="logout.php"> <?php echo $_SESSION['user']['login']; ?></a></li>
            <?php if(isset($_GET['page'])) :
              if($_GET['page']=='users'):?>
              <li><a href="panel.php?projet=0&page=pages"> Pages Panel</a></li>
            <?php else: ?>
              <li><a href="panel.php?projet=0&page=users"> Users Panel</a></li>
            <?php endif?>
          <?php else: ?>
            <li><a href="panel.php?projet=0&page=users"> Panel</a></li>
          <?php endif ?>
            <li><a href="#Contact" class="waves-effect waves-light btn modal-trigger pulse">Contact</a></li>
          </ul>
        <?php endif ?>
      <?php else:?>
        <?php if ($link == 0): ?>
          <div class="navbar-fixed">
            <nav>
              <div class="nav-wrapper">
                <h1><a href="index.php?projet=0" class="center brand-logo">Portfolio</a></h1>
                <a href="index.php?projet=0" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="projet.php?projet=1">Projet 1</a></li>
                  <li><a href="projet2.php?projet=2">Projet 2</a></li>
                  <li><a href="projet3.php?projet=3">Projet 3</a></li>
                  <li><a href="logout.php"> <?php echo $_SESSION['user']['login']; ?></a></li>
                  <li><a id="contact" href="#Contact" class="btn modal-trigger pulse">Contact</a></li>
                </ul>
              </div>
            </nav>
          </div>
          <ul class="sidenav" id="mobile-demo">
            <li><a href="projet.php?projet=1">Projet 1</a></li>
            <li><a href="projet2.php?projet=2">Projet 2</a></li>
            <li><a href="projet3.php?projet=3">Projet 3</a></li>
            <li><a href="logout.php"> <?php echo $_SESSION['user']['login']; ?></a></li>
            <li><a id="contact" href="#Contact" class="waves-effect waves-light btn colorBtn modal-trigger pulse">Contact</a></li>
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
                  <li><a href="logout.php"> <?php echo $_SESSION['user']['login']; ?></a></li>
                  <li><a href="#Contact" class="waves-effect waves-light btn modal-trigger pulse">Contact</a></li>
                </ul>
              </div>
            </nav>
          </div>
          <ul class="sidenav" id="mobile-demo">
            <li><a href="#Objectifs">Objectifs</a></li>
            <li><a href="#Result">Résultat</a></li>
            <li><a href="#Opinion">Avis</a></li>
            <li><a href="logout.php"> <?php echo $_SESSION['user']['login']; ?></a></li>
            <li><a href="#Contact" class="waves-effect waves-light btn modal-trigger pulse">Contact</a></li>
          </ul>
        <?php endif ?>
      <?php endif ?>
    <?php else: ?>
      <?php $link = $_GET['projet'];
        if ($link == 0): ?>
          <div class="navbar-fixed">
            <nav>
              <div class="nav-wrapper">
                <h1><a href="index.php?projet=0" class="center brand-logo">Portfolio</a></h1>
                <a href="index.php?projet=0" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="projet.php?projet=1">Projet 1</a></li>
                  <li><a href="projet2.php?projet=2">Projet 2</a></li>
                  <li><a href="projet3.php?projet=3">Projet 3</a></li>
                  <li><a class="modal-trigger" id="connect" href="#connexion">Connexion</a></li>
                  <li><a id="contact" href="#Contact" class="btn modal-trigger pulse">Contact</a></li>
                </ul>
              </div>
            </nav>
          </div>
          <ul class="sidenav" id="mobile-demo">
            <li><a href="projet.php?projet=1">Projet 1</a></li>
            <li><a href="projet2.php?projet=2">Projet 2</a></li>
            <li><a href="projet3.php?projet=3">Projet 3</a></li>
            <li><a class="modal-trigger" id="connect" href="#connexion">Connexion</a></li>
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
                  <li><a class="modal-trigger" id="connect" href="#connexion">Connexion</a></li>
                  <li><a href="#Contact" class="waves-effect waves-light btn modal-trigger pulse">Contact</a></li>
                </ul>
              </div>
            </nav>
          </div>
          <ul class="sidenav" id="mobile-demo">
            <li><a href="#Objectifs">Objectifs</a></li>
            <li><a href="#Result">Résultat</a></li>
            <li><a href="#Opinion">Avis</a></li>
            <li><a class="modal-trigger" id="connect" href="#connexion">Connexion</a></li>
            <li><a href="#Contact" class="waves-effect waves-light btn modal-trigger pulse">Contact</a></li>
          </ul>
        <?php endif ?>
    <?php endif ?>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
