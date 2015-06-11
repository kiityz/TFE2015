<div class="navbar">
  <div class="navbar-inner">
    <div class="left">
      <a href="#" class="back link">
        <img src="img/back.png">
       </a>
    </div>
    <div id="titre-nav" class="center sliding">Inscription</div>
  </div>
</div>

<div class="login-screen">
  <div class="view">
      <div data-page="inscription" class="page">
        <div id="lougin" class="page-content login-screen-content">
          <form action="new_user.php" method="POST">    <!-- action  method POST-->
            <div class="list-block">
              <ul>
                <li class="item-content">
                  <div class="item-inner sign">
                    <img class="icon-log" src="img/login.png">
                    <div class="item-input">
                      <input type="text" name="username" placeholder="Login">
                      <!-- PHP -->
                      <div class="error">
                        <?php if(isset($error_username)){ echo $error_username; } ?>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner sign">
                    <img class="icon-log" src="img/email.png">
                    <div class="item-input">
                      <input type="text" name="email" placeholder="E-mail">
                      <!-- PHP -->
                      <div class="error">
                        <?php if(isset($error_email)){ echo $error_email; } ?>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner sign">
                    <img class="icon-log" src="img/mdp.png">
                    <div class="item-input">
                      <input type="password" name="password" placeholder="Mot de passe">
                    </div>
                  </div>
                </li>
              </ul>
            </div>

            <div class="list-block">
              <input class="form-submit" type="submit" value="S'inscrire">
              <div class="list-block-label">
                <p>En vous inscrivant vous <a href="#" data-popup=".popup-about" class="open-popup gras">acceptez nos règles de confidentialité.</a></p>
              </div>
            </div>

            <!-- About Popup -->
            <div class="popup popup-about">
              <div class="content-block">
                <p>Règles de confidentialité</p>
                <p><a href="#" class="close-popup">Fermer la fenêtre</a></p>
                <p>En s'inscrivant sur SHIPP vous adhérez aux conditions de collecte, de traitement et de transfert de vos données à caractère personnel et, le cas échéant, vous vous portez fort que ces conditions ont été communiquées à toutes les personnes concernées auxquelles les données à caractère personnel se rapportent et qu’elles ont été acceptées par elles. </p>

                <p>Vous disposez à tout moment de la possibilité de ne pas commencer ni poursuivre l’utilisation de l’App si vous n’acceptez pas les règles de confidentialité dans leur version applicable à la date de cette consultation ou de cette utilisation. </p>

                <p>SHIIP collecte diverses informations et données à caractère personnel lors de chaque utilisation de l'app par vous-même.
                Ces informations et données à caractère personnel sont notamment les suivantes : nom, prénom, adresse postale, adresse email, numéro de téléphone fixe ou portable, photo, adresse IP, type de navigateur et d’appareil utilisé par vous, site web à partir duquel vous vous êtes redirigé vers le site web de SHIPP, tous les identifiants de vos appareils, éventuelles données de géolocalisation, etc. </p>

                <p>Ces informations et données sont récoltées par SHIPP à usage interne (statistiques, marketing direct, mises à jour de sa base de données, etc) et afin d’analyser et d’optimiser le fonctionnement et l’utilisation de son site web et de ses Apps.</p>
              </div>
            </div>

          </form>
        </div>
      </div>
  </div>
</div>