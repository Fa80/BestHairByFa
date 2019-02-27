
<!Doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
        <link href="../assets/css/style.css" rel="stylesheet">
    </head>  
    <!-- Debut navbar --> 
        <nav class="navbar navbar-expand-lg navbar-light bg-dark p-3">
        <a class="navbar-brand img-responsive" id="m1" href="produit.php"><img src="../assets/img/logo-hair.png" alt="" height="100px" width="120px"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline w-50 justify-content-center  mt-5">
                <input class="form-control mr-sm-2 mx-auto" type="search" size="20" placeholder="Que cherchez-vous?...">
                <button class="btn btn-outline-white" type="submit">Rechercher</button>
        </form>
        <div class="collapse navbar-collapse justify-content-end m2" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link mr-5 text-white" href="../views/produit.">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-5 text-white" href="../views/contact">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" style="color: white;" aria-expanded="false">Mon Compte</a>
                    <div class="dropdown-menu">
<!--                     <a class="dropdown-item"  href="../views/registration.php">Inscription</a>
                           <a class="dropdown-item" href="../views/connection.php">Connexion</a>-->
                    <?php
                        if(isset($_SESSION)){
                            ?>
<!--                        <a class="dropdown-item" href="../views/profile.php">Profil Client</a>-->
                        <a class="dropdown-item" href="../index.php">Déconnection</a>
                <?php
                        }
                            ?>
                </li>
                <li>
                    <a class="img-responsive ml-5 mr-5" href="../views/panier"><img src="../assets/img/panier1.png" height="40px" width="40px"></a>
                </li>
            </ul>
        </div>
    </nav>
    </header> 
<!--Fin sidenav-->