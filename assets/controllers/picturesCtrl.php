<?php
//j'instancie mes classes artWork et artWorkType
$artWork = new artWork();
$artWorkType = new artWorkType();

// On récupère les différents types d'oeuvres
$artWorkTypes = $artWorkType->showType();

// Si les champs sont remplis
if(isset($_POST['name']) && ($_POST['description'])){
    // On donne aux attributs de l'objet artWork les valeurs du champ
    $artWork->name = $_POST['name'];
    $artWork->description = $_POST['description'];
    $artWork->id_tp_artWorkType = $_POST['artWork_type'];
    $artWork->id_tp_users = $_SESSION['id'];
    // On récupère le dernier id inséré dans la table artWork pour s'en servir dans la redirection
    $lastInsertedId = $artWork->addArtWork();
    // On redirige vers la page addPictures avec le paramètre artworkId qui prend la valeur du lastInsertedId
    header('location: /addPictures.php?artworkId=' . $lastInsertedId . '');
    exit;
}
       