<?php

$workArt = new artWork();
$workArt->id_tp_users = $_SESSION['id'];
$sorts = $workArt->showArtWork();
