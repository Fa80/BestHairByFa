<?php



$user='Fa80';
$password_definit='motDePasse';

if (isset ($_POST['submit'])){
   $username = $_POST['username'];
   $username = $_POST['password'];
   
   if ($username && $password){
       
   if(username == $user && $password_definit){
       
       $_SESSION['username']=$username;
       header('Location: admin.php');
       
   }else{
               echo 'Identifiants eronnés ';
   }
             
}else{
    
    echo 'veuillez remplir tous les champs ';
    }
}

?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Administration - Connexion</h1>
<form action="" method="POST">
    <label>Pseudo</label>
    <input type="text" name="username"/><br/>
    <label>Mot de Passe</label>
    <input type="text" name="password"/><br/>
    <button type="submit" name="submit"></button>
 </form>