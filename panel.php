<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php require_once 'navbar.php' ?>
    <?php require "user.php" ?>
    <?php require "pages.php" ?>
    <?php require "user_info.php" ?>
      <div class="row container">
        <div class="col s12 m12 l12">
          <div class="panel row center"style="margin-top:40px;">
            <?php if($_GET['page'] == "users"): ?>
              <h2 class="brown-text nom">Users</h2>
              <div class="col s12 m6 l2">
                <p>id</p>
                <?php
                foreach($resultatUsers as $key => $resultatUser){
                  echo "<p>".$resultatUser['id']."</p>";
                }?>
              </div>
              <div class="col s12 m6 l2">
                <p>login</p>
                <?php
                foreach($resultatUsers as $key => $resultatUser){
                  echo "<p>".$resultatUser['login']."</p>";
                }?>
              </div>
              <div class="col s12 m6 l2">
                <p>email</p>
                <?php
                foreach($resultatUsers as $key => $resultatUser){
                  echo "<p>".$resultatUser['email']."</p>";
                }?>
              </div>
              <div class="col s12 m6 l2">
                <p>Mot de passe</p>
                <?php
                foreach($resultatUsers as $key => $resultatUser){
                  echo "<p>".$resultatUser['password']."</p>";
                }?>
              </div>
              <div class="col s12 m6 l2">
                <p>admin</p>
                <?php
                foreach($resultatUsers as $key => $resultatUser){
                  echo "<p>".$resultatUser['admin']."</p>";
                }?>
              </div>
              <div class="col s12 m6 l2">
                <p>commandes</p>
                <?php $id_user = array(); $user=0;
                foreach($resultatUsers as $key => $resultatUser){
                  array_push($id_user,$resultatUser['id']);
                  echo '<p>
                  <button data-target="add-user" class="btn modal-trigger"><a class="modal-trigger" id="add-users" href="panel.php?projet=0&page=users&user_id='.$id_user[$user].'"><i class="material-icons">create_new_folder</i></a></button>
                  <button data-target="change-user" class="btn modal-trigger"><a class="modal-trigger" id="change-users" href="panel.php?projet=0&page=users&user_id='.$id_user[$user].'"><i class="material-icons">edit</i></a></button>
                  <button data-target="delete-user" class="btn modal-trigger"><a class="modal-trigger" id="remove-users" href="panel.php?projet=0&page=users&user_id='.$id_user[$user].'"><i class="material-icons">close</i></a></button>
                  </p>';
                  $user++;
                }?>
              </div>
            <?php elseif ($_GET["page"] == "pages") :?>
              <h2 class="brown-text nom">Pages</h2>
              <div class="col s12 m6 l2">
                <p>id</p>
                <?php
                foreach($resultatPages as $key => $resultatPage){
                  echo "<p>".$resultatPage['id']."</p>";
                }?>
              </div>
              <div class="col s12 m6 l2">
                <p>title</p>
                <?php
                foreach($resultatPages as $key => $resultatPage){
                  echo "<p>".$resultatPage['title']."</p>";
                }?>
              </div>
              <div class="col s12 m6 l2">
                <p>img_title</p>
                <?php
                foreach($resultatPages as $key => $resultatPage){
                  echo "<p>".$resultatPage['img_link']."</p>";
                }?>
              </div>
              <div class="col s12 m6 l2">
                <p>description</p>
                <?php
                foreach($resultatPages as $key => $resultatPage){
                  echo "<p>".$resultatPage['description']."</p>";
                }?>
              </div>
              <div class="col s12 m6 l2">
                <p>commandes</p>
                <?php $page_id = array(); $page=0;
                foreach($resultatPages as $key => $resultatPage){
                  array_push($page_id,$resultatPage['id']);
                  echo '<p>
                  <button data-target="add-page" class="btn modal-trigger"><a class="modal-trigger" id="add-users" href="panel.php?projet=0&page=pages&page_id='.$page_id[$page].'"><i class="material-icons">create_new_folder</i></a></button>
                  <button data-target="change-page" class="btn modal-trigger"><a class="modal-trigger" id="change-users" href="panel.php?projet=0&page=pages&page_id='.$page_id[$page].'"><i class="material-icons">edit</i></a></button>
                  <button data-target="delete-page" class="btn modal-trigger"><a class="modal-trigger" id="remove-users" href="panel.php?projet=0&page=pages&page_id='.$page_id[$page].'"><i class="material-icons">close</i></a></button>
                  </p>';
                  $page++;
                }?>
              </div>
            <?php endif ?>
          </div>
        </div>
      </div>
    <!-- Modal Structure -->
      <?php require_once "modals.php" ?>
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
