<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
<link rel="stylesheet" href="css/style.css">

<?php require_once "config.php"?>
<?php require_once 'nbPage.php' ?>
<?php require_once 'dropdownCommun.php' ?>
<?php require_once 'dropdownPrieu.php' ?>
<?php require_once 'dropdownSimoes.php' ?>

<div id="Contact" class="modal bottom-sheet">
<div class="modal-content">
    <h4>Contactez-nous</h4>
    <div class="col s12 m4">
      <form action="sendEmail.php" method="post">
        <div class="row">
          <div class="input-field col s6">
            <input type="email" name="email">
            <label for="email">Adresse mail</label>
          </div>
          <div class="input-field col s6">
            <input type="text" name="Objet">
            <label for="Objet">Objet</label>
          </div>
          <div class="input-field col s12">
            <input type="text" name="message">
            <label for="message">Message</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <input type='submit' class=" modal-close btn pulse" value="Send mail"/>
      </div>
    </form>
  </div>
</div>

<div id="connexion" class="modal">
  <div class="modal-content">
    <h4>Connexion</h4>
      <div class="row">
        <form class="col s12" method="post" action="login.php">
          <div class="row">
            <div class="input-field col s6">
              <input id="login" type="text" class="validate" name="login">
              <label for="login">Login</label>
            </div>
            <div class="input-field col s6">
              <input id="mdp" type="password" class="validate" name="password">
              <label for="mdp">Mot de passe</label>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a class=" btn left modal-close modal-trigger " id="new" href="#register">Créer un compte</a>
      <input type='submit'class="btn connect" value="Me connecter"/>
    </div>
  </form>
</div>

<div id="register" class="modal">
  <div class="modal-content">
    <h4>Créer un compte</h4>
      <div class="row">
        <form method="post" action="register.php">
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="example@gmail.com" id="email" type="email" name="email" class="validate">
              <label for="email">Adresse email</label>
            </div>
            <div class="input-field col s6">
              <input id="login" type="text" class="validate" name="login">
              <label for="login">Login</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="mdp" type="password" class="validate" name="password">
              <label for="mdp">Mot de passe</label>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a class="btn left modal-close modal-trigger" id="connect" href="#connexion">Se connecter</a>
        <input type='submit' class="btn connect" value="M'enregister"/>
      </div>
    </form>
</div>

<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper">
      <h1><a href="index.php" class="center brand-logo">Portfolio</a></h1>
      <a href="index.php" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="left hide-on-med-and-down">
        <li><a class="dropdown-trigger" data-target="dropdown-commun">Projet Commun<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-trigger" data-target="dropdown-lprieu">Projet L.Prieu<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-trigger" data-target="dropdown-gsimoes">Projet G.Simoes<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      <div id="dropdown-commun" class="dropdown-content">
        <ul>
          <?php foreach ($pagesCommun as $key => $pageCommun) {
            echo "<li><a href='projet.php?projet=".$pageCommun['id_type']."&type=".$pageCommun['type']."'>Projet ".$pageCommun['title']."</a></li>";
          } ?>
        </ul>
      </div>
      <div id="dropdown-lprieu" class="dropdown-content">
        <ul>
          <?php foreach ($pagesPrieu as $key => $pagePrieu) {
            echo "<li><a href='projet.php?projet=".$pagePrieu['id_type']."&type=".$pagePrieu['type']."'>Projet ".$pagePrieu['title']."</a></li>";
          } ?>
        </ul>
      </div>
      <div id="dropdown-gsimoes" class="dropdown-content">
        <ul>
          <?php foreach ($pagesSimoes as $key => $pageSimoes) {
            echo "<li><a href='projet.php?projet=".$pageSimoes['id_type']."&type=".$pageSimoes['type']."'>Projet ".$pageSimoes['title']."</a></li>";
          } ?>
        </ul>
      </div>
      <ul class="right hide-on-med-and-down">
        <?php if(isset($_SESSION['user'])):?>
          <?php  if(isset($_GET['projet'])):?>
            <?php if($_SESSION['user']['admin'] == 1):?>
              <li><a href="#Objectifs">Objectifs</a></li>
              <li><a href="#Result">Résultat</a></li>
              <li><a href="#Opinion">Avis</a></li>
              <li><a class='dropdown-trigger' data-target='dropdownuser'> <?php echo $_SESSION['user']['login']  ?><i class='material-icons right'>arrow_drop_down</i></a></li>
              <div id="dropdownuser" class="dropdown-content">
                <ul>
                  <li> <a href="logout.php">Logout</a></li>
                </ul>
              </div>
              <li><a class='dropdown-trigger' data-target='dropdownpanel'> Panels <i class="material-icons right">arrow_drop_down</i></a></li>
              <div id="dropdownpanel" class="dropdown-content">
                <ul>
                  <li> <a href="panel.php?page=users">Panel Users</a> </li>
                  <li> <a href="panel.php?page=pages">Panel Pages</a> </li>
                </ul>
              </div>
            <?php endif; ?>
          <?php else :?>
            <li><a class="dropdown-trigger" data-target="dropdown-user"> <?php echo $_SESSION['user']['login'] ?>  <i class='material-icons right'>arrow_drop_down</i></a></li>
            <div id="dropdown-user" class="dropdown-content">
              <ul>
                <li> <a href="logout.php">Logout</a> </li>
              </ul>
            </div>
            <li><a class='dropdown-trigger' data-target='dropdownPanel'> Panels <i class="material-icons right">arrow_drop_down</i></a></li>
            <div id="dropdownPanel" class="dropdown-content">
              <ul>
                <li> <a href="panel.php?page=users">Panel Users</a> </li>
                <li> <a href="panel.php?page=pages">Panel Pages</a> </li>
              </ul>
            </div>
          <?php endif?>
        <?php else :
          if(isset($_GET['projet'])):?>
            <li><a href="#Objectifs">Objectifs</a></li>
            <li><a href="#Result">Résultat</a></li>
            <li><a href="#Opinion">Avis</a></li>
            <li><a class='modal-trigger' id='connect' href='#connexion'>Connexion</a></li>
          <?php else :?>
            <li><a class='modal-trigger' id='connect' href='#connexion'>Connexion</a></li>
          <?php endif?>
        <?php endif ?>
        <li><a id="contact" href="#Contact" class="btn black modal-trigger pulse">Contact</a></li>
      </ul>
    </div>
  </nav>
