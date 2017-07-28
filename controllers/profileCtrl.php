<?php

//Si on lance l'appel AJAX
if (isset($_POST['verifmail'])) {
    //on inclut le modèle car on n'appelle pas la page index.php
    include_once 'models/user.php';
    //On instancie la classe user
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
    header('location:/accueil');
}
$regexName = '/(?=^.{3,20}$)^[a-zA-Z][a-zA-Z0-9]*[._-]?[a-zA-Z0-9]+$/';
$regexMail = '/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/';
$errorList = array();
$message = '';
//On vérifie si l'on a bien appuyé sur le bouton Enregistrer
if (isset($_POST['save'])) {


    if (!empty($_POST['lastName']) && !empty($_POST['pwd']) && !empty($_POST['firstName']) && !empty($_POST['mail']) && !empty($_POST['confirmPassword']) && !empty($_POST['pwd'])) {
        $user->firstName = strip_tags($_POST['firstName']);
        if (!preg_match($regexName, $user->firstName)) {
            $errorList['firstName'] = 'le prénom renseigné est incorrect';
        }
// On stocke sa valeur dans l'attribut lastName de l'objet user en sécurisant (strip_tags)
        $user->lastName = strip_tags($_POST['lastName']);
        if (!preg_match($regexName, $user->lastName)) {
            $errorList['lastName'] = 'le nom renseigné est incorrect';
        }
        $user->pwd = strip_tags($_POST['pwd']);
        $user->mail = strip_tags($_POST['mail']);
        if (!preg_match($regexMail, $user->mail)) {
            $errorList['mail'] = 'le nom renseigné est incorrect';
        } else {
            $errorList['mail'] = 'Veuillez remplir le champ';
        }
        // On vérifie avec la méthode checkUser que le lastName n'existe pas
        // S'il existe, on passe $errorList à true (nous permet d'afficher notre message d'erreur dans la vue)
        if ($user->checkUser() == 0) {
            $errorList = false;
        } else {
            // Si $_POST est vide, on passe $errorList à true (nous permet d'afficher notre message d'erreur dans la vue)
            $errorList['checkUser'] = true;
        }
        //On vérifie si les $_POST password et confirmPassword sont bien remplis et qu'ils sont bien identiques
        if ($_POST['pwd'] == $_POST['confirmPassword']) {
            //Si tout va bien, on stocke dans l'attribut password de l'objet user, la version chiffrée du mot de passe
            //On chiffre le mot de passe avec la fonction password_hash qui prend en paramètre le mot de passe envoyée et la méthode de chiffrement (cf PHP.net)
            $user->pwd = password_hash($_POST['pwd'], PASSWORD_BCRYPT);
        } else {
            //Si un des $_POST est vide ou que les mots de passes ne sont pas identiques, on passe $errorList à true (nous permet d'afficher notre message d'erreur dans la vue)
            $errorList['pwd'] = true;
        }
        //S'il n'y a pas d'erreur, on ajoute l'utilisateur
        if (empty($errorList)) {
            $user->addUser();
        }
    }
}

//Déclaration des variables
$isOk = 0;
//Instanciation de l'objet user
//$user = new user();
//On vérifie que l'on a bien appuyé sur le bouton connexion
if (isset($_POST['co_mail']) AND isset($_POST['passwordUp'])) {
    //On stocke la valeur de $_POST['mail'] dans l'attribut mail de l'objet user en sécurisant (strip_tags)
    $user->mail = strip_tags($_POST['co_mail']);
    //On utilise notre méthode getHashByUser pour récupérer le hash stocké dans notre base
    $user->getHashByUser();
    //On vérifie que le mot de passe saisi et le mot de passe présent dans la base sont les même grâce ) password_verify
    $isOk = password_verify($_POST['passwordUp'], $user->pwd);
    if ($isOk) {
        $_SESSION['mail'] = $user->mail;
        $user->getUser();
        $_SESSION['lastName'] = $user->lastName;
        $_SESSION['id'] = $user->id;
        header('location: /accueil');
        exit();
    }
}
$artType = new artWorkType();
$types = $artType->showType();
$artWork = new artWork();
if (isset($_POST ['artWork_type'])AND isset($_POST['artWork_name'])AND isset($_POST['artWork_description'])) {
    $artWork->name = strip_tags($_POST['artWork_name']);
    $artWork->id_tp_artWorkType = strip_tags($_POST ['artWork_type']);
    $artWork->description = strip_tags($_POST ['artWork_description']);
    $artWork->id_tp_users = $_SESSION['id'];
    $artWork->addArtWork();
}
    
