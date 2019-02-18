<?php

include_once '../models/database.php';
require_once ('../models/usersClass.php');

$user = new users();
$id = $_SESSION['id'];
$user->id=$id;
$infoUser = $user->ShowUserProfil();