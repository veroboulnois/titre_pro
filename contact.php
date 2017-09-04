<?php
session_start();
include_once 'configuration.php';
include_once 'class/database.php';
include_once 'models/user.php';
include_once 'controllers/contactCtrl.php';
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
        <title>Contact</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="jumbotron">
            <div class="container">
                <form method="post" action="envoi.php">
                    <form>
                        <div class="contacts">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" id="name" placeholder="Entrez votre nom" required>
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom</label>
                                <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom"required>
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control" id="email" placeholder="Entrez votre email"required>
                            </div>
                            <div class="form-group">
                                <p><em><label for="Message">Votre message</label><br /><textarea name="message" id="message" required></textarea></em></p>
                            </div>
                            <button type="submit" value="Envoyer" class="btn btn-default">Envoyer</button>
                    </form> 
            </div>
        </div>
    </div> 
</body>
<!-- footer-->
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

