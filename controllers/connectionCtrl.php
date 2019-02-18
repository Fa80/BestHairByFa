<?php
// inclue une fois le fichier database.php qui est dans le dossier models.
require_once '../models/database.php';
require_once '../models/usersClass.php';


 if(isset($_POST['submit'])){
    $connect = new users();
    $email = $_POST['email'];
    $connect->email = $email;
      $selectResult = $connect->connectUser();
            $password = $_POST['password'];
            if(password_verify($password, $selectResult[0]->password)){
                $_SESSION['id'] = $selectResult[0]->id;
                $_SESSION['email'] = $selectResult[0]->email;
                header('Location: ../index.php');
                exit();
            }else{
                echo 'Mot de passe incorrect';
                }
            }
          

        
     





  
    
    
    
            
            
    // inclue une fois le fichier footer.php qui se trouve dans le dossier includes.     
require_once('../includes/footer.php');