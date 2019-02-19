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
    
<div class="container">
    <div class="row text-align:center">
        <div class="col-sm-8 m-auto">
            <div class="card bg-light mt-5">
                <h1 class="card-title text-center text-black mt-3 py-4">MODIFICATION DE PROFIL</h1>
                <div>
                   <a href="update.php">Modifier</a>
                </div>
                <div>
                    <a href="profile.php?id=<?= $_SESSION['id'] ?>&action=delete">Supprimmer</a>
                </div>
                <div>
                    <a href="profile.php?action=deco">Se Deconnecter</a> 
                </div>
            </div>
        </div>
    </div>
</div>