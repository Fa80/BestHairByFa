         <?php 
// inclue une fois le fichier header.php qui se trouve dans le dossier includes.  
require_once('../includes/header.php');  
//require_once('../includes/header.php');
require_once('../controllers/deleteCtrl.php');
?> 

<div class="container">
    <div class="row">
        <div class="col-sm-8 m-auto">
            <div class="card bg-light mt-5">
                <h1 class="card-title text-center text-black mt-3 py-4">SUPPRESSION DE COMPTE</h1>
               
                    <?php
                    if(isset($errors) && count($errors) != 0){
                        foreach ($errors as $error){
                            
                    ?>
                <div class="alert alert-danger">
                    <p><?= $error ;?></p>
                </div>
                        <?php
                        }
                            
                    }
               ?>
                        
                
                
                
                
     
                
     <?php     
   require_once('../includes/footer.php');     
      ?>