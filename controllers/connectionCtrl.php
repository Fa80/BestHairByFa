<?php
// inclue une fois le fichier database.php qui est dans le dossier models.
require_once '../models/database.php';
require_once '../models/users.php';


 if(isset($_POST['submit'])){
    $connect = new users();
    $email = $_POST['email'];
    $connect->email = $email;
      $selectResult = $connect->connectUser();
            $password = $_POST['password'];
            if(password_verify($password, $selectResult[0]->password)){
                $_SESSION['id'] = $selectResult[0]->id;
                $_SESSION['email'] = $selectResult[0]->email;
//                $_SESSION['lastname'] = $selectResult[0]->lastname;
//                $_SESSION['firstname'] = $selectResult[0]->firstname;
//                $_SESSION['birthdate'] = $selectResult[0]->birthdate;
//                $_SESSION['phone'] = $selectResult[0]->phone;
                 header('Location: ../index.php');
                exit();
            }else{
                echo 'Mot de passe incorrect';
                }
            }
          

    
            
            
    // inclue une fois le fichier footer.php qui se trouve dans le dossier includes.     
require_once('../includes/footer.php');