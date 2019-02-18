<?php

include_once '../models/database.php';
require_once ('../models/usersClass.php');

if(isset($_SESSION['id'])){
$user = new users();
$id = $_SESSION['id'];
$user->id=$id;
$infoUser = $user->ShowUserProfil();

if(isset($_GET['action']) && $_GET['action'] == 'delete'){
    $user->deleteUser();
    header('location: ../index.php');
}

if(isset($_GET['action']) && $_GET['action'] == 'deco'){
    session_destroy();
        header('location: ../index.php?ok ');
}
}