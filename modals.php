<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php if(isset($_GET['page'])):
      if($_GET['page']=='users'):
      require "user_info.php"; ?>
      <div id='add-user' class="modal">
        <div class="modal-content">
          <h4>Enregister un nouveau compte</h4>
            <div class="row">
              <form method="post" action="add_user.php">
                <div class="row">
                  <div class="input-field col s6">
                    <input id="email" type="email" name="email" class="validate">
                    <label for="email">Adresse email</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="login" type="text" class="validate" name="login">
                    <label for="login">Login</label>
                  </div>
                </div>
                  <div class="input-field col s6">
                    <input id="mdp" type="password" class="validate" name="password">
                    <label for="mdp">Mot de passe</label>
                  </div>
                  <div class="input-field col s6">
                    <select id='choose_admin' name="admin">
                      <option id="admin" value="1">Oui</option>
                      <option id="admin" value="0" selected>Non</option>
                    </select>
                    <label for='choose_admin'>Admin</label>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <input type='submit' class="btn connect" value="Créer le nouveau compte"/>
            </div>
          </form>
      </div>

      <div id="change-user" class="modal">
        <div class="modal-content">
          <h4>Modifier un compte</h4>
            <div class="row">
              <form method="post" action="change_user.php">
                <div class="row">
                  <div class="input-field col s3">
                    <input id="login" name="login" class="validate" type="text" value="<?php echo $resultatUsersInfo[0]['login'] ?>">
                    <label for="login">login de l'utilisateur</label>
                  </div>
                  <div class="input-field col s3">
                    <input id="email" type="email" class="validate" name="email" value="<?php echo $resultatUsersInfo[0]['email'] ?>">
                    <label for="email">email</label>
                  </div>
                  <div class="input-field col s3">
                    <input id="password" type="password" class="validate" name="password" value="<?php echo $resultatUsersInfo[0]['password'] ?>">
                    <label for="password">mot de passe</label>
                  </div>
                  <div class="input-field col s3">
                    <?php if($resultatUsersInfo[0]['admin']== 1):?>
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
                    <input readonly="readonly" value="<?php echo $resultatUsersInfo[0]['id'] ?>" id="id-user" type="text" class="validate" name="id" >
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

      <div id="delete-user" class="modal">
        <div class="modal-content">
          <h4>Supprimer un compte</h4>
            <div class="row">
              <form method="post" action="remove_user.php">
                  <p>Vous allez supprimer le compte avec les information suivante (la manipulation est définitive)</p>
                  <div class="input-field col s3">
                    <input readonly="readonly" id="login" name="login" class="validate" type="text" value="<?php echo $resultatUsersInfo[0]['login'] ?>">
                    <label for="login">login de l'utilisateur</label>
                  </div>
                  <div class="input-field col s3">
                    <input readonly="readonly" id="email" type="email" class="validate" name="email" value="<?php echo $resultatUsersInfo[0]['email'] ?>">
                    <label for="email">email</label>
                  </div>
                  <div class="input-field col s3">
                    <input readonly="readonly" id="password" type="password" class="validate" name="password" value="<?php echo $resultatUsersInfo[0]['password'] ?>">
                    <label for="password">mot de passe</label>
                  </div>
                  <div class="input-field col s3">
                    <?php if($resultatUsersInfo[0]['admin']== 1):?>
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
                    <input readonly="readonly" value="<?php echo $resultatUsersInfo[0]['id'] ?>" id="id-user" type="text" class="validate" name="id-user" >
                    <label for="id-user">id de l'utilisateur</label>
                  </div>
                </div>
              </div>
            <div class="modal-footer">
              <input type='submit' class="btn connect" value="Valider la suppresion"/>
            </div>
          </form>
      </div>

