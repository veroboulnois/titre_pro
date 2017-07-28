<?php
session_start();
include_once 'configuration.php';
include_once 'class/database.php';
include_once 'models/user.php';
include_once 'models/artWork.php';
include_once 'models/artWorkImg.php';
include_once 'models/artWorkType.php';
include_once 'controllers/woodSculptureCtrl.php';
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
        <title>Sculpture Pierre</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container-fluid">

            <?php
            foreach ($allListArtWorks as $val => $allListArtWork) {
                if ($val % 2 == 0) {
                    ?>
            <div class="container"
               
                    <div class="row artwork">
    <?php } ?>
                    <div class="grid">
                        <figure class="effect-terry">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <img src="<?= $allListArtWork->link ?>"/>
                            <figcaption>
                                <h2><span><?= $allListArtWork->name ?></span> <?= $allListArtWork->description ?></h2>
                                <p>
                                    <a href="#"><i class="fa fa-fw fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-fw fa-share"></i></a>
                                    <a href="#"><i class="fa fa-fw fa-tags"></i></a>
                                </p>
                            </figcaption> 
                        </figure>
                    </div>
                <?php if ($val % 2 == 1) { ?>
                    </div>
        </div>
                    <?php
                }
            }
            ?>
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
