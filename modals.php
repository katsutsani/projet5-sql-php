<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php if($_GET['page']='users'):
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
                    <input id="admin" type="password" class="validate" name="admin">
                    <label for="admin">Admin</label>
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
                    <input id="admin" type="text" class="validate" name="admin" value="<?php echo $resultatUsersInfo[0]['admin'] ?>">
                    <label for="admin">admin</label>
                  </div>
                  <div class="input-field col s12">
                    <input disabled value="<?php echo $resultatUsersInfo[0]['id'] ?>" id="id-user" type="text" class="validate" name="id" >
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
                    <input disabled id="login" name="login" class="validate" type="text" value="<?php echo $resultatUsersInfo[0]['login'] ?>">
                    <label for="login">login de l'utilisateur</label>
                  </div>
                  <div class="input-field col s3">
                    <input disabled id="email" type="email" class="validate" name="email" value="<?php echo $resultatUsersInfo[0]['email'] ?>">
                    <label for="email">email</label>
                  </div>
                  <div class="input-field col s3">
                    <input disabled id="password" type="password" class="validate" name="password" value="<?php echo $resultatUsersInfo[0]['password'] ?>">
                    <label for="password">mot de passe</label>
                  </div>
                  <div class="input-field col s3">
                    <input disabled id="admin" type="text" class="validate" name="admin" value="<?php echo $resultatUsersInfo[0]['admin'] ?>">
                    <label for="admin">admin</label>
                  </div>
                  <div class="input-field col s12">
                    <input disabled value="<?php echo $resultatUsersInfo[0]['id'] ?>" id="id-user" type="text" class="validate" name="id" >
                    <label for="id">id de l'utilisateur</label>
                  </div>
                </div>
              </div>
            <div class="modal-footer">
              <input type='submit' class="btn connect" value="Valider la suppresion"/>
            </div>
          </form>
      </div>

<?php elseif($_GET['page']='pages') :?>

      <div id="add-page" class="modal">
    <div class="modal-content">
      <h4>Créer une nouvelle page</h4>
        <div class="row">
          <form method="post" action="add_page.php">
            <div class="row">
              <div class="input-field col s6">
                <input id="text" type="text" name="titre" class="validate">
                <label for="email">titre de la page</label>
              </div>
              <div class="input-field col s6">
                <input id="login" type="text" class="validate" name="img_link">
                <label for="login">lien vers une image</label>
              </div>
              <div class="input-field col s6">
                <input id="login" type="text" name="img_link">
                <label for="login">petite présentation de la personne sur l'image (pas marqué si vide)</label>
              </div>
              <div class="input-field col s6">
                <input id="text" type="text" name="subtitle" class="validate">
                <label for="email">petit description du projet</label>
              </div>
              <div class="input-field col s6">
                <input id="login" type="text" class="validate" name="img_link">
                <label for="login">lien vers une image</label>
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
      <h4>Modifier une page</h4>
        <div class="row">
          <form method="post" action="change_page.php">
            <div class="row">
              <div class="input-field col s6">
                <input id="email" type="text" name="champ" class="validate">
                <label for="email">champ que vous voulez Modifier</label>
              </div>
              <div class="input-field col s6">
                <input id="login" type="text" class="validate" name="valeur">
                <label for="login">valeur à lui assigner</label>
              </div>
            </div>
              <div class="input-field col s12">
                <input id="mdp" type="password" class="validate" name="id">
                <label for="mdp">id de la page à Modifier</label>
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
      <h4>Supprimer une page</h4>
        <div class="row">
          <form method="post" action="remove_page.php">
              <div class="input-field col s6">
                <input id="text" type="text" name="id" class="validate">
                <label for="email">l'id de la page que vous voulez modifier</label>
              </div>
          </div>
        <div class="modal-footer">
          <input type='submit' class="btn connect" value="Valider la suppresion"/>
        </div>
      </form>
  </div>
<?php endif ?>

      <div id="Contact" class="modal bottom-sheet">
        <div class="modal-content">
          <h4>Contactez-nous</h4>
          <div class="col s12 m4">
            <form novalidate="" method="post">
              <label for="name">Nom</label>
              <input type="text" name="name" placeholder="What's your full name?" value="">
              <label for="email">Adresse mail</label>
              <input type="email" name="email" placeholder="you@example.com" value="">
              <label for="message">Message</label>
              <textarea name="message" placeholder="Write your message for the team here" type="text"></textarea>
            </form>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn pulse">Agree</a>
          </div>
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
