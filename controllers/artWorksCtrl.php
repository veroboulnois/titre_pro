<?php
//instanciation de l'objet artWork et de l'objet artWorkImg
$artWorks = new artWork();
$artWorkImg = new artWorkImg();
//je donne une valeur à l'attribut id_tp_users qui reprend l'id de la personne connectée
$artWorks->id_tp_users = $_SESSION['id'];

//On récupère l'id de l'oeuvre à supprimer 
if (isset($_POST['artWorkId'])) {
    //je donne une valeur à l'attribut id de mon objet artWork
    $artWorks->id = $_POST['artWorkId'];
    //je donne une valeur à l'attribut id_tp_artWorks de mon objet artWorkImg
    $artWorkImg->id_tp_artWorks = $artWorks->id;
    //la variable artWorkImgLists reprend ce qui est retourné par méthode showImg
    $artWorkImgLists = $artWorkImg->showImg();
    //boucle qui sert qui a supprimer toutes les images liées à l'oeuvre dans les dossiers
    foreach ($artWorkImgLists as $artWorkImgList) {
        //fonction php qui supprime les fichiers
        unlink($artWorkImgList->link);
    }//supprime l'oeuvre dans la base de données
    $artWorks->deleteArtwork();
}
//affiche la liste des oeuvres
$listArtWorks = $artWorks->showArtWork();

