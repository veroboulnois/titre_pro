<?php

// j'instancie ma classe artWorkImg
$artWorkImg = new artWorkImg();

// Si $_FILES n'est pas vide
if (!empty($_FILES)) {





    // Je stocke le nom temporaire de la photo, le chemin du dossier du client et le nom de la photo dans des variables
    $tempFile = $_FILES['file']['tmp_name'];
    $targetPath = 'assets/usersFiles/' . $_POST['mail'] . '_' . $_POST['lastName'] . '/';
    $targetFile = $targetPath . $_FILES['file']['name'];
    $artWorkImg->link = $targetFile;
    // Je récupère le nom de l'image, l'id de l'utilisateur et l'id de l'oeuvre
    $artWorkImg->name = $_FILES['file']['name'];
    $artWorkImg->id_tp_users = $_SESSION['id'];
    $artWorkImg->id_tp_artWorks = $_GET['artworkId'];
    // Si la photo a bien été enregistrée dans la base
    if ($artWorkImg->addImg()) {
        // Je déplace la photo dans le dossier du client.
        move_uploaded_file($tempFile, $targetFile);
    }
}