<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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
  </body>
</html>
