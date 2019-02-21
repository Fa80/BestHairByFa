<?php

session_start();

    if(isset($_SESSION['id'])){
        
        
    }else{
    
        header('Location: ../index.php');
        
         }

?>

<h1>Bienvenue,<?php echo $_SESSION['id']; ?></h1>