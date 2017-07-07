<?php
$currentUser = new user();
$currentUser->mail = $_SESSION['mail'];
$userInfo = $currentUser->getUser();
$_SESSION['lastName'] = $currentUser->lastName;
$_SESSION['firstName'] = $currentUser->firstName;
$_SESSION['id_tp_userGroup'] = $currentUser->id_tp_userGroup;
