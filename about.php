<?php
session_start();
include_once 'configuration.php';
include_once 'class/database.php';
include_once 'models/user.php';
include_once 'controllers/aboutCtrl.php';
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
        <title>A propos</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container" id="resum">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                     <p>Petit-fils d'un tailleur de pierre et maçon de métier, j'ai toujours eu un rapport particulier à cette matière. Là, encore c'est ma rencontre avec un jeune sculpteur,<br>
                        élève de Serge Damiens, qui m'amènera à me lancer.<br>
                        Pendant sept ans, ce dernier, m'a appris toutes les techniques dont j'avais besoin. Car, on ne rajoute pas à la pierre.<br>
                        Fort de cette expérience, j'ai décidé de profiter de mon atelier placé sous la maison pour faire vivre les blocs de pierre et de bois.
                        Tout est prétexte à créer.<br>
                        Aujourd'hui, plus que jamais, ce sont les blocs de pierre qui guident mon travail, ils me donnent une indication sur ce que l'on peux faire. <br>
                        C'est notamment le cas avec la stéatite, une roche très tendre, que je réalise une partie de mon travail.<br>
                        Utilisée depuis des millénaires, j'aime l'idée de reproduire les gestes des sculpteurs, il y a des centaines d'années.<br>
                        Passionné et avec l'envie de partager, je vous propose ce réseau social, chaque artiste peut s'inscrire et déposer les photos de ses oeuvres.<br>
                        Les visiteurs du site pourront quand à eux noter les oeuvres sous forme d'étoiles.</p>
                    <p>Michel BOULNOIS</p>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <section class="copyright-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
                        <div class="logo">
                            <h2 class="demo-logo">ART'S<strong>BO</strong>OK</h2>
                        </div>
                        <div class="social-media">
                            <ul class="list-inline">
                                <li><a href="#" title="A partager sur Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title="A partager sur Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title="A partager sur Google+"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="copyright">
                            <p>Copyright &copy; 2017. Véronique Boulnois.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer> 
</html>
