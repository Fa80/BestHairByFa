<?php

         
// inclue une fois le fichier header.php qui se trouve dans le dossier includes.     
require_once('../includes/header.php');

// inclue une fois le fichier database.php qui est dans le dossier models.
// inclue une fois le fichier UserClass.php qui est dans le dossier models.
require_once  ('../models/database.php');
require_once ('../models/usersClass.php');

//// regex pour les textes
//$regexText = '/^[A-Za-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ° \'\-]+$/';
//// regex pour le téléphone
//$regexPhone = '/^(\d){10}/';


// Instenciation de l'objet user
$user = new users();
    if (COUNT( $_POST) > 0){
                      
        $lastname = htmlspecialchars($_POST['lastname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $birthdate = htmlspecialchars($_POST['birthdate']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);  //hachage du password.
        
        if(preg_match('#^[a-z]+$#i', $lastname) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $user->lastname = $lastname;    // l'attribut lastename de l'objet user est égale à $lastname.
            $user->firstname = $firstname;
            $user->birthdate = $birthdate;
            $user->phone = $phone;
            $user->email= $email;
            $user->password= $password;
                if ($user->addUser()){
                //Si la methode addUser  est verifiée dans la classe users alors affiche  le message 'L'utilisateur a bien été ajouté...'
                header('Location: connection.php');
                }       
             }else{
               // Si non affiche le message 'Veuillez vérifier votre saisie' 
            echo 'Veuillez vérifier votre saisie';
        }
             
            
    }
    

