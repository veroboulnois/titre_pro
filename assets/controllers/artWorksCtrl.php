<?php
$artWorks = new artWork();
$artWorks->id_tp_users = $_SESSION['id'];
$listArtWorks = $artWorks->showArtWork();
        
