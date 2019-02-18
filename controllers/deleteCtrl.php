<?php
         
// inclue une fois le fichier database.php qui est dans le dossier models.
// inclue une fois le fichier UserClass.php qui est dans le dossier models.
require_once  ('../models/database.php');
require_once ('../models/usersClass.php');


//// regex pour les textes
//$regexText = '/^[A-Za-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ° \'\-]+$/';
//// regex pour le téléphone
//$regexPhone = '/^(\d){10}/';
    
        
        
        // Suppression des données de l'utilisateur
if (isset($_GET['delete'])) {
    $deleteUser = new users();
    $deleteUser->id = $_SESSION['id'];
    if ($deleteUser->removeUser()) {
        session_unset();
        session_destroy();
        header('Location: index.php');
        $message = 'Votre compte a bien été supprimé';
        exit;
    } else {
        $message = 'erreur';
    }
}
        
        
        
        
        
        
        
 