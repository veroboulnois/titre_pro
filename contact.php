<?php
session_start();
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

                        <p><label for="nom">Nom *</label> : <input type="text" name="nom" placeholder="Entrez votre nom" required/></p>

                        <p><label for="prenom">Prénom *</label> : <input type="text" name="prenom" placeholder="Entrez votre prénom"required/> </p>

                        <p><label for="mail">Email *</label> : <input type="mail" name="mail" placeholder="Entrez une adresse valide"required/></p>

                        <p><em><label for="Message">Votre message</label><br /><textarea name="message" id="message" required></textarea></em></p>

                        <input type="submit" value="Envoyer" /></form>
                </div>
            </div> 
    </body>
    <footer>
        <!-- Copyright and social media section -->
        <section class="copyright-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="logo">
                            <!-- Replace Your logo and remove text  -->
                            <!-- <img src="images/logo.png" class="img-responsive center-block"> -->
                            <h2 class="demo-logo">ART'S<strong>BO</strong>OK</h2>
                        </div>
                        <div class="copyright">
                            <p>Copyright &copy; 2017. Véronique Boulnois.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--  End of copyright and social media section -->
    </footer> <!--  End of footer -->
</html>

