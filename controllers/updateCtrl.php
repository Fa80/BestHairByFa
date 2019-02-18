<?php
         
// inclue une fois le fichier database.php qui est dans le dossier models.
// inclue une fois le fichier UserClass.php qui est dans le dossier models.
require_once  ('../models/database.php');
require_once ('../models/usersClass.php');


//// regex pour les textes
//$regexText = '/^[A-Za-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ° \'\-]+$/';
//// regex pour le téléphone
//$regexPhone = '/^(\d){10}/';


// Instenciation de l'objet user
$updateUser = new users();
$id = (int)$_SESSION['id'];
$updateUser->id=$id;
$infoUser = $updateUser->ShowUserProfil();
    if (COUNT( $_POST) > 0){
                      
        $lastname = htmlspecialchars($_POST['lastname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $birthdate = htmlspecialchars($_POST['birthdate']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
              
        if(preg_match('#^[a-z]+$#i', $lastname) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $updateUser->lastname = $lastname;    // l'attribut lastename de l'objet user est égale à $lastname.
            $updateUser->firstname = $firstname;
            $updateUser->birthdate = $birthdate;
            $updateUser->phone = $phone;
            $updateUser->email= $email;
                if ($updateUser->updateUsers()){
                //Si la methode updateUsers  est verifiée alors affiche  le message 'L'utilisateur a bien été ajouté...'
                header('Location: profile.php');
                }       
             }
    }


