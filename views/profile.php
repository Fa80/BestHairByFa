<?php

require_once('../includes/header.php');

require_once '../controllers/profileCtrl.php';

echo $user->lastname;
echo $user->firstname;
echo $user->birthdate;
echo $user->phone;
echo $user->email;
?>

<a href="update.php">Modification Profil</a>