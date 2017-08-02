<?php
session_start();
include_once 'configuration.php';
include_once 'class/database.php';
include_once 'models/user.php';
include_once 'models/artWork.php';
include_once 'models/artWorkType.php';
include_once 'controllers/profileCtrl.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width= device-width,initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/profile.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>      
        <script src="https://use.fontawesome.com/a85a823305.js"></script>
        <title>Espace personnel</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="jumbotron">
            <div class="container" id="block">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-9 col-lg-offset-0 col-lg-3 carre2">
                        <p><a class="link" href="/informations.php">Mes coordonnées</a></p>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-lg-offset-1 carre2">
                        <p><a class="link" href="/photo">Ajouter mes oeuvres</a></p>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-lg-offset-1 carre2">
                        <p><a class="link" href="/oeuvres">Mes oeuvres</a></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-4 col-sm-9 col-md-9 col-lg-3 carre2">
                        <p><a class="link" href="/favo">Mes favoris</a></p>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 col-lg-offset-1 carre2">
                        <p><a class="link" href="/like">Mes votes</a></p>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 col-lg-offset-1 carre2">
                        <p><a class="link" href="/divers">Mes votes reçus</a></p>
                    </div>
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
