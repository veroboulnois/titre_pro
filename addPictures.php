<?php
session_start();
include_once 'configuration.php';
include_once 'class/database.php';
include_once 'models/artWorkImg.php';
include_once 'models/artWork.php';
include_once 'models/artWorkType.php';
include_once 'controllers/addPicturesCtrl.php';
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
        <link href="assets/css/dropzone.css" rel="stylesheet" type="text/css"/>
        <script src="https://use.fontawesome.com/a85a823305.js"></script>
        <script src="assets/js/dropzone.js" type="text/javascript"></script>
        <title>Ajout photos</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container">
            <h3>Ajouter une photo de votre oeuvre</h3>
            <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST" class="dropzone" id="my-awesome-dropzone">
                <input type ="hidden" value="<?= $_SESSION['mail'] ?>" name="mail"/>
                <input type ="hidden" value="<?= $_SESSION['lastName'] ?>" name="lastName"/>
                <input type ="hidden" value="<?= (isset($_GET['artwork'])) ? $_GET['artwork'] : 0 ?>" name="idArtwork"/>
            </form>
        </div>
    </body>
    <footer>
        <section class="copyright-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
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
