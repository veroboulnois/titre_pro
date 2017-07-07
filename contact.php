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
        <!----------------------------modal formulaire contact------------------->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Accueil</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="menu"><a href="stoneSculpture.php">Sculpture Pierre</a></li>
                    <li class="menu"><a href="woodSculpture.php">Sculpture Bois</a></li>
                    <li class="menu"><a href="painting.php">Peinture</a></li>
                    <li class="menu"><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>       
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
</html>
