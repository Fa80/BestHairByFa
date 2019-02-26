<?php

include_once '../models/database.php';
require_once ('../models/users.php');

  // Si l'id du profil que l'on veut afficher est le même que celui de la session
if(isset($_SESSION['id'])){
 //On instancie l'objet user de la classe users.   
$user = new users();
//Le profil que l'on veut afficher est le profil demandé par rapport à la base de données
$id = $_SESSION['id'];
$user->id=$id;
$infoUser = $user->ShowUserProfil();

// Methode permettant la suppression
if(isset($_GET['action']) && $_GET['action'] == 'delete'){
    $user->deleteUser();
    header('location: ../index.php');
}
// Methode permettant la destruction de la session.
if(isset($_GET['action']) && $_GET['action'] == 'deco'){
    session_destroy();
        header('location: ../index.php?ok ');
}
}