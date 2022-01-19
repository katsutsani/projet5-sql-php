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
    <?php if (isset($_SESSION['user'])): ?>
      <?php if($_SESSION['user']['admin'] == 1):?>
        <div class="row container">
          <div class="col s12 m12 l12">
            <div class="panel row"style="margin-top:40px;">
              <?php if($_GET['page'] == "users"): ?>
                <h2 class="panel-text brown-text center nom">Users</h2>
                <a class="add-btn modal-trigger" id="add-users" data-target="add-user" href="#"><i class="large material-icons">create_new_folder</i></a>
                <div id='add-user' class="modal">
                  <div class="modal-content">
                    <h4>Enregister un nouveau compte</h4>
                      <div class="row">
                        <form method="post" action="add_user.php">
                          <div class="row">
                            <div class="input-field col s3">
                              <input id="email" type="email" name="email" class="validate">
                              <label for="email">Adresse email</label>
                            </div>
                            <div class="input-field col s3">
                              <input id="login" type="text" class="validate" name="login">
                              <label for="login">Login</label>
                            </div>
                            <div class="input-field col s3">
                              <input id="mdp" type="password" class="validate" name="password">
                              <label for="mdp">Mot de passe</label>
                            </div>
                            <div class="input-field col s3">
                              <select id='choose_admin' name="admin">
                                <option id="admin" value="1">Oui</option>
                                <option id="admin" value="0" selected>Non</option>
                              </select>
                              <label for='choose_admin'>Admin</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <input type='submit' class="btn connect" value="Créer le nouveau compte"/>
                      </div>
                    </form>
                </div>
                <?php
                $fin = ' ...'; //chaîne de fin
                $lg_max = 20; //nombre de caractère autorisé
                 ?>
                <div class="col center s12 m6 l2">
                  <p>ID</p>
                  <?php
                  foreach($resultatUsers as $key => $resultatUser){
                    echo "<p class='affichage'>".$resultatUser['id']."</p>";
                  }?>
                </div>
                <div class="col s12 m6 l2">
                  <p>Login</p>
                  <?php
                  foreach($resultatUsers as $key => $resultatUser){
                    if (strlen($resultatUser['login'])>$lg_max)
                    {
                      $resultatUser['login']=substr($resultatUser['login'], 0, $lg_max-strlen($fin)).$fin;
                    }
                    echo "<p class='affichage'>".$resultatUser['login']."</p>";
                  }
                  ?>
                </div>
                <div class="col s12 m6 l2">
                  <p>Email</p>
                  <?php
                  foreach($resultatUsers as $key => $resultatUser){
                    if (strlen($resultatUser['email'])>$lg_max)
                    {
                      $resultatUser['email']=substr($resultatUser['email'], 0, $lg_max-strlen($fin)).$fin;
                    }
                    echo "<p class='affichage'>".$resultatUser['email']."</p>";
                  }
                  ?>
                </div>
                <div class="col s12 m6 l2">
                  <p>Mot de passe</p>
                  <?php
                  foreach($resultatUsers as $key => $resultatUser){
                    if (strlen($resultatUser['password'])>$lg_max)
                    {
                      $resultatUser['password']=substr($resultatUser['password'], 0, $lg_max-strlen($fin)).$fin;
                    }
                    echo "<p class='affichage'>".$resultatUser['password']."</p>";
                  }
                  ?>
                </div>
                <div class="col center s12 m6 l2">
                  <p>Admin</p>
                  <?php
                  foreach($resultatUsers as $key => $resultatUser){
                    echo "<p class='affichage'>".$resultatUser['admin']."</p>";
                  }?>
                </div>
                <div class="col s12 m6 l2">
                  <p>Commandes</p>
                  <?php foreach ($resultatUsers as $key => $resultatUser) { ?>
                    <p>
                      <?php echo '<a class="modal-trigger" id="change-users" data-target="change-user'.$resultatUser["id"].'" href="#"><i class="material-icons">edit</i></a>
                      <a class="modal-trigger" id="remove-users" data-target="delete-user'.$resultatUser["id"].'" href="#"><i class="material-icons">close</i></a>' ?>
                      <div id="<?php echo 'change-user'.$resultatUser["id"].'' ?>" class="modal">
                        <div class="modal-content">
                          <h4>Modifier un compte</h4>
                            <div class="row">
                              <form method="post" action="change_user.php">
                                <div class="row">
                                  <div class="input-field col s3">
                                    <input id="login" name="login" class="validate" type="text" value="<?php echo $resultatUser['login'] ?>">
                                    <label for="login">login de l'utilisateur</label>
                                  </div>
                                  <div class="input-field col s3">
                                    <input id="email" type="email" class="validate" name="email" value="<?php echo $resultatUser['email'] ?>">
                                    <label for="email">email</label>
                                  </div>
                                  <div class="input-field col s3">
                                    <input id="password" type="password" class="validate" name="password" value="<?php echo $resultatUser['password']?>">
                                    <label for="password">mot de passe</label>
                                  </div>
                                  <div class="input-field col s3">
                                    <?php if($resultatUser['admin']== 1):?>
                                      <select id='choose_admin' name="admin">
                                        <option id="admin" value="1" selected>Oui</option>
                                        <option id="admin" value="0">Non</option>
                                      </select>
                                      <label for='choose_admin'>Admin</label>
                                    <?php else: ?>
                                      <select id='choose_admin' name="admin">
                                        <option id="admin" value="1">Oui</option>
                                        <option id="admin" value="0" selected>Non</option>
                                      </select>
                                      <label for='choose_admin'>Admin</label>
                                    <?php endif ?>
                                  </div>
                                  <div class="input-field col s12">
                                    <input readonly="readonly" value="<?php echo $resultatUser['id'] ?>" id="id-user" type="text" class="validate" name="id" >
                                    <label for="id">id de l'utilisateur</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <input type='submit' class="btn connect" value="Valider le changement"/>
                            </div>
                          </form>
                      </div>
                      <div id="<?php echo 'delete-user'.$resultatUser["id"].'' ?>" class="modal">
                        <div class="modal-content">
                          <h4>Supprimer un compte</h4>
                            <div class="row">
                              <form method="post" action="remove_user.php">
                                  <p>Vous allez supprimer le compte avec les information suivante (la manipulation est définitive)</p>
                                  <div class="input-field col s3">
                                    <input readonly="readonly" id="login" name="login" class="validate" type="text" value="<?php echo $resultatUser['login'] ?>">
                                    <label for="login">login de l'utilisateur</label>
                                  </div>
                                  <div class="input-field col s3">
                                    <input readonly="readonly" id="email" type="email" class="validate" name="email" value="<?php echo $resultatUser['email'] ?>">
                                    <label for="email">email</label>
                                  </div>
                                  <div class="input-field col s3">
                                    <input readonly="readonly" id="password" type="password" class="validate" name="password" value="<?php echo $resultatUser['password'] ?>">
                                    <label for="password">mot de passe</label>
                                  </div>
                                  <div class="input-field col s3">
                                    <?php if($resultatUser['admin']== 1):?>
                                      <select readonly="readonly" id='choose_admin'>
                                        <option id="admin" name="admin" readonly="readonly" value="1" selected>Oui</option>
                                        <option id="admin" name="admin" readonly="readonly" value="0">Non</option>
                                      </select>
                                      <label for='choose_admin'>Admin</label>
                                    <?php else: ?>
                                      <select readonly="readonly" id='choose_admin'>
                                        <option id="admin" name="admin" readonly="readonly" value="1">Oui</option>
                                        <option id="admin" name="admin" readonly="readonly" value="0" selected>Non</option>
                                      </select>
                                      <label for='choose_admin'>Admin</label>
                                    <?php endif ?>
                                  </div>
                                  <div class="input-field col s12">
                                    <input readonly="readonly" value="<?php echo $resultatUser['id'] ?>" id="id-user" type="text" class="validate" name="id-user" >
                                    <label for="id-user">id de l'utilisateur</label>
                                  </div>
                                </div>
                              </div>
                            <div class="modal-footer">
                              <input type='submit' class="btn connect" value="Valider la suppresion"/>
                            </div>
                          </form>
                      </div>
                    </p>
                  <?php } ?>
                </div>
              <?php elseif ($_GET["page"] == "pages") :?>
                <h2 class="panel-text brown-text center nom">Pages</h2>
                <a class="add-btn modal-trigger" id="add-pages" data-target="add-page" href="#"><i class="large material-icons">create_new_folder</i></a>
                <div id="add-page" class="modal">
                  <div class="modal-content">
                    <h2 class="center">Modifier une page</h2>
                      <div class="row">
                        <form method="post" action="add_page.php">
                          <h3 class="black-text center">Modification partie supperieur de la page</h3>
                          <div class="row">
                            <div class="input-field col s6">
                              <input id="title" type="text" name="title" class="validate" value="">
                              <label for="title">titre de la page</label>
                            </div>
                            <div class="input-field col s6">
                              <input id="img_link" type="text" class="validate" name="img_link" value="">
                              <label for="img_link">lien menant à l'image</label>
                            </div>
                            <div class="input-field col s6">
                              <input id="description" type="text" name="description" class="validate" value="">
                              <label for="description">Présentation de la personne sur l'image</label>
                            </div>
                            <div class="input-field col s6">
                              <input id="subtitle" type="text" class="validate" name="subtitle" value="">
                              <label for="subtitle">courte description du projet, nom et prénom de la personne sur l'image</label>
                            </div>
                            <div class="input-field col s12 ">
                              <input id="parallax1" type="text" name="parallax1" class="parallax1" value="">
                              <label for="parallax1">Lien menant a l'image du parallax numéro 1</label>
                            </div>
                            <h3 class="black-text center">Modification partie central de la page</h3>
                            <?php for ($i = 1;  $i<4; $i++){
                              echo "<div class='input-field col s4'>
                                <select id='typeLogoObj".$i."' name='typeLogoObj'>
                                  <option id='typeLogoObj".$i."'  value='image'>image</option>
                                  <option id='typeLogoObj".$i."' value='icon'>icon</option>
                                </select>
                                <label for='typeLogoObj'>Type de logo numéro ".$i."</label>
                              </div>";
                            }?>
                            <?php for ($i = 1;  $i<4; $i++){
                              echo "<div class='input-field col s4'>
                                <input id='lienObj".$i."' type='text' class='validate' name='lienObj".$i."' value=''>
                                <label for='lienObj".$i."'>lien du logo de l'objectif numéro ".$i."</label>
                              </div>";
                            } ?>
                            <?php for ($i = 1;  $i<4; $i++){
                              echo "<div class='input-field col s4'>
                                <input id='titleObj".$i."' type='text' class='validate' name='titleObj".$i."' value=''>
                                <label for='titleObj".$i."'>Titre de l'objectif numéro ".$i."</label>
                              </div>";
                            } ?>

                            <?php for ($i = 1;  $i<4; $i++){
                              echo "<div class='input-field col s4'>
                                <input id='contentObj".$i."' type='text' class='validate' name='contentObj".$i."' value=''>
                                <label for='contentObj".$i."'>Contenu de l'objectif numéro ".$i."</label>
                              </div>";
                            } ?>
                            <div class="input-field col s12">
                              <input id="parallax2" type="text" name="parallax2" class="validate" value="">
                              <label for="parallax2">Lien menant a l'image du parallax numéro 2</label>
                            </div>
                            <h3 class="black-text center">Modification du carousel de la page</h3>
                            <?php for ($i = 1; $i<5;$i++) {
                              echo '<div class="input-field col s6">
                                <input id="carousel'.$i.'" type="text" class="validate" name="carousel'.$i.'" value="">
                                <label for="carousel'.$i.'">Contenu de l\'objectif numéro '.$i.'</label>
                              </div>';
                            }?>
                            <h3 class="black-text center">Modification de la partie inférieur de la page</h3>
                            <div class="input-field col s12">
                              <input id="parallax3" type="text" name="parallax3" class="validate" value="">
                              <label for="parallax3">Lien menant a l'image du parallax numéro 3</label>
                            </div>
                            <?php for ($i = 1;  $i<4; $i++){
                              echo "<div class='input-field col s4'>
                                <select id='typeLogoAvis".$i."' name='typeLogoAvis".$i."'>
                                  <option id='typeLogoAvis".$i."'  value='image'>image</option>
                                  <option id='typeLogoAvis".$i."' value='icon'>icon</option>
                                </select>
                                <label for='typeLogoAvis".$i."'>Type de logo numéro ".$i."</label>
                              </div>";
                            }?>

                            <?php for ($i = 1;  $i<4; $i++){
                              echo "<div class='input-field col s4 l4'>
                                <input id='lienAvis".$i."' type='text' class='validate' name='lienAvis".$i."".$i."' value=''>
                                <label for='lienAvis".$i."'>lien du logo de l'avis numéro ".$i."</label>
                              </div>";
                            }?>

                            <?php for ($i = 1;  $i<4; $i++){
                              echo "<div class='input-field col s6 l4'>
                                <input id='titleAvis".$i."' type='text' class='validate' name='titleAvis".$i."' value=''>
                                <label for='titleAvis".$i."'>Titre de l'avis numéro ".$i."</label>
                              </div>";
                            }?>

                            <?php for ($i = 1;  $i<4; $i++){
                              echo "<div class='input-field col s6 l4'>
                                <input id='descAvis".$i."' type='text' class='validate' name='descAvis".$i."' value=''>
                                <label for='descAvis".$i."'>description de l'avis numéro ".$i."</label>
                              </div>";
                            }?>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <input type='submit' class="btn connect" value="Valider le changement"/>
                      </div>
                    </form>
                  </div>
                <?php
                $fin = ' ...'; //chaîne de fin
                $lg_max = 20; //nombre de caractère autorisé
                 ?>
                <div class="col center s12 m6 l2">
                  <p>ID</p>
                  <?php
                  foreach($resultatPages as $key => $resultatPage){
                    echo "<p class='affichage'>".$resultatPage['id']."</p>";
                  }?>
                </div>
                <div class="col s12 m6 l2">
                  <p>Title</p>
                  <?php
                  foreach($resultatPages as $key => $resultatPage){
                    if (strlen($resultatPage['title'])>$lg_max)
                    {
                      $resultatPage['title']=substr($resultatPage['title'], 0, $lg_max-strlen($fin)).$fin;
                    }
                    echo "<p class='affichage'>".$resultatPage['title']."<br></p>";
                  }
                  ?>
                </div>
                <div class="col s12 m6 l2">
                  <p>Img_Title</p>
                  <?php
                  foreach($resultatPages as $key => $resultatPage){
                    if (strlen($resultatPage['img_link'])>$lg_max)
                    {
                      $resultatPage['img_link']=substr($resultatPage['img_link'], 0, $lg_max-strlen($fin)).$fin;
                    }
                    echo "<p class='affichage'>".$resultatPage['img_link']."</p>";
                  }
                  ?>
                </div>
                <div class="col s12 m6 l2">
                  <p>Description</p>
                  <?php
                  foreach($resultatPages as $key => $resultatPage){
                    if (strlen($resultatPage['description'])>$lg_max)
                    {
                      $resultatPage['description']=substr($resultatPage['description'], 0, $lg_max-strlen($fin)).$fin;
                    }
                    echo "<p class='affichage'>".$resultatPage['description']."</p>";
                  }
                  ?>
                </div>
                <div class="col s12 m6 l2">
                  <p>Type</p>
                  <?php
                  foreach($resultatPages as $key => $resultatPage){
                    if (strlen($resultatPage['type'])>$lg_max)
                    {
                      $resultatPage['type']=substr($resultatPage['type'], 0, $lg_max-strlen($fin)).$fin;
                    }
                    echo "<p class='affichage'>".$resultatPage['type']."<br></p>";
                  }
                  ?>
                </div>
                <div class="col s12 m6 l2">
                  <p>Commandes</p>
                  <?php foreach ($resultatPages as $key => $resultatPage) {
                    echo '<p>
                      <a class="modal-trigger" id="change-pages" data-target="change-page'.$resultatPage["id"].'" href="#"><i class="material-icons">edit</i></a>
                      <a class="modal-trigger" id="delete-pages" data-target="delete-page'.$resultatPage["id"].'" href="#"><i class="material-icons">close</i></a>
                    </p>' ?>
                    <div id="<?php echo 'change-page'.$resultatPage["id"].'' ?>" class="modal">
                      <div class="modal-content">
                        <h2 class="center">Modifier une page</h2>
                          <div class="row">
                            <form method="post" action="change_page.php">
                              <h3 class="black-text center">Modification partie supperieur de la page</h3>
                              <div class="row">
                                <div class="input-field col s6">
                                  <input id="title" type="text" name="title" class="validate" value="<?php echo $resultatPage['title'] ?>">
                                  <label for="title">titre de la page</label>
                                </div>
                                <div class="input-field col s6">
                                  <input id="img_link" type="text" class="validate" name="img_link" value="<?php echo $resultatPage['img_link'] ?>">
                                  <label for="img_link">lien menant à l'image</label>
                                </div>
                                <div class="input-field col s6">
                                  <input id="description" type="text" name="description" class="validate" value="<?php echo $resultatPage['description'] ?>">
                                  <label for="description">Présentation de la personne sur l'image</label>
                                </div>
                                <div class="input-field col s6">
                                  <input id="subtitle" type="text" class="validate" name="subtitle" value="<?php echo $resultatPage['subtitle'] ?>">
                                  <label for="subtitle">courte description du projet, nom et prénom de la personne sur l'image</label>
                                </div>
                                <?php
                                $requete1 = 'SELECT p.*,pa.* FROM pages p LEFT JOIN parallax pa ON p.id= pa.page_id WHERE p.type ="'.$resultatPage["type"].'" AND p.id_type='.$resultatPage["id_type"].' AND `order` = 1';
                                $resultat = $pdo->prepare($requete1);
                                $resultat->execute();
                                $resultatPagesParallaxTop = current($resultat->fetchAll(PDO::FETCH_ASSOC));
                                ?>
                                <div class="input-field col s12 ">
                                  <input id="parallax1" type="text" name="parallax1" class="parallax1" value="<?php echo $resultatPagesParallaxTop['parallax_link'] ?>">
                                  <label for="parallax1">Lien menant a l'image du parallax numéro 1</label>
                                </div>
                                <h3 class="black-text center">Modification partie central de la page</h3>
                                <?php
                                $requete1 = 'SELECT p.*,o.* FROM pages p LEFT JOIN objectifs o ON p.id= o.page_id WHERE p.type ="'.$resultatPage["type"].'" AND p.id_type='.$resultatPage["id_type"].' ORDER BY `order`';
                                $resultat = $pdo->prepare($requete1);
                                $resultat->execute();
                                $resultatPagesObjectifs = $resultat->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($resultatPagesObjectifs as $resultatPageObjectifs){ ?>
                                  <div class="input-field col s4 <?php echo count($resultatPagesObjectifs)>2?'l4':'l6' ?> ">
                                    <?php if($resultatPageObjectifs['typeLogo_objectifs']== "image") :?>
                                      <select id="typeLogoObj<?php echo$resultatPageObjectifs['order'] ?>" <?php echo 'name="typeLogoObj'.$resultatPageObjectifs['order'].'"' ?>>
                                        <option id="typeLogoObj<?php echo$resultatPageObjectifs['order'] ?>" selected value="image">image</option>
                                        <option id="typeLogoObj<?php echo$resultatPageObjectifs['order'] ?>" value="icon">icon</option>
                                      </select>
                                      <label for="typeLogoObj<?php echo$resultatPageObjectifs['order'] ?>">Type de logo numéro <?php echo$resultatPageObjectifs['order'] ?></label>
                                    <?php else: ?>
                                      <select id="typeLogoObj<?php echo$resultatPageObjectifs['order'] ?>" <?php echo 'name="typeLogoObj'.$resultatPageObjectifs['order'].'"' ?>>
                                        <option id="typeLogoObj<?php echo$resultatPageObjectifs['order'] ?>" value="image">image</option>
                                        <option id="typeLogoObj<?php echo$resultatPageObjectifs['order'] ?>" selected value="icon">icon</option>
                                      </select>
                                      <label for="typeLogoObj<?php echo$resultatPageObjectifs['order'] ?>">Type de logo numéro <?php echo$resultatPageObjectifs['order'] ?></label>
                                    <?php endif ?>
                                  </div>
                                <?php } ?>
                                <?php foreach ($resultatPagesObjectifs as $resultatPageObjectifs) { ?>
                                  <div class="input-field col s4 <?php echo count($resultatPagesObjectifs)>2?'l4':'l6' ?> ">
                                    <input id="lienObj<?php echo$resultatPageObjectifs['order'] ?>" type="text" class="validate" <?php echo 'name="lienObj'.$resultatPageObjectifs['order'].'"' ?> value="<?php echo $resultatPageObjectifs['logo_objectifs'] ?>">
                                    <label for="lienObj<?php echo$resultatPageObjectifs['order'] ?>">lien du logo de l'objectif numéro <?php echo$resultatPageObjectifs['order'] ?></label>
                                  </div>
                                <?php }; ?>
                                <?php foreach ($resultatPagesObjectifs as $resultatPageObjectifs){ ?>
                                  <div class="input-field col s4 <?php echo count($resultatPagesObjectifs)>2?'l4':'l6' ?> ">
                                    <input id="titleObj<?php echo$resultatPageObjectifs['order'] ?>" type="text" class="validate" <?php echo 'name="titleObj'.$resultatPageObjectifs['order'].'"' ?> value="<?php echo $resultatPageObjectifs['title_objectifs'] ?>">
                                    <label for="titleObj<?php echo$resultatPageObjectifs['order'] ?>">Titre de l'objectif numéro <?php echo$resultatPageObjectifs['order'] ?></label>
                                  </div>
                                <?php }; ?>
                                <?php foreach ($resultatPagesObjectifs as $resultatPageObjectifs){ ?>
                                  <div class="input-field col s4 <?php echo count($resultatPagesObjectifs)>2?'l4':'l6' ?> ">
                                    <input id="contentObj<?php echo$resultatPageObjectifs['order'] ?>" type="text" class="validate" <?php echo 'name="contentObj'.$resultatPageObjectifs['order'].'"' ?> value="<?php echo $resultatPageObjectifs['description_objectifs'] ?>">
                                    <label for="contentObj<?php echo$resultatPageObjectifs['order'] ?>">Contenu de l'objectif numéro <?php echo$resultatPageObjectifs['order'] ?></label>
                                  </div>
                                <?php }; ?>
                                <div class="input-field col s12">
                                  <?php
                                  $requete1 = 'SELECT p.*,pa.* FROM pages p LEFT JOIN parallax pa ON p.id= pa.page_id WHERE p.type ="'.$resultatPage["type"].'" AND p.id_type='.$resultatPage["id_type"].' AND `order` = 2';
                                  $resultat = $pdo->prepare($requete1);
                                  $resultat->execute();
                                  $resultatPagesParallaxMid = current($resultat->fetchAll(PDO::FETCH_ASSOC));
                                  ?>
                                  <input id="parallax2" type="text" name="parallax2" class="validate" value="<?php echo $resultatPagesParallaxMid['parallax_link'] ?>">
                                  <label for="parallax2">Lien menant a l'image du parallax numéro 2</label>
                                </div>
                                <h3 class="black-text center">Modification du carousel de la page</h3>
                                <?php
                                $requete1 = 'SELECT p.*,c.* FROM pages p LEFT JOIN carousel c ON p.id= c.page_id WHERE p.type ="'.$resultatPage["type"].'" AND p.id_type='.$resultatPage["id_type"].' ORDER BY `order`';
                                $resultat = $pdo->prepare($requete1);
                                $resultat->execute();
                                $resultatPagesCarousel = $resultat->fetchAll(PDO::FETCH_ASSOC);?>
                              <?php foreach ($resultatPagesCarousel as $resultatPageCarousel){ ?>
                                  <div class="input-field col s6">
                                    <input id="carousel<?php echo$resultatPageCarousel['order'] ?>" type="text" class="validate" <?php echo 'name="carousel'.$resultatPageCarousel['order'].'"' ?> value="<?php echo $resultatPageCarousel['carousel_link'] ?>">
                                    <label for="carousel<?php echo$resultatPageCarousel['order'] ?>">Contenu de l'objectif numéro <?php echo$resultatPageCarousel['order'] ?></label>
                                  </div>
                                <?php }; ?>
                                <h3 class="black-text center">Modification de la partie inférieur de la page</h3>
                                <div class="input-field col s12">
                                  <?php
                                  $requete1 = 'SELECT p.*,pa.* FROM pages p LEFT JOIN parallax pa ON p.id= pa.page_id WHERE p.type ="'.$resultatPage["type"].'" AND p.id_type='.$resultatPage["id_type"].' AND `order` = 3';
                                  $resultat = $pdo->prepare($requete1);
                                  $resultat->execute();
                                  $resultatPagesParallaxBot = current($resultat->fetchAll(PDO::FETCH_ASSOC));
                                  ?>
                                  <input id="parallax3" type="text" name="parallax3" class="validate" value="<?php echo $resultatPagesParallaxBot['parallax_link'] ?>">
                                  <label for="parallax3">Lien menant a l'image du parallax numéro 3</label>
                                </div>
                                <?php
                                $requete1 = 'SELECT p.*,a.* FROM pages p LEFT JOIN avis a ON p.id= a.page_id WHERE p.type ="'.$resultatPage["type"].'" AND p.id_type='.$resultatPage["id_type"].' ORDER BY `order`';
                                $resultat = $pdo->prepare($requete1);
                                $resultat->execute();
                                $resultatPagesAvis = $resultat->fetchAll(PDO::FETCH_ASSOC);?>
                                <?php foreach ($resultatPagesAvis as $resultatPageAvis){ ?>
                                  <div class="input-field col s4 <?php echo count($resultatPagesAvis)>2?'l4':'l6' ?> ">
                                    <?php if($resultatPageAvis['typeLogo_avis'] == "image") :?>
                                      <select id="typeLogoAvis<?php echo$resultatPageAvis['order'] ?>" <?php echo 'name="typeLogoAvis'.$resultatPageAvis['order'].'"' ?>>
                                        <option id="typeLogoAvis<?php echo$resultatPageAvis['order'] ?>" selected value="image">image</option>
                                        <option id="typeLogoAvis<?php echo$resultatPageAvis['order'] ?>" value="icon">icon</option>
                                      </select>
                                      <label for="typeLogoAvis<?php echo$resultatPageAvis['order'] ?>">Type de logo numéro <?php echo$resultatPageAvis['order'] ?></label>
                                    <?php else: ?>
                                      <select id="typeLogoAvis<?php echo$resultatPageAvis['order'] ?>" <?php echo 'name="typeLogoAvis'.$resultatPageAvis['order'].'"' ?>>
                                        <option id="typeLogoAvis<?php echo$resultatPageAvis['order']?>" value="image">image</option>
                                        <option id="typeLogoAvis<?php echo$resultatPageAvis['order']?>" selected value="icon">icon</option>
                                      </select>
                                      <label for="typeLogoAvis<?php echo$resultatPageAvis['order'] ?>">Type de logo numéro <?php echo$resultatPageAvis['order'] ?></label>
                                    <?php endif ?>
                                  </div>
                                <?php }; ?>
                                <?php foreach ($resultatPagesAvis as $resultatPageAvis){ ?>
                                  <div class="input-field col s4 <?php echo count($resultatPagesAvis)>2?'l4':'l6' ?> ">
                                    <input id="lienAvis<?php echo$resultatPageAvis['order'] ?>" type="text" class="validate" <?php echo 'name="lienAvis'.$resultatPageAvis['order'].'"' ?> value="<?php echo $resultatPageAvis['logo_avis'] ?>">
                                    <label for="lienAvis<?php echo$resultatPageAvis['order'] ?>">lien du logo de l'objectif numéro <?php echo$resultatPageAvis['order'] ?></label>
                                  </div>
                                <?php }; ?>
                                <?php foreach ($resultatPagesAvis as $resultatPageAvis){ ?>
                                  <div class="input-field col s6 <?php echo count($resultatPagesAvis)>2?'l4':'l6' ?>">
                                    <input id="titleAvis<?php echo $resultatPageAvis['order'] ?>" type="text" class="validate" <?php echo 'name="titleAvis'.$resultatPageAvis['order'].'"' ?> value="<?php echo $resultatPageAvis['title_avis'] ?>">
                                    <label for="titleAvis<?php echo $resultatPageAvis['order'] ?>">Titre de l'avis numéro <?php echo $resultatPageAvis['order'] ?></label>
                                  </div>
                                <?php } ?>
                                <?php foreach ($resultatPagesAvis as $resultatPageAvis){ ?>
                                  <div class="input-field col s6 <?php echo count($resultatPagesAvis)>2?'l4':'l6' ?>">
                                    <input id="descAvis<?php echo $resultatPageAvis['order']?>" type="text" class="validate" <?php echo 'name="descAvis'.$resultatPageAvis['order'].'"' ?> value="<?php echo $resultatPageAvis['description_avis'] ?>">
                                    <label for="descAvis<?php echo $resultatPageAvis['order'] ?>">description de l'avis numéro <?php echo $resultatPageAvis['order'] ?></label>
                                  </div>
                                <?php } ?>
                                <div class="input-field col s12">
                                  <input readonly="readonly" value="<?php echo $resultatPageAvis['id'] ?>" id="id-page" type="text" class="validate" name="id-page" >
                                  <label for="id-page">id de la page</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <input type='submit' class="btn connect" value="Valider le changement"/>
                          </div>
                        </form>
                      </div>
                      <div id="<?php echo 'delete-page'.$resultatPage["id"].'' ?>" class="modal">
                        <div class="modal-content">
                          <h2 class="center">Modifier une page</h2>
                            <div class="row">
                              <form method="post" action="change_page.php">
                                <h3 class="black-text center">Modification partie supperieur de la page</h3>
                                <div class="row">
                                  <div class="input-field col s6">
                                    <input readonly="readonly" id="title" type="text" name="title" class="validate" value="<?php echo $resultatPage['title'] ?>">
                                    <label for="title">titre de la page</label>
                                  </div>
                                  <div class="input-field col s6">
                                    <input readonly="readonly" id="img_link" type="text" class="validate" name="img_link" value="<?php echo $resultatPage['img_link'] ?>">
                                    <label for="img_link">lien menant à l'image</label>
                                  </div>
                                  <div class="input-field col s6">
                                    <input readonly="readonly" id="description" type="text" name="description" class="validate" value="<?php echo $resultatPage['description'] ?>">
                                    <label for="description">Présentation de la personne sur l'image</label>
                                  </div>
                                  <div class="input-field col s6">
                                    <input readonly="readonly" id="subtitle" type="text" class="validate" name="subtitle" value="<?php echo $resultatPage['subtitle'] ?>">
                                    <label for="subtitle">courte description du projet, nom et prénom de la personne sur l'image</label>
                                  </div>
                                  <?php
                                  $requete1 = 'SELECT p.*,pa.* FROM pages p LEFT JOIN parallax pa ON p.id= pa.page_id WHERE p.type ="'.$resultatPage["type"].'" AND p.id_type='.$resultatPage["id_type"].' AND `order` = 1';
                                  $resultat = $pdo->prepare($requete1);
                                  $resultat->execute();
                                  $resultatPagesParallaxTop = current($resultat->fetchAll(PDO::FETCH_ASSOC));
                                  ?>
                                  <div class="input-field col s12 ">
                                    <input readonly="readonly" id="parallax1" type="text" name="parallax1" class="parallax1" value="<?php echo $resultatPagesParallaxTop['parallax_link'] ?>">
                                    <label for="parallax1">Lien menant a l'image du parallax numéro 1</label>
                                  </div>
                                  <h3 class="black-text center">Modification partie central de la page</h3>
                                  <?php
                                  $requete1 = 'SELECT p.*,o.* FROM pages p LEFT JOIN objectifs o ON p.id= o.page_id WHERE p.type ="'.$resultatPage["type"].'" AND p.id_type='.$resultatPage["id_type"].' ORDER BY `order`';
                                  $resultat = $pdo->prepare($requete1);
                                  $resultat->execute();
                                  $resultatPagesObjectifs = $resultat->fetchAll(PDO::FETCH_ASSOC);
                                  foreach ($resultatPagesObjectifs as $resultatPageObjectifs){ ?>
                                    <div class="input-field col s4 <?php echo count($resultatPagesObjectifs)>2?'l4':'l6' ?> ">
                                      <?php if($resultatPageObjectifs['typeLogo_objectifs']== "image") :?>
                                        <select disabled id="typeLogoObj<?php echo$resultatPageObjectifs['order'] ?>" <?php echo 'name="typeLogoObj'.$resultatPageObjectifs['order'].'"' ?>>
                                          <option disabled id="typeLogoObj<?php echo$resultatPageObjectifs['order'] ?>" selected value="image">image</option>
                                          <option disabled id="typeLogoObj<?php echo$resultatPageObjectifs['order'] ?>" value="icon">icon</option>
                                        </select>
                                        <label for="typeLogoObj<?php echo$resultatPageObjectifs['order'] ?>">Type de logo numéro <?php echo$resultatPageObjectifs['order'] ?></label>
                                      <?php else: ?>
                                        <select disabled id="typeLogoObj<?php echo$resultatPageObjectifs['order'] ?>" <?php echo 'name="typeLogoObj'.$resultatPageObjectifs['order'].'"' ?>>
                                          <option disabled id="typeLogoObj<?php echo$resultatPageObjectifs['order'] ?>" value="image">image</option>
                                          <option disabled id="typeLogoObj<?php echo$resultatPageObjectifs['order'] ?>" selected value="icon">icon</option>
                                        </select>
                                        <label for="typeLogoObj<?php echo$resultatPageObjectifs['order'] ?>">Type de logo numéro <?php echo$resultatPageObjectifs['order'] ?></label>
                                      <?php endif ?>
                                    </div>
                                  <?php } ?>
                                  <?php foreach ($resultatPagesObjectifs as $resultatPageObjectifs) { ?>
                                    <div class="input-field col s4 <?php echo count($resultatPagesObjectifs)>2?'l4':'l6' ?> ">
                                      <input readonly="readonly" id="lienObj<?php echo$resultatPageObjectifs['order'] ?>" type="text" class="validate" <?php echo 'name="lienObj'.$resultatPageObjectifs['order'].'"' ?> value="<?php echo $resultatPageObjectifs['logo_objectifs'] ?>">
                                      <label for="lienObj<?php echo$resultatPageObjectifs['order'] ?>">lien du logo de l'objectif numéro <?php echo$resultatPageObjectifs['order'] ?></label>
                                    </div>
                                  <?php }; ?>
                                  <?php foreach ($resultatPagesObjectifs as $resultatPageObjectifs){ ?>
                                    <div class="input-field col s4 <?php echo count($resultatPagesObjectifs)>2?'l4':'l6' ?> ">
                                      <input readonly="readonly" id="titleObj<?php echo$resultatPageObjectifs['order'] ?>" type="text" class="validate" <?php echo 'name="titleObj'.$resultatPageObjectifs['order'].'"' ?> value="<?php echo $resultatPageObjectifs['title_objectifs'] ?>">
                                      <label for="titleObj<?php echo$resultatPageObjectifs['order'] ?>">Titre de l'objectif numéro <?php echo$resultatPageObjectifs['order'] ?></label>
                                    </div>
                                  <?php }; ?>
                                  <?php foreach ($resultatPagesObjectifs as $resultatPageObjectifs){ ?>
                                    <div class="input-field col s4 <?php echo count($resultatPagesObjectifs)>2?'l4':'l6' ?> ">
                                      <input readonly="readonly" id="contentObj<?php echo$resultatPageObjectifs['order'] ?>" type="text" class="validate" <?php echo 'name="contentObj'.$resultatPageObjectifs['order'].'"' ?> value="<?php echo $resultatPageObjectifs['description_objectifs'] ?>">
                                      <label for="contentObj<?php echo$resultatPageObjectifs['order'] ?>">Contenu de l'objectif numéro <?php echo$resultatPageObjectifs['order'] ?></label>
                                    </div>
                                  <?php }; ?>
                                  <div class="input-field col s12">
                                    <?php
                                    $requete1 = 'SELECT p.*,pa.* FROM pages p LEFT JOIN parallax pa ON p.id= pa.page_id WHERE p.type ="'.$resultatPage["type"].'" AND p.id_type='.$resultatPage["id_type"].' AND `order` = 2';
                                    $resultat = $pdo->prepare($requete1);
                                    $resultat->execute();
                                    $resultatPagesParallaxMid = current($resultat->fetchAll(PDO::FETCH_ASSOC));
                                    ?>
                                    <input readonly="readonly" id="parallax2" type="text" name="parallax2" class="validate" value="<?php echo $resultatPagesParallaxMid['parallax_link'] ?>">
                                    <label for="parallax2">Lien menant a l'image du parallax numéro 2</label>
                                  </div>
                                  <h3 class="black-text center">Modification du carousel de la page</h3>
                                  <?php
                                  $requete1 = 'SELECT p.*,c.* FROM pages p LEFT JOIN carousel c ON p.id= c.page_id WHERE p.type ="'.$resultatPage["type"].'" AND p.id_type='.$resultatPage["id_type"].' ORDER BY `order`';
                                  $resultat = $pdo->prepare($requete1);
                                  $resultat->execute();
                                  $resultatPagesCarousel = $resultat->fetchAll(PDO::FETCH_ASSOC);?>
                                <?php foreach ($resultatPagesCarousel as $resultatPageCarousel){ ?>
                                    <div class="input-field col s6">
                                      <input readonly="readonly" id="carousel<?php echo$resultatPageCarousel['order'] ?>" type="text" class="validate" <?php echo 'name="carousel'.$resultatPageCarousel['order'].'"' ?> value="<?php echo $resultatPageCarousel['carousel_link'] ?>">
                                      <label for="carousel<?php echo$resultatPageCarousel['order'] ?>">Contenu de l'objectif numéro <?php echo$resultatPageCarousel['order'] ?></label>
                                    </div>
                                  <?php }; ?>
                                  <h3 class="black-text center">Modification de la partie inférieur de la page</h3>
                                  <div class="input-field col s12">
                                    <?php
                                    $requete1 = 'SELECT p.*,pa.* FROM pages p LEFT JOIN parallax pa ON p.id= pa.page_id WHERE p.type ="'.$resultatPage["type"].'" AND p.id_type='.$resultatPage["id_type"].' AND `order` = 3';
                                    $resultat = $pdo->prepare($requete1);
                                    $resultat->execute();
                                    $resultatPagesParallaxBot = current($resultat->fetchAll(PDO::FETCH_ASSOC));
                                    ?>
                                    <input readonly="readonly" id="parallax3" type="text" name="parallax3" class="validate" value="<?php echo $resultatPagesParallaxBot['parallax_link'] ?>">
                                    <label for="parallax3">Lien menant a l'image du parallax numéro 3</label>
                                  </div>
                                  <?php
                                  $requete1 = 'SELECT p.*,a.* FROM pages p LEFT JOIN avis a ON p.id= a.page_id WHERE p.type ="'.$resultatPage["type"].'" AND p.id_type='.$resultatPage["id_type"].' ORDER BY `order`';
                                  $resultat = $pdo->prepare($requete1);
                                  $resultat->execute();
                                  $resultatPagesAvis = $resultat->fetchAll(PDO::FETCH_ASSOC);?>
                                  <?php foreach ($resultatPagesAvis as $resultatPageAvis){ ?>
                                    <div class="input-field col s4 <?php echo count($resultatPagesAvis)>2?'l4':'l6' ?> ">
                                      <?php if($resultatPageAvis['typeLogo_avis'] == "image") :?>
                                        <select disabled id="typeLogoAvis<?php echo$resultatPageAvis['order'] ?>" <?php echo 'name="typeLogoAvis'.$resultatPageAvis['order'].'"' ?>>
                                          <option disabled id="typeLogoAvis<?php echo$resultatPageAvis['order'] ?>" selected value="image">image</option>
                                          <option disabled id="typeLogoAvis<?php echo$resultatPageAvis['order'] ?>" value="icon">icon</option>
                                        </select>
                                        <label for="typeLogoAvis<?php echo$resultatPageAvis['order'] ?>">Type de logo numéro <?php echo$resultatPageAvis['order'] ?></label>
                                      <?php else: ?>
                                        <select disabled id="typeLogoAvis<?php echo$resultatPageAvis['order'] ?>" <?php echo 'name="typeLogoAvis'.$resultatPageAvis['order'].'"' ?>>
                                          <option disabled id="typeLogoAvis<?php echo$resultatPageAvis['order']?>" value="image">image</option>
                                          <option disabled id="typeLogoAvis<?php echo$resultatPageAvis['order']?>" selected value="icon">icon</option>
                                        </select>
                                        <label for="typeLogoAvis<?php echo$resultatPageAvis['order'] ?>">Type de logo numéro <?php echo$resultatPageAvis['order'] ?></label>
                                      <?php endif ?>
                                    </div>
                                  <?php }; ?>
                                  <?php foreach ($resultatPagesAvis as $resultatPageAvis){ ?>
                                    <div class="input-field col s4 <?php echo count($resultatPagesAvis)>2?'l4':'l6' ?> ">
                                      <input readonly="readonly" id="lienAvis<?php echo$resultatPageAvis['order'] ?>" type="text" class="validate" <?php echo 'name="lienAvis'.$resultatPageAvis['order'].'"' ?> value="<?php echo $resultatPageAvis['logo_avis'] ?>">
                                      <label for="lienAvis<?php echo$resultatPageAvis['order'] ?>">lien du logo de l'objectif numéro <?php echo$resultatPageAvis['order'] ?></label>
                                    </div>
                                  <?php }; ?>
                                  <?php foreach ($resultatPagesAvis as $resultatPageAvis){ ?>
                                    <div class="input-field col s6 <?php echo count($resultatPagesAvis)>2?'l4':'l6' ?>">
                                      <input readonly="readonly" id="titleAvis<?php echo $resultatPageAvis['order'] ?>" type="text" class="validate" <?php echo 'name="titleAvis'.$resultatPageAvis['order'].'"' ?> value="<?php echo $resultatPageAvis['title_avis'] ?>">
                                      <label for="titleAvis<?php echo $resultatPageAvis['order'] ?>">Titre de l'avis numéro <?php echo $resultatPageAvis['order'] ?></label>
                                    </div>
                                  <?php } ?>
                                  <?php foreach ($resultatPagesAvis as $resultatPageAvis){ ?>
                                    <div class="input-field col s6 <?php echo count($resultatPagesAvis)>2?'l4':'l6' ?>">
                                      <input readonly="readonly" id="descAvis<?php echo $resultatPageAvis['order']?>" type="text" class="validate" <?php echo 'name="descAvis'.$resultatPageAvis['order'].'"' ?> value="<?php echo $resultatPageAvis['description_avis'] ?>">
                                      <label for="descAvis<?php echo $resultatPageAvis['order'] ?>">description de l'avis numéro <?php echo $resultatPageAvis['order'] ?></label>
                                    </div>
                                  <?php } ?>
                                  <div class="input-field col s12">
                                    <input readonly="readonly" value="<?php echo $resultatPageAvis['id'] ?>" id="id-page" type="text" class="validate" name="id-page" >
                                    <label for="id-page">id de la page</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <input type='submit' class="btn connect" value="Valider le changement"/>
                            </div>
                          </form>
                        </div>
                    <?php } ?>
                  </div>
                <?php endif ?>
              </div>
            </div>
          </div>
      <!-- Modal Structure -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
      <?php endif ?>
    <?php endif ?>
  </body>
</html>
