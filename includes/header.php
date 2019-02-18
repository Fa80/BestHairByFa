<?php
// Demarrage de la session
session_start();
?>
<!Doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>  
    
    <!--      Début nav 1           -->
    <header id="up">
        <div class="row bg-dark">
            <!-- Just an image -->
            <img src="assets/img/logo-hair.png" class="img-responsive" id="logoImg" alt="logo">
                
            <form class="form-inline m-auto">
                <input class="form-control mr-sm-2" type="search" size="20" placeholder="Que cherchez-vous?...">
                <button class="btn btn-outline-white my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
            <!--        Panier            -->
<!-- <button type="button" class="btn" data-toggle="modal" data-target="#modal" id="panierVide"><img src="assets/img/panier.png"></button>-->
        </div> 
                     <!-- Debut sidenav --> 
        <div class="row bg-dark">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#home.php">Home</a>
                <a href="#allCategories.php">All Categories</a>
                <a href="#bundles.php">Bundles</a>
                <?php if(isset($_SESSION['id'])){ ?>
                <a href="#bundleswithclosure.php">Bundels With Closure</a>
                <a href="#bundleswithfrontal.php">Bundels With Fontal</a>
                <a href="#blondeandombrahair.php">Blonde and Ombre Hair</a>
                <a href="#closure4.php">Closure 4*4</a>
                <a href="#closure13.php">Closure 13*4</a>
                <a href="#360lacefrontal.php">360 Frontal Closure</a>
                <a href="#lacewig.php">Lace Wig</a>
                <?php
                }else{
                    echo 'Veuillez réessayer !';
                }
                ?>
            </div>
                
       
            <span id="menu-burger" style="color: white;" onclick="openNav()">&#9776; </span>

            <div>
                <?php
                if(isset($_SESSION['id'])){
                    ?>
                <a href="views/profile.php">Profil</a>
                <?php
                }else{
                    ?>
                <a href="views/registration.php">Inscription</a>
             <a href="views/connection.php">Connexion</a>
             <?php
                }
                ?>
            </div>   

    </header> 

    <!--Fin sidenav-->
