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
                <p class="text-center">Merci de bien renseigner tous les champs de saisie</p>
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
                            
                <div class="card-body bg-light m-auto py-2">
                    <form action="connection.php" method="post" class="form">
                        <label for="lastname">Nom</label>
                        <input class="form-control" type="text" id="lastname" name="lastname" placeholder="Votre nom" >
                       
                        <label for="firstname">Prénom</label>
                        <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Votre Prenom">
                       
                        <label for="birthdate">Date de naissance</label>
                       <input class="form-control" type="date" name="birthdate" id="birthdate">
                       
                        <label for="phone">Téléphone</label>
                        <input class="form-control" type="text" name="phone" id="phone" placeholder="Votre numero de téléphone">
                        
                        <label for="emailAddUser">Mail</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Votre mail" id="mail">
                       
                        <label for="Mot de passe">Mot de passe</label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Votre mot de passe">
                        
                        <div class="mb-5 mt-5">
                            <button class="btn btn-secondary col-5 mr-3" type="submit" name="submit"  id="submit">Supprimer</button>
                            <a href="javascript:history.go(-1)" class="btn btn-secondary col-5 ml-3">Retour</a>
                        </div>
                    </form>
                </div>
           
                
                
                
                
     
                
     <?php     
   require_once('../includes/footer.php');     
      ?>