</div>

<ul class="sidenav" id="mobile-demo">
  <li><a class="dropdown-trigger" data-target="dropdown-communSidenav">Projet Commun<i class="white-text material-icons right">arrow_drop_down</i></a></li>
  <li><a class="dropdown-trigger" data-target="dropdown-lprieuSidenav">Projet L.Prieu<i class="white-text material-icons right">arrow_drop_down</i></a></li>
  <li><a class="dropdown-trigger" data-target="dropdown-gsimoesSidenav">Projet G.Simoes<i class="white-text material-icons right">arrow_drop_down</i></a></li>
  <div id="dropdown-communSidenav" class="dropdown-content">
    <ul>
      <?php foreach ($pagesCommun as $key => $pageCommun) {
        echo "<li><a class='black-text' href='projet.php?projet=".$pageCommun['id_type']."&type=".$pageCommun['type']."'>Projet ".$pageCommun['title']."</a></li>";
      } ?>
    </ul>
  </div>
  <div id="dropdown-lprieuSidenav" class="dropdown-content">
    <ul>
      <?php foreach ($pagesPrieu as $key => $pagePrieu) {
        echo "<li><a class='black-text' href='projet.php?projet=".$pagePrieu['id_type']."&type=".$pagePrieu['type']."'>Projet ".$pagePrieu['title']."</a></li>";
      } ?>
    </ul>
  </div>
  <div id="dropdown-gsimoesSidenav" class="dropdown-content">
    <ul>
      <?php foreach ($pagesSimoes as $key => $pageSimoes) {
        echo "<li><a class='black-text' href='projet.php?projet=".$pageSimoes['id_type']."&type=".$pageSimoes['type']."'>Projet ".$pageSimoes['title']."</a></li>";
      } ?>
    </ul>
  </div>
  <?php if(isset($_SESSION['user'])):?>
    <?php  if(isset($_GET['projet'])):?>
      <?php if($_SESSION['user']['admin'] == 1):?>
        <li><a href="#Objectifs">Objectifs</a></li>
        <li><a href="#Result">Résultat</a></li>
        <li><a href="#Opinion">Avis</a></li>
        <?php echo "<li><a class='dropdown-trigger' data-target='dropdownUser'> ".$_SESSION['user']['login']." <i class='white-text material-icons right'>arrow_drop_down</i></a></li>  "?>
        <div id="dropdownUser" class="dropdown-content">
          <ul>
            <li> <a class ="black-text" href="logout.php">Logout</a></li>
          </ul>
        </div>
        <li><a class='dropdown-trigger' data-target='dropdownPanel'> Panels <i class=" white-text material-icons right">arrow_drop_down</i></a></li>
        <div id="dropdownPanel" class="dropdown-content">
          <ul>
            <li> <a class ="black-text" href="panel.php?page=users">Panel Users</a> </li>
            <li> <a class ="black-text"href="panel.php?page=pages">Panel Pages</a> </li>
          </ul>
        </div>
      <?php endif; ?>
    <?php else :?>
      <li><a href="#Objectifs">Objectifs</a></li>
      <li><a href="#Result">Résultat</a></li>
      <li><a href="#Opinion">Avis</a></li>
      <?php echo "<li><a class='dropdown-trigger' data-target='dropdownUser'> ".$_SESSION['user']['login']." <i class='white-text material-icons right'>arrow_drop_down</i></a></li>  "?>
      <div id="dropdownUser" class="dropdown-content">
        <ul>
          <li> <a href="logout.php">Logout</a></li>
        </ul>
      </div>
    <?php endif?>
  <?php else :
    if(isset($_GET['projet'])):?>
      <li><a href="#Objectifs">Objectifs</a></li>
      <li><a href="#Result">Résultat</a></li>
      <li><a href="#Opinion">Avis</a></li>
      <li><a class='modal-trigger' id='connect' href='#connexion'>Connexion</a></li>
    <?php else :?>
      <li><a class='modal-trigger' id='connect' href='#connexion'>Connexion</a></li>
    <?php endif?>
  <?php endif ?>
  <li><a id="contact" href="#Contact" class="btn black sidenavButton modal-trigger pulse">Contact</a></li>
  </li>
</ul>


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
