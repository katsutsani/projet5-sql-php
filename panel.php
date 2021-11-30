<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php require_once 'navbar.php' ?>
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
            <h2 class="brown-text nom center">Users</h2>
          </div>
        </div>
        <div class="col s12 m12 l5 offset-l1">
          <div class="panel">
            <h2 class="brown-text nom center">Pages</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Structure -->
      <?php require_once "modals.php" ?>
  </body>
</html>
