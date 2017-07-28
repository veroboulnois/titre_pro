<?php

//on instancie objet user
$user = new user();

//on initialise $errorMessage et $successMessage à chaîne vide
$errorMessage = '';
$successMessage = '';

//on vérifie si l'on a bien appuyé sur le bouton modifier
if (isset($_POST['newPwd'])) {
    // on vérifie si les $post newPwd et confirmPwd sont bien remplis et qu'ils sont bien identiques
    if ($_POST['editPwd'] == $_POST['confirmPwd']) {
        //si tout va bien on stocke l'attribut newPwd dans l'objet User
        $user->pwd = password_hash($_POST['editPwd'], PASSWORD_BCRYPT);
        $user->id = $_SESSION['userId'];
        $user->editPwd();
        $successMessage = 'Le mot de passe a bien été modifié';
    } else {
        $errorMessage = 'Les mots de passe ne sont pas identiques';
    }
}



