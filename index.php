<?php
session_start();
include_once 'assets/models/user.php';
include_once 'assets/controllers/indexCtrl.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width= device-width,initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="assets/css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>      
        <script src="https://use.fontawesome.com/a85a823305.js"></script>
        <script src="assets/js/script.js" type="text/javascript"></script>
        <title>Accueil</title>
    </head>
    <body>
        <h1>Michel BOULNOIS Sculptures, Peintures & Compagnie</h1>
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
                                        <span id="success">C'est ok</span>
                                        <span id="error">C'est pas ok</span>
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
    </div>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Accueil</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="menu"><a href="stoneSculpture.php">Sculpture Pierre</a></li>
                <li class="menu"><a href="woodSculpture.php">Sculpture Bois</a></li>
                <li class="menu"><a href="painting.php">Peinture</a></li>
                <li class="menu"><a href="contact.php">Contact</a></li>
                <li><a href="index.php?disconnect" title="disconnect" >Déconnexion</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(!empty($_SESSION)){ ?>
                <li><button class="btn btn-primary"><?= $_SESSION['lastName'] ?></button></li>
                <?php }else{ ?>
                <li><a href="#modalInscription" data-toggle="modal" data-target="#modalInscription"><span class="glyphicon glyphicon-user"></span> Inscription </a></li>
                <li><a href="#modalConnexion" data-toggle="modal" data-target="#modalConnexion"><span class="glyphicon glyphicon-log-in"></span> Connexion </a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</div>
<div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="assets/img/atelier.jpg" style="width: 100%; height: 600px">
                <div class="text">....</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="assets/img/atelier2.jpg" style="width: 100%; height: 600px">
                <div class="text">....</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="assets/img/travailencours.jpg" style="width:100%; height: 600px">
                <div class="text">.....</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
</div>
<script>
   var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>
</body>
</html>
