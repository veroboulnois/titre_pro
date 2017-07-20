<?php
session_start();
include_once 'assets/models/artWork.php';
include_once 'assets/models/artWorkImg.php';
include_once 'assets/models/artWorkType.php';
include_once 'assets/controllers/picturesCtrl.php';
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
        <title>Ajout contenu</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container">
            <form action="pictures.php" method="POST" class="form-inline">
                <div class="row">
                    <div class="col-lg-4">
                        <h4>Veuillez choisir votre espace oeuvre :</h4>
                    </div>
                    <div class="col-lg-3 form-group">
                        <select name="artWork_type" class="form-control">
                            <?php foreach ($artWorkTypes as $type) { ?> 
                                <option value="<?= $type->id ?>"><?= $type->name ?></option>
                            <?php } ?>                                
                        </select>
                    </div>
                </div>
                <h4>Nouvelle oeuvre à ajouter :</h4>
                <div class="form-group">
                    <label for="name">Nom de la photo:</label>
                    <input type="text" class="form-control" id="name" placeholder="Nom" name="name">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" placeholder="Description de l'oeuvre" name="description">
                </div>
                <button type="submit" name="add_artwork" class="btn btn-default">Envoyer</button>
            </form>
            <h4>Liste des oeuvres :</h4>
            <ul>
                <li>Nom : </li>
                <li>Description :</li>
            </ul>
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
                                <li><a href="" title="A partager sur Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="" title="A partager sur Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="" title="A partager sur Google+"><i class="fa fa-google-plus"></i></a></li>
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
