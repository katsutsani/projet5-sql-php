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
      <div class="row container panel_admin">
        <div class="col s12 m12 l12">
          <div class="panel">
            <h2 class="brown-text nom center">Users</h2>
            <p>id login email admin</p>
            <?php require_once "user.php" ?>
          </div>
        </div>
        <div class="col s12 m12 l12">
          <div class="panel">
            <h2 class="brown-text nom center">Pages</h2>
            <?php require_once "pages.php" ?>
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
