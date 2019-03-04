<?php
include'../models/database.php';
require'../models/users.php';
require '../models/role.php';
    
  // Si l'id du profil que l'on veut afficher est le même que celui de la session
if(isset($_SESSION['id'])){
 //On instancie l'objet user de la classe users.   
$role = new role();
//Le profil que l'on veut afficher est le profil demandé par rapport à la base de données
$id = $_SESSION['id'];
$role->id_users=$id;
$infoUser = $role->showRole();
// Methode permettant la suppression
if(isset($_GET['action']) && $_GET['action'] == 'delete'){
    $user = new users();
    $user->id=$id;
    $user->deleteUser();
    header('location: ../index.php');
}
// Methode permettant la destruction de la session.
if(isset($_GET['action']) && $_GET['action'] == 'deco'){
    session_destroy();
        header('location: ../index.php?ok ');
}
}