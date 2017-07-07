<?php
session_start();
include_once 'assets/models/user.php';
include_once 'assets/controllers/pierreCtrl.php';
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
        <title>Accueil</title>
    </head>
    <body>
        <p><?= $_SESSION['lastName']?></p>
        <p><?= $_SESSION['firstName']?></p>
        <p><?= $_SESSION['mail']?></p>
        <p><?= $_SESSION['id_tp_userGroup']?></p>
        
    </body>
</html>



