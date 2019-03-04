<?php
session_start();
require '../controllers/profileCtrl.php';   
include'../views/headerV.php';
   ?>  
<div class="container">
    <div class="row text-align:center">
        <div class="col-sm-8 m-auto">
            <div class="card bg-light mt-5">
                <h1 class="card-title text-center text-black mt-3 py-4"></h1>         
                <?php
            if(isset($infoUser)){  
   ?>
                <p><?= $infoUser[0]->lastname; ?></p>
                <p><?=$infoUser[0]->firstname; ?></p>
                <p><?= $infoUser[0]->birthdate; ?></p>
                <p><?= $infoUser[0]->phone; ?></p>
                <p><?= $infoUser[0]->email; ?></p>
                <p><?= $infoUser[0]->right; ?></p>
            <?php
    }else{
     echo 'Merci de vous connecter pour avoir accès à votre profil';  
    }
   ?>  
                <div class="row text-align:center">
                    <div class="col-sm-8 m-auto">
                        <div class="card bg-light mt-5">
                            <h1 class="card-title text-center text-black mt-3 py-4">Mon PROFIL</h1>
                            <div>
                                <a href="update.php">Modifier</a>
                            </div>
                            <div>
                                <a href="profile.php?id=<?= $_SESSION['id'] ?>&action=delete">Supprimer</a>
                            </div>
                            <div>
                                <a href="../index.php">Se Deconnecter</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include'../views/footerV.php';