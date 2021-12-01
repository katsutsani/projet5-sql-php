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
      <div class="row container">
        <div class="col s12 m12 l12">
          <div class="panel row center"style="margin-top:40px;">
            <?php if($_GET['page'] == "users"): ?>
              <?php require "user.php" ?>
              <h2 class="brown-text nom">Users</h2>
              <div class="col s12 m6 l3">
                <p>id</p>
                <?php while($ligne = $resultat->fetch()) {
              		  echo "<p>"." ".$ligne['id']."</p>";
              	   } ?>
              </div>
              <div class="col s12 m6 l3">
                <p>login</p>
                <?php require "user.php" ?>
                <?php while($ligne = $resultat->fetch()) {
              		  echo "<p>"." ".$ligne['login']."</p>";
              	   } ?>
              </div>
              <div class="col s12 m6 l3">
                <p>email</p>
                <?php require "user.php" ?>
                <?php while($ligne = $resultat->fetch()) {
              		 echo "<p>"." ".$ligne['email']."</p>";
              	 } ?>
              </div>
              <div class="col s12 m6 l3">
                <p>admin</p>
                  <?php require "user.php" ?>
                  <?php while($ligne = $resultat->fetch()) {
              		     echo "<p>"." ".$ligne['admin']."</p>";
              	   } ?>
              </div>
            <?php elseif ($_GET["page"] == "pages") :?>
              <?php require "pages.php" ?>
              <h2 class="brown-text nom">Pages</h2>
              <div class="col s12 m6 l3">
                <p>id</p>
                <?php require "pages.php" ?>
                <?php while($ligne = $resultat->fetch()) {
              		  echo "<p>"." ".$ligne['id']."</p>";
              	   } ?>
              </div>
              <div class="col s12 m6 l3">
                <p>title</p>
                <?php require "pages.php" ?>
                <?php while($ligne = $resultat->fetch()) {
              		  echo "<p>"." ".$ligne['title']."</p>";
              	   } ?>
              </div>
              <div class="col s12 m6 l3">
                <p>img_title</p>
                <?php require "pages.php" ?>
                <?php while($ligne = $resultat->fetch()) {
              		 echo "<p>"." ".$ligne['img_title']."</p>";
              	 } ?>
              </div>
              <div class="col s12 m6 l3">
                <p>description</p>
                  <?php require "pages.php" ?>
                  <?php while($ligne = $resultat->fetch()) {
              		     echo "<p>"." ".$ligne['description']."</p>";
              	   } ?>
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
