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
        <div class="container" id="contact">
            <div class="col-md-5">
                <div class="form-area">  
                    <form role="form">
                        <br style="clear:both">
                        <h3 style="margin-bottom: 25px; text-align: center;">Contact</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Téléphone" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>                    
                        </div>

                        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Envoyer</button>
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