<?php elseif($_GET['page']=='pages') :
  require "page_info.php"; ?>
      <div id="add-page" class="modal">
        <div class="modal-content">
          <h4>Créer une nouvelle page</h4>
          <div class="row">
          <form method="post" action="add_page.php">
            <div class="row">
              <div class="input-field col s6">
                <input id="title" type="text" name="title" class="validate">
                <label for="title">titre de la page</label>
              </div>
              <div class="input-field col s6">
                <input id="img_link" type="text" class="validate" name="img_link">
                <label for="img_link">lien menant à l'image</label>
              </div>
              <div class="input-field col s6">
                <input id="description" type="text" name="description" class="validate">
                <label for="description">Présentation de la personne sur l'image</label>
              </div>
              <div class="input-field col s6">
                <input id="subtitle" type="text" class="validate" name="subtitle">
                <label for="subtitle">courte description du projet nom et prénom de la personne sur l'image</label>
              </div>
              <h3>ajout de la partie central de la page</h3>
              <div class="input-field col s12 ">
                <input id="parallax1" type="text" name="title" class="parallax1">
                <label for="parallax1">Lien menant a l'image du parallax numéro 1</label>
              </div>
              <div class="input-filed col s4">
                <select id='typelogo'>
                  <option value="image">image</option>
                  <option value="icon">icon</option>
                </select>
                <label for="typelogo">Type de logo</label>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type='submit' class="btn connect" value="Créer le nouveau compte"/>
        </div>
      </form>
  </div>

  <div id="change-page" class="modal">
    <div class="modal-content">
      <h2 class="center">Modifier une page</h2>
        <div class="row">
          <form method="post" action="change_page.php">
            <h3>modification partie supperieur de la page</h3>
            <div class="row">
              <div class="input-field col s6">
                <input id="title" type="text" name="title" class="validate" value="<?php echo $resultatPagesInfoAvis[0]['title'] ?>">
                <label for="title">titre de la page</label>
              </div>
              <div class="input-field col s6">
                <input id="img_link" type="text" class="validate" name="img_link" value="<?php echo $resultatPagesInfoAvis[0]['img_link'] ?>">
                <label for="img_link">lien menant à l'image</label>
              </div>
              <div class="input-field col s6">
                <input id="description" type="text" name="description" class="validate" value="<?php echo $resultatPagesInfoAvis[0]['description'] ?>">
                <label for="description">Présentation de la personne sur l'image</label>
              </div>
              <div class="input-field col s6">
                <input id="subtitle" type="text" class="validate" name="subtitle" value="<?php echo $resultatPagesInfoAvis[0]['subtitle'] ?>">
                <label for="subtitle">courte description du projet nom et prénom de la personne sur l'image</label>
              </div>
              <h3>modification partie central de la page</h3>
              <div class="input-field col s12 ">
                <input id="parallax1" type="text" name="parallax1" class="parallax1" value="<?php echo $resultatParallaxTop['parallax_link'] ?>">
                <label for="parallax1">Lien menant a l'image du parallax numéro 1</label>
              </div>
              <?php foreach ($resultatPagesInfoObj as $resultatPagesInfo): ?>
                <div class="input-field col s4 <?php echo count($resultatPagesInfoObj)>2?'l4':'l6' ?> ">
                  <?php if($resultatPagesInfo['typeLogo_objectifs']== "image") :?>
                    <select id="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>" <?php echo 'name="typeLogoObj'.$resultatPagesInfo['order'].'"' ?>>
                      <option id="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>" selected value="image">image</option>
                      <option id="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>" value="icon">icon</option>
                    </select>
                    <label for="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>">Type de logo numéro <?php echo$resultatPagesInfo['order'] ?></label>
                <?php else: ?>
                  <select id="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>" <?php echo 'name="typeLogoObj'.$resultatPagesInfo['order'].'"' ?>>
                    <option id="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>" value="image">image</option>
                    <option id="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>" selected value="icon">icon</option>
                  </select>
                  <label for="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>">Type de logo numéro <?php echo$resultatPagesInfo['order'] ?></label>
                <?php endif ?>
              </div>
              <?php endforeach; ?>
              <?php foreach ($resultatPagesInfoObj as $resultatPagesInfo): ?>
                <div class="input-field col s4 <?php echo count($resultatPagesInfoObj)>2?'l4':'l6' ?> ">
                  <input id="lienObj<?php echo$resultatPagesInfo['order'] ?>" type="text" class="validate" <?php echo 'name="lienObj'.$resultatPagesInfo['order'].'"' ?> value="<?php echo $resultatPagesInfo['logo_objectifs'] ?>">
                  <label for="lienObj<?php echo$resultatPagesInfo['order'] ?>">lien du logo de l'objectif numéro <?php echo$resultatPagesInfo['order'] ?></label>
                </div>
              <?php endforeach; ?>
              <?php foreach ($resultatPagesInfoObj as $resultatPagesInfo): ?>
                <div class="input-field col s4 <?php echo count($resultatPagesInfoObj)>2?'l4':'l6' ?> ">
                  <input id="titleObj<?php echo$resultatPagesInfo['order'] ?>" type="text" class="validate" <?php echo 'name="titleObj'.$resultatPagesInfo['order'].'"' ?> value="<?php echo $resultatPagesInfo['title_objectifs'] ?>">
                  <label for="titleObj<?php echo$resultatPagesInfo['order'] ?>">Titre de l'objectif numéro <?php echo$resultatPagesInfo['order'] ?></label>
                </div>
              <?php endforeach; ?>
              <?php foreach ($resultatPagesInfoObj as $resultatPagesInfo): ?>
                <div class="input-field col s4 <?php echo count($resultatPagesInfoObj)>2?'l4':'l6' ?> ">
                  <input id="contentObj<?php echo$resultatPagesInfo['order'] ?>" type="text" class="validate" <?php echo 'name="contentObj'.$resultatPagesInfo['order'].'"' ?> value="<?php echo $resultatPagesInfo['description_objectifs'] ?>">
                  <label for="contentObj<?php echo$resultatPagesInfo['order'] ?>">Contenu de l'objectif numéro <?php echo$resultatPagesInfo['order'] ?></label>
                </div>
              <?php endforeach; ?>
              <div class="input-field col s12">
                <input id="parallax2" type="text" name="parallax2" class="validate" value="<?php echo $resultatParallaxMid['parallax_link'] ?>">
                <label for="parallax2">Lien menant a l'image du parallax numéro 2</label>
              </div>
              <h3>modification du carousel de la page</h3>
              <?php foreach ($resultatPagesInfoCarousel as $resultatPagesInfo): ?>
                <div class="input-field col s6">
                  <input id="carousel<?php echo$resultatPagesInfo['order'] ?>" type="text" class="validate" <?php echo 'name="carousel'.$resultatPagesInfo['order'].'"' ?> value="<?php echo $resultatPagesInfo['carousel_link'] ?>">
                  <label for="carousel<?php echo$resultatPagesInfo['order'] ?>">Contenu de l'objectif numéro <?php echo$resultatPagesInfo['order'] ?></label>
                </div>
              <?php endforeach; ?>
              <div class="input-field col s12">
                <input id="parallax3" type="text" name="parallax3" class="validate" value="<?php echo $resultatParallaxBot['parallax_link'] ?>">
                <label for="parallax3">Lien menant a l'image du parallax numéro 3</label>
              </div>
              <h3>modification de la partie inférieur de la page</h3>
              <?php foreach ($resultatPagesInfoAvis as $resultatAvisModal): ?>
                <div class="input-field col s4 <?php echo count($resultatPagesInfoAvis)>2?'l4':'l6' ?> ">
                  <?php if($resultatAvisModal['typeLogo_avis']== "image") :?>
                    <select id="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>" <?php echo 'name="lienAvis'.$resultatPagesInfo['order'].'"' ?>>
                      <option id="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>" selected value="image">image</option>
                      <option id="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>" value="icon">icon</option>
                    </select>
                    <label for="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>">Type de logo numéro <?php echo$resultatAvisModal['order'] ?></label>
                <?php else: ?>
                  <select id="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>" <?php echo 'name="lienAvis'.$resultatPagesInfo['order'].'"' ?>>
                    <option id="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>" value="image">image</option>
                    <option id="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>" selected value="icon">icon</option>
                  </select>
                  <label for="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>">Type de logo numéro <?php echo$resultatAvisModal['order'] ?></label>
                <?php endif ?>
              </div>
              <?php endforeach; ?>
              <?php foreach ($resultatPagesInfoAvis as $resultatAvisModal): ?>
                <div class="input-field col s4 <?php echo count($resultatPagesInfoAvis)>2?'l4':'l6' ?> ">
                  <input id="lienAvis<?php echo$resultatAvisModal['order'] ?>" type="text" class="validate" <?php echo 'name="lienAvis'.$resultatPagesInfo['order'].'"' ?> value="<?php echo $resultatAvisModal['logo_avis'] ?>">
                  <label for="lienAvis<?php echo$resultatAvisModal['order'] ?>">lien du logo de l'objectif numéro <?php echo$resultatAvisModal['order'] ?></label>
                </div>
              <?php endforeach; ?>
              <?php foreach ($resultatPagesInfoAvis as $resultatAvisModal): ?>
                <div class="input-field col s6 <?php echo count($resultatPagesInfoAvis)>2?'l4':'l6' ?>">
                  <input id="titleAvis<?php echo $resultatAvisModal['order'] ?>" type="text" class="validate" <?php echo 'name="titleAvis'.$resultatPagesInfo['order'].'"' ?> value="<?php echo $resultatAvisModal['title_avis'] ?>">
                  <label for="titleAvis<?php echo $resultatAvisModal['order'] ?>">Titre de l'avis numéro <?php echo $resultatAvisModal['order'] ?></label>
                </div>
              <?php endforeach ?>
              <?php foreach ($resultatPagesInfoAvis as $resultatAvisModal): ?>
                <div class="input-field col s6 <?php echo count($resultatPagesInfoAvis)>2?'l4':'l6' ?>">
                  <input id="descAvis<?php echo $resultatAvisModal['order']?>" type="text" class="validate" <?php echo 'name="descAvis'.$resultatPagesInfo['order'].'"' ?> value="<?php echo $resultatAvisModal['description_avis'] ?>">
                  <label for="descAvis<?php echo $resultatAvisModal['order'] ?>">description de l'avis numéro <?php echo $resultatAvisModal['order'] ?></label>
                </div>
              <?php endforeach ?>
              <div class="input-field col s12">
                <input readonly="readonly" value="<?php echo $resultatPagesInfoAvis[0]['id'] ?>" id="id-page" type="text" class="validate" name="id-page" >
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

  <div id="delete-page" class="modal">
    <div class="modal-content">
      <h2 class="center">Modifier une page</h2>
        <div class="row">
          <form method="post" action="change_page.php">
            <h3>modification partie supperieur de la page</h3>
            <div class="row">
              <div class="input-field col s6">
                <input readonly="readonly" id="title" type="text" name="title" class="validate" value="<?php echo $resultatPagesInfoAvis[0]['title'] ?>">
                <label for="title">titre de la page</label>
              </div>
              <div class="input-field col s6">
                <input readonly="readonly" id="img_link" type="text" class="validate" name="img_link" value="<?php echo $resultatPagesInfoAvis[0]['img_link'] ?>">
                <label for="img_link">lien menant à l'image</label>
              </div>
              <div class="input-field col s6">
                <input readonly="readonly" id="description" type="text" name="description" class="validate" value="<?php echo $resultatPagesInfoAvis[0]['description'] ?>">
                <label for="description">Présentation de la personne sur l'image</label>
              </div>
              <div class="input-field col s6">
                <input readonly="readonly" id="subtitle" type="text" class="validate" name="subtitle" value="<?php echo $resultatPagesInfoAvis[0]['subtitle'] ?>">
                <label for="subtitle">courte description du projet nom et prénom de la personne sur l'image</label>
              </div>
              <h3>modification partie central de la page</h3>
              <div class="input-field col s12 ">
                <input readonly="readonly" id="parallax1" type="text" name="title" class="parallax1" value="<?php echo $resultatParallaxTop['parallax_link'] ?>">
                <label for="parallax1">Lien menant a l'image du parallax numéro 1</label>
              </div>
              <?php foreach ($resultatPagesInfoObj as $resultatPagesInfo): ?>
                <div class="input-field col s4 <?php echo count($resultatPagesInfoObj)>2?'l4':'l6' ?> ">
                  <?php if($resultatPagesInfo['typeLogo_objectifs']== "image") :?>
                    <select readonly="readonly" id="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>">
                      <option readonly="readonly" id="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>" name="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>" selected value="image">image</option>
                      <option readonly="readonly" id="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>" name="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>" value="icon">icon</option>
                    </select>
                    <label for="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>">Type de logo numéro <?php echo$resultatPagesInfo['order'] ?></label>
                <?php else: ?>
                  <select readonly="readonly" id="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>">
                    <option readonly="readonly" id="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>" name="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>"  value="image">image</option>
                    <option readonly="readonly" id="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>" name="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>" selected value="icon">icon</option>
                  </select>
                  <label for="typeLogoObj<?php echo$resultatPagesInfo['order'] ?>">Type de logo numéro <?php echo$resultatPagesInfo['order'] ?></label>
                <?php endif ?>
              </div>
              <?php endforeach; ?>
              <?php foreach ($resultatPagesInfoObj as $resultatPagesInfo): ?>
                <div class="input-field col s4 <?php echo count($resultatPagesInfoObj)>2?'l4':'l6' ?> ">
                  <input readonly="readonly" id="lienObj<?php echo$resultatPagesInfo['order'] ?>" type="text" class="validate" name="lienObj<?php echo$resultatPagesInfo['order'] ?>" value="<?php echo $resultatPagesInfo['logo_objectifs'] ?>">
                  <label for="lienObj<?php echo$resultatPagesInfo['order'] ?>">lien du logo de l'objectif numéro <?php echo$resultatPagesInfo['order'] ?></label>
                </div>
              <?php endforeach; ?>
              <?php foreach ($resultatPagesInfoObj as $resultatPagesInfo): ?>
                <div class="input-field col s4 <?php echo count($resultatPagesInfoObj)>2?'l4':'l6' ?> ">
                  <input readonly="readonly" id="titleObj<?php echo$resultatPagesInfo['order'] ?>" type="text" class="validate" name="titleObj<?php echo$resultatPagesInfo['order'] ?>" value="<?php echo $resultatPagesInfo['title_objectifs'] ?>">
                  <label for="titleObj<?php echo$resultatPagesInfo['order'] ?>">Titre de l'objectif numéro <?php echo$resultatPagesInfo['order'] ?></label>
                </div>
              <?php endforeach; ?>
              <?php foreach ($resultatPagesInfoObj as $resultatPagesInfo): ?>
                <div class="input-field col s4 <?php echo count($resultatPagesInfoObj)>2?'l4':'l6' ?> ">
                  <input readonly="readonly" id="contentObj<?php echo$resultatPagesInfo['order'] ?>" type="text" class="validate" name="contentObj<?php echo$resultatPagesInfo['order'] ?>" value="<?php echo $resultatPagesInfo['description_objectifs'] ?>">
                  <label for="contentObj<?php echo$resultatPagesInfo['order'] ?>">Contenu de l'objectif numéro <?php echo$resultatPagesInfo['order'] ?></label>
                </div>
              <?php endforeach; ?>
              <div class="input-field col s12">
                <input readonly="readonly" id="parallax2" type="text" name="parallax2" class="validate" value="<?php echo $resultatParallaxMid['parallax_link'] ?>">
                <label for="parallax2">Lien menant a l'image du parallax numéro 2</label>
              </div>
              <h3>modification du carousel de la page</h3>
              <?php foreach ($resultatPagesInfoCarousel as $resultatPagesInfo): ?>
                <div class="input-field col s6">
                  <input readonly="readonly" id="carousel<?php echo$resultatPagesInfo['order'] ?>" type="text" class="validate" name="carousel<?php echo$resultatPagesInfo['order'] ?>" value="<?php echo $resultatPagesInfo['carousel_link'] ?>">
                  <label for="carousel<?php echo$resultatPagesInfo['order'] ?>">Contenu de l'objectif numéro <?php echo$resultatPagesInfo['order'] ?></label>
                </div>
              <?php endforeach; ?>
              <div class="input-field col s12">
                <input readonly="readonly" id="parallax3" type="text" name="parallax3" class="validate" value="<?php echo $resultatParallaxBot['parallax_link'] ?>">
                <label for="parallax3">Lien menant a l'image du parallax numéro 3</label>
              </div>
              <h3>modification de la partie inférieur de la page</h3>
              <?php foreach ($resultatPagesInfoAvis as $resultatAvisModal): ?>
                <div class="input-field col s4 <?php echo count($resultatPagesInfoAvis)>2?'l4':'l6' ?> ">
                  <?php if($resultatAvisModal['typeLogo_avis']== "image") :?>
                    <select readonly="readonly" id="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>">
                      <option readonly="readonly" id="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>" name="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>" selected value="image">image</option>
                      <option readonly="readonly" id="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>" name="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>" value="icon">icon</option>
                    </select>
                    <label for="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>">Type de logo numéro <?php echo$resultatAvisModal['order'] ?></label>
                <?php else: ?>
                  <select readonly="readonly" id="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>">
                    <option readonly="readonly" id="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>" name="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>" value="image">image</option>
                    <option readonly="readonly" id="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>" name="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>" selected value="icon">icon</option>
                  </select>
                  <label for="typeLogoAvis<?php echo$resultatAvisModal['order'] ?>">Type de logo numéro <?php echo$resultatAvisModal['order'] ?></label>
                <?php endif ?>
              </div>
              <?php endforeach; ?>
              <?php foreach ($resultatPagesInfoAvis as $resultatAvisModal): ?>
                <div class="input-field col s4 <?php echo count($resultatPagesInfoAvis)>2?'l4':'l6' ?> ">
                  <input readonly="readonly" id="lienAvis<?php echo$resultatAvisModal['order'] ?>" type="text" class="validate" name="lienAvis<?php echo$resultatAvisModal['order'] ?>" value="<?php echo $resultatAvisModal['logo_avis'] ?>">
                  <label for="lienAvis<?php echo$resultatAvisModal['order'] ?>">lien du logo de l'objectif numéro <?php echo$resultatAvisModal['order'] ?></label>
                </div>
              <?php endforeach; ?>
              <?php foreach ($resultatPagesInfoAvis as $resultatAvisModal): ?>
                <div class="input-field col s6 <?php echo count($resultatPagesInfoAvis)>2?'l4':'l6' ?>">
                  <input readonly="readonly" id="titleAvis<?php echo $resultatAvisModal['order'] ?>" type="text" class="validate" name="titleAvis<?php echo $resultatAvisModal['order'] ?>" value="<?php echo $resultatAvisModal['title_avis'] ?>">
                  <label for="titleAvis<?php echo $resultatAvisModal['order'] ?>">Titre de l'avis numéro <?php echo $resultatAvisModal['order'] ?></label>
                </div>
              <?php endforeach ?>
              <?php foreach ($resultatPagesInfoAvis as $resultatAvisModal): ?>
                <div class="input-field col s6 <?php echo count($resultatPagesInfoAvis)>2?'l4':'l6' ?>">
                  <input readonly="readonly" id="descAvis<?php echo $resultatAvisModal['order']?>" type="text" class="validate" name="descAvis<?php echo $resultatAvisModal['order'] ?>" value="<?php echo $resultatAvisModal['description_avis'] ?>">
                  <label for="descAvis<?php echo $resultatAvisModal['order'] ?>">description de l'avis numéro <?php echo $resultatAvisModal['order'] ?></label>
                </div>
              <?php endforeach ?>
            </div>
            </div>
          </div>
        <div class="modal-footer">
          <input type='submit' class="btn connect" value="Valider le changement"/>
        </div>
      </form>
  </div>
<?php endif ?>
<?php endif ?>

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
  </body>
</html>
