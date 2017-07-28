<?php

//on instancie objet user
$user = new user();

//on initialise $errorMessage et $successMessage à chaîne vide
$errorMessage = '';
$successMessage = '';

//on vérifie si l'on a bien appuyé sur le bouton modifier
if (isset($_POST['newMail'])) {
    // on vérifie si les $post editMail et confirmMail sont bien remplis et qu'ils sont bien identiques
    if ($_POST['editMail'] == $_POST['confirmMail']) {
        //si tout va bien on stocke l'attribut editMail dans l'objet User
        $user->mail = strip_tags($_POST['editMail']);
        $user->id = $_SESSION['userId'];
        $user->editMail();
        $successMessage = 'L\'adresse mail a bien été modifiée';
    } else {
        $errorMessage = 'Les adresses mail ne sont pas identiques';
    }
}



