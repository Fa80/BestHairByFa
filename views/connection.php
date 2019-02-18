         <?php 
// inclue une fois le fichier header.php qui se trouve dans le dossier includes.     
include('../includes/header.php');
require_once('../controllers/connectionCtrl.php');
?> 
    
<div class="container">
    <div class="row">
        <div class="col-sm-8 m-auto">
            <div class="card bg-light mt-5">
                <h1 class="card-title text-center text-black mt-3 py-4">JE SUIS DEJA INSCRIT</h1>
                    
                    <?php
                    if(isset($errors) && count($errors) != 0){
                        foreach ($errors as $error){
                            
                    ?>
                <div class="alert alert-danger">
                    <p><?= $error ;?></p>
                </div>
                        <?php }
                            
                        } ?>  
                <div class="card-body bg-light m-auto py-2">
                    <form action="connection.php" method="post" class="form">
                        
                        <label for="Adresse email">Adresse email :</label>
                        <p><input class="form-control" type="email" name="email" placeholder="Votre email" id="email"></p>
                        <label for="Mot de passe">Mot de passe :</label>
                        <p><input class="form-control" type="password" name="password" placeholder="Votre mot de passe" id="password"></p>
                        <div class="mb-5 mt-5">
                            <div class="mb-5 mt-5">
                                <button class="btn btn-secondary col-5 mr-3" type="submit" name="submit"  id="submit">Valider</button>
                                <a href="javascript:history.go(-1)" class="btn btn-secondary col-5 ml-3">Retour</a>
                            </div>
                    </form>
                </div>
                <a href="viewschangeUserPassword.php" class="">* J'ai oublié mon mot de passe</a>
            </div>
          </div>      
        </div>
    </div>
   </div>
        

   
     <?php     
   require_once('../includes/footer.php');     
       ?>  