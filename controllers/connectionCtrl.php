<?php
// inclue une fois le fichier database.php qui est dans le dossier models.
require'../models/database.php';
require'../models/users.php';

$mail = '';
$message = '';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$formError = array();
// Vérification de l'adresse mail.
 if(isset($_POST['submit'])){
     if (!empty($_POST['email'])){
       if (preg_match($regexMail, $_POST['email'])){
        $email = htmlspecialchars($_POST['email']);
     }else{ 
         $formError['email'] = 'La saisie de votre mail est invalide';
       }
     } else {
        $formError['email'] = 'Veuillez indiquer votre mail';
    }
     // Vérification du mot de passe.
      if (!empty($_POST['password'])){
          $password = $_POST['password'];
          } else {
        $formError['password'] = 'Veuillez entrer votre mot de passe';
    }
     // Si tout le formulaire est correct , nous envoyons les données vers la base de données et nous nous connectons au compte utilisateur.     
      if (count($formError) == 0){    
    $user = new users();
       $user->email = $email;
         $selectUser = $user->connectUser();
         //var_dump($selectUser);
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
       }