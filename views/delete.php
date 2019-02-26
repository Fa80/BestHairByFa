         <?php 
// inclue le fichier header.php qui se trouve dans le dossier includes.  
include'../views/headerV.php';  
require'../controllers/deleteCtrl.php';
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
   include'../views/footerV.php';     
      ?>