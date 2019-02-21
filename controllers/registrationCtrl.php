<?php
         
// inclue une fois le fichier header.php qui se trouve dans le dossier includes.     
include'../includes/header_1.php';

// inclue une fois le fichier database.php qui est dans le dossier models.
// inclue une fois le fichier UserClass.php qui est dans le dossier models.
require'../models/database.php';
require'../models/users.php';

//// Regex permettant la sécurisation du code.
//$regexText = '/^[A-Za-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ° \'\-]+$/';
//$regexPhone = '/^(\d){10}/';
//$regexDate = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}/';
//$regexLogin = '/^[a-zA-Z0-9_\- @éèàùëïôê]{6,20}/';
//$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
//$formError = array();
//
////
//// On instancie l'objet user dans la classe users.
//$user = new users();
//     // on vérifie avec la condition.........
//    if (COUNT( $_POST) > 0){
//           // on initialise les variable et on sécurise par htmlspecialchars             
//        $lastname = htmlspecialchars($_POST['lastname']);
//        $firstname = htmlspecialchars($_POST['firstname']);
//        $birthdate = htmlspecialchars($_POST['birthdate']);
//        $phone = htmlspecialchars($_POST['phone']);
//        $email = htmlspecialchars($_POST['email']);
//        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);  //hachage du password.
//        
//        
//        if(preg_match($regexText, $lastname) && filter_var($email, FILTER_VALIDATE_EMAIL)){
//            $user->lastname = $lastname; 
//          $user->firstname = $firstname;
//    $user->birthdate = $birthdate;
//            $user->phone = $phone;
//                   $user->email= $email;
//        $user->password= $password;
//                 if ($user->addUser()){
//                       //Si la methode addUser  est verifiée dans la classe users alors affiche le message 'L'utilisateur a bien été ajouté...'
//               header('Location: connection.php');
//                }       
//             }else{
//               // Si non affiche le message 'Veuillez vérifier votre saisie' 
//            echo 'Veuillez remplir tous les champs';
//                        }
//                    
//         }        

                        
                 







                        
                        
                        // Regex permettant la sécurisation du code.
$regexText = '/^[A-Za-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ° \'\-]+$/';
$regexPhone = '/^(\d){10}/';
$regexDate = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}/';
$regexLogin = '/^[a-zA-Z0-9_\- @éèàùëïôê]{6,20}/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$formError = array();


// On instancie l'objet user dans la classe users.
$user = new users();
     // on vérifie avec la condition.........
    if (COUNT( $_POST) > 0){
           // on initialise les variable et on sécurise par htmlspecialchars             
        $lastname = htmlspecialchars($_POST['lastname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $birthdate = htmlspecialchars($_POST['birthdate']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);  //hachage du password.
        
        
         // Vérification du nom selon la regex
        if (!empty($_POST['lastname'])){
            if(preg_match($regexText, $lastname) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $user->lastname = $lastname; 
                } else {
                  $formError['lastname'] = 'La saisie de votre nom est invalide';
                }
            } else {
        $formError['lastname'] = 'Veuillez indiquer votre nom';
    }
            
    
    
            // Vérification du prénom selon la regex
    if (!empty($_POST['firstname'])){
        if(preg_match($regexText, $firstname)){    
            $user->firstname = $firstname;
          } else {
          $formError['firstname'] = 'La saisie de votre prénom est invalide';
      }
      } else {
        $formError['firstname'] = 'Veuillez indiquer votre prénom';
    }        
      
     
      
            // Vérification de la date selon la regex
       if(preg_match($regexDate, $birthdate)){
            $user->birthdate = $birthdate;
              } else {
           $formError['birthdate'] = 'La saisie de votre Date de naissance est invalide';
       }          
             // Vérification du numéro de téléphone selon la regex
            if(preg_match($regexPhone, $phone)){
            $user->phone = $phone;
           } else {
           $formError['phone'] = 'La saisie de votre numéro de téléphone est invalide';
       }
   
            // email déja filtré
            $user->email= $email;

            
            // Vérification du mot de passe 
            if (!empty($_POST['password'])){
                        $user->password= password_hash($_POST['password'], PASSWORD_DEFAULT);;
             //si les champs sont vides ou s'il ne sont pas identiques affichage d'un message d'erreur 
            } else {
        $formError['password'] = 'Veuillez vérifier votre mot de passe';
   }
 
                //Si la methode addUser  est verifiée dans la classe users alors affiche le message 'L'utilisateur a bien été ajouté...'
                if ($user->addUser()){
                // Alors on se dirrige vers la page connection.php
                header('Location: connection.php');
                }       
             }else{
               // Si non affiche le message 'Veuillez vérifier votre saisie' 
            echo 'Veuillez remplir tous les champs';
                       
             }                 
                
