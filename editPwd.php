<?php
session_start();
include_once 'configuration.php';
include_once 'class/database.php';
include_once 'models/user.php';
include_once 'controllers/editPwdCtrl.php';
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
        <title>Mes coordonnées</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <form action="/editPwd.php" method="POST">
            <div class="pwd">
                <div class="form-group">
                    <h1 class="size" class="text-center" id="successMessage"><?= $successMessage ?></h1>
                    <label for="password">Nouveau mot de passe:</label>
                    <input type="password" class="form-control" id="password" placeholder="Nouveau mot de passe" name="editPwd">
                </div>
                <div class="form-group">
                    <label for="password">Confirmez le nouveau mot de passe":</label>
                    <input type="password" class="form-control" id="password" placeholder="Confirmez le nouveau mot de passe" name="confirmPwd">
                    <span id="errorMessage"><?= $errorMessage ?></span>
                </div>     
                <button type="button" class="btn btn-primary">Annuler</button>
                <button type="submit" name="newPwd" class="btn btn-success">Modifier</button>
            </div>   
        </form>
    </body>
    <!--Footer-->
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
