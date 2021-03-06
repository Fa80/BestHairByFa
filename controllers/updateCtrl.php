<?php
         
// inclue une fois le fichier database.php qui est dans le dossier models.
// inclue une fois le fichier UserClass.php qui est dans le dossier models.
require'../models/database.php';
require'../models/users.php';

// Instenciation de l'objet user
$updateUser = new users();
$id = $_SESSION['id'];
$updateUser->id=$id;
$infoUser = $updateUser->ShowUserProfil();
    if (COUNT( $_POST) > 0){
      // On vérifie avec la condition si $_POST comporte plus de 0 données alors on exécute le contenu du if.                
        $lastname = htmlspecialchars($_POST['lastname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $birthdate = htmlspecialchars($_POST['birthdate']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
              // Verification du nom selon la regex et filtrage de l'email.
        if(preg_match('#^[a-z]+$#i', $lastname) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $updateUser->lastname = $lastname;    
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


