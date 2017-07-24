<?php

$artWorks = new artWork();
$artWorkImg = new artWorkImg();
$artWorks->id_tp_users = $_SESSION['id'];


//On vérifie pour le supprimer
if (isset($_POST['artWorkId'])) {
    $artWorks->id = $_POST['artWorkId'];
    $artWorkImg->id_tp_artWorks = $artWorks->id;
    $artWorkImgLists = $artWorkImg->showImg();
    foreach ($artWorkImgLists as $artWorkImgList) {
        unlink($artWorkImgList->link);
    }
    $artWorks->deleteArtwork();
}
$listArtWorks = $artWorks->showArtWork();

