<?php
session_start();
if (isset($_SESSION['connected'])) {
    include_once 'configuration.php';
    include_once 'class/database.php';
    include_once 'models/user.php';
    include_once 'models/artWork.php';
    include_once 'models/artWorkImg.php';
    include_once 'models/artWorkType.php';
    include_once 'controllers/artWorksCtrl.php';
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
            <title>Mes Oeuvres</title>
        </head>
        <body>
            <?php include 'header.php'; ?>
            <div class="container" id="listArt">
                <div class="row">
                    <?php foreach ($listArtWorks as $listArtWork) { ?>
                        <div class="row artworkList">
                            <div class="col-lg-2 text-right"> 
                                <?= $listArtWork->firstName ?>
                            </div>
                            <div class="col-lg-2 text-right">
                                <?= $listArtWork->name ?>
                            </div>
                            <div class="col-lg-2 text-right">
                                <?= $listArtWork->description ?>
                            </div>
                            <form method="POST" action="/oeuvres">
                                <button name="artWorkId" value="<?= $listArtWork->id ?>">Supprimer</button></form>
                        </div>
                    <?php } ?>
                </div>
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
    <?php
} else {
    header('location: /accueil');
    exit;
}
?>