         <?php 
// inclue le fichier header.php qui se trouve dans le dossier includes.  
include'../views/headerV.php';  
require'../controllers/updateCtrl.php';
?> 
<div class="container">
    <div class="row">
        <div class="col-sm-8 m-auto">
            <div class="card bg-light mt-5">
                <h1 class="card-title text-center text-black mt-3 py-4">MISE A JOUR</h1>
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
                    <form action="update.php" method="post" class="form">
                        <label for="lastname">Nom</label>
                        <input class="form-control" type="text" id="lastname" name="lastname" value="<?= $updateUser->lastname; ?>" >
                        <label for="firstname">Prénom</label>
                        <input class="form-control" type="text" name="firstname" id="firstname" value="<?= $updateUser->firstname; ?>">
                        <label for="birthdate">Date de naissance</label>
                        <input class="form-control" type="date" name="birthdate" id="birthdate" value="<?= $updateUser->birthdate; ?>">
                        <label for="phone">Téléphone</label>
                        <input class="form-control" type="text" name="phone" id="phone" value="<?= $updateUser->phone; ?>">
                        <label for="emailAddUser">Mail</label>
                        <input class="form-control" type="email" name="email" id="email" value="<?= $updateUser->email; ?>">
                        <div class="mb-5 mt-5">
                            <button class="btn btn-secondary col-5 mr-3" type="submit" name="submit"  id="submit">Modifier</button>
                            <a href="javascript:history.go(-1)" class="btn btn-secondary col-5 ml-3">Retour</a>
                        </div>
                    </form>
                </div>
                    
     <?php     
   include'../views/footerV.php';     
      ?>