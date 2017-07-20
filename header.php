<div class="container">
    <div class="jumbotron">
        <h1>ART'S BOOK</h1>
        <p id="text">by Michel BOULNOIS & Co</p>
    </div>
    <!------------------------------------- Modal inscription ---------------------------------------->
    <div class="modal fade" id="modalInscription" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Inscrivez-vous</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="index.php" method="POST"><!--creation des champs du formulaire avec position du texte a droite-->
                            <div class="row">
                                <div class="col-lg-offset-1 col-lg-3 text-right">
                                    <label for="userGroup">Catégorie :</label>
                                </div>
                                <div class="col-lg-4">
                                    <select>
                                        <option value="choix1">Artiste</option>
                                        <option value="choix2">Visiteur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-offset-1 col-lg-3 text-right">
                                    <label for="lastName">Nom :</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" name="lastName" id="lastName">
                                    <small><?= (isset($errorList['lastName'])) ? $errorList['lastName'] : '' ?></small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-offset-1 col-lg-3 text-right">
                                    <label for="firstName">Prénom :</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" name="firstName" id="firstName">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-offset-1 col-lg-3 text-right">
                                    <label for="mail">E-mail :</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="email" name="mail" placeholder="terminator@cyborg.fr" id="mail">
                                    <span id="success">Adresse e-mail valide</span>
                                    <span id="error">Adresse e-mail non valide</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-offset-1 col-lg-3 text-right">
                                    <label for="pwd">Mot de passe :</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="password" pattern=".{4,}" name="pwd" id="pwd">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-offset-1 col-lg-3 text-right">
                                    <label for="confirmPassword">Confirmation du mot de passe :</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="password" pattern=".{4,}" name="confirmPassword" id="confirmPassword">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary" name="save" id="validForm">Ok</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------------- Modal connexion ---------------------------------------->
    <div class="modal fade" id="modalConnexion" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Bienvenue ! Veuillez vous identifier.</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form method="POST" action="#"><!--creation des champs du formulaire avec position du texte a droite-->
                            <div class="row">
                                <div class="col-lg-offset-1 col-lg-3 text-right">
                                    <label for="mail">E-mail :</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="email" name="co_mail" placeholder="terminator@cyborg.fr" id="mail">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-offset-1 col-lg-3 text-right">
                                    <label for="password">Mot de passe :</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="password" pattern=".{4,}" name="passwordUp" id="passwordUp">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary" name="connection" id="validForm">Ok</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----barre navigation------------------------------------->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Accueil</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="menu"><a href="about.php">A propos</a></li>
                <li class="menu"><a href="stoneSculpture.php">Sculpture Pierre</a></li>
                <li class="menu"><a href="woodSculpture.php">Sculpture Bois</a></li>
                <li class="menu"><a href="painting.php">Peinture</a></li>
                <li class="menu"><a href="contact.php">Contact</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (!empty($_SESSION)) { ?>
                    <li class="dropdown col-lg-1 col-lg-offset-4 col-xs-offset-0 col-xs-5"><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?= $_SESSION['lastName'] ?><span class="caret"></span></a>
                        <ul aria-labelledby="myTabDrop1" role="menu" class="dropdown-menu dropdown-menu-primary">
                            <li><a  href="profile.php" title="Mon profil">Mon Profil</a></li>
                            <li><a href="index.php?disconnect" title="Déconnexion" >Déconnexion</a></li>
                        </ul>
                    </li>
                <?php } else { ?>
                    <li><a href="#modalInscription" data-toggle="modal" data-target="#modalInscription" title="Inscription"><span class="glyphicon glyphicon-user"></span> Inscription </a></li>
                    <li><a href="#modalConnexion" data-toggle="modal" data-target="#modalConnexion" title="Connexion"><span class="glyphicon glyphicon-log-in"></span> Connexion </a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</div>