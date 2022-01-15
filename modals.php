<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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
