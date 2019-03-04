<?php
// inclue une fois le fichier database.php qui est dans le dossier models.
require'../models/database.php';
require'../models/users.php';

$regexMail = '#^[\w._-]+@[A-z0-9.-]+.[a-zA-Z]{2,4}$#';
$errors = [];
$user = new users();
 if(isset($_POST['submit'])){      
     if (!empty($_POST['email'])){
       if (preg_match($regexMail, $_POST['email'])){
        $user->email = htmlspecialchars($_POST['email']);
     }else{       
         $errors['email'] = 'La saisie de votre mail est invalide';
       }      
     } else {
        $errors['email'] = 'Veuillez indiquer votre mail';            
    }      
     // Vérification du mot de passe.
      if (!empty($_POST['password'])){
          $password = $_POST['password'];      
          } else {
        $errors['password'] = 'Veuillez entrer votre mot de passe';
    }
 }
     // Si tout le formulaire est correct , nous envoyons les données vers la base de données et nous nous connectons au compte utilisateur.     
      if (isset($_POST['submit']) && count($errors) == 0){    
         $selectUser = $user->connectUser();
               if(password_verify($password, $selectUser->password)){
                $_SESSION['id'] = $selectUser->id;
                $_SESSION['email'] = $selectUser->email;
                 header('Location: ../views/profile.php');
              exit();
            }else{
                echo 'La connexion a échoué';
                }
            }else{
                echo 'Bienvenue sur le site de Best Hair!';
    }