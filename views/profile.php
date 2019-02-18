<?php

require_once('../includes/header.php');

require_once '../controllers/profileCtrl.php';

if(isset($_GET['id'])){
    
echo $user->lastname;
echo $user->firstname;
echo $user->birthdate;
echo $user->phone;
echo $user->email;
}

?>
<div>
<a href="update.php">Modification Profil</a>
</div>
<div>
  <a href="profile.php?id=<?= $_SESSION['id'] ?>&action=delete">Suppression de profil</a> 
  <a href="profile.php?action=deco">Deco</a> 
</div>