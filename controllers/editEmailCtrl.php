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
        //si la modification de l'email s'est bien déroulée
        if ($user->editMail()) {
            //on récupère les données de l'utilisateur
            $user->getUser();
            //on récupère le mail et le nom de l'utilisateur afin de créer le chemin vers son dossier
            $addUsersDir = $_SESSION['mail'] . '_' . $_SESSION['lastName'];
            //on recupère l'ancien chemin du dossier utilisateur
            $oldPath = 'assets/usersFiles/' . $addUsersDir;
            //on crée le nouveau chemin avec l'adresse email que l'on vient de modifier
            $newPath = 'assets/usersFiles/' . $user->mail . '_' . $_SESSION['lastName'];
            //on renomme le dossier de l'utilisateur avev le nouveau nom
            rename($oldPath, $newPath);
            $successMessage = 'L\'adresse mail a bien été modifiée';
            //on modifie l'adresse mail enregistrée dans la session par la nouvelle
            $_SESSION['mail'] = $user->mail;
        }
    } else {
        $errorMessage = 'Les adresses mail ne sont pas identiques';
    }
}



