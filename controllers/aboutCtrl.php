<?php

///Si on lance l'appel AJAX
if (isset($_POST['verifmail'])) {
    //on inclut le modèle car on n'appelle pas la page index.php
    include_once 'configuration.php';
    include_once 'class/database.php';
    include_once 'models/user.php';
    //On instancie l'objet user
    $user = new user();
    //on pass à l'attribut login ce que l'AJAX à mis en POST
    $user->mail = $_POST['verifmail'];
    //on stock le résultat. Soit 0 ou 1
    $result = $user->checkUser();
    //Avec le echo on passe à data dans l'appel AJAX le JSON
    echo json_encode(array('response' => $result));
} else { //On est dans un cas sans AJAX
}
//Instanciation de l'objet user
$user = new user();
if (isset($_GET['disconnect'])) {
    session_destroy();
    header('location: /accueil');
}

//Déclaration des variables
$isOk = 0;
//On vérifie que l'on a bien appuyé sur le bouton connexion
if (isset($_POST['co_mail']) AND isset($_POST['passwordUp'])) {
    //On stocke la valeur de $_POST['mail'] dans l'attribut mail de l'objet user en sécurisant (strip_tags)
    $user->mail = strip_tags($_POST['co_mail']);
    //On utilise notre méthode getHashByUser pour récupérer le hash stocké dans notre base
    $user->getHashByUser();
    //On vérifie que le mot de passe saisi et le mot de passe présent dans la base sont les mêmes grâce à password_verify
    $isOk = password_verify($_POST['passwordUp'], $user->pwd);
    if ($isOk) {
        $_SESSION['mail'] = $user->mail;
        $user->getUser();
        $_SESSION['lastName'] = $user->lastName;
        $_SESSION['firstName'] = $user->firstName;
        $_SESSION['id'] = $user->id;
        $_SESSION['connected'] = 1;
        $_SESSION['userId'] = $user->id;
        header('location: /accueil');
        exit();
    }
}
