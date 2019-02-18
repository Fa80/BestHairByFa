<?php
try
{

class Database {
    public $db;
    
    public function __construct(){
        $this->db = new PDO('mysql:dbname=bestHair;host=localhost', 'fa', 'Magatte2012', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);        
    }
  }
        // On teste les erreurs avec le try/catch, si tout est bon, on est connecté à la base de données
}
catch (Exception $e)
  {
        die('Erreur : ' . $e->getMessage());       // Autrement, un message d'erreur est affiché
}
?>




