         <?php 

/** extends permet l'heritage entre 2 classes.
 * Donc  users hérite de Database ce qui permet d'utiliser son constructeur et donc d'établir la connection à la base de données
 */
class users extends Database{
    public $id;
    public $lastname;
    public $firstname;
    public $birthdate;
    public $phone;
    public $email;
    public $password;
    
     /**
     * Methode magique __construct
     */
    public function __construct() {
        parent::__construct();
    }
    /**
     * 
     * @return boolean
     */
               public function addUser(){
               // requête permettant d'inserrer les valeurs de l'enregistrement.
        $query = 'INSERT INTO `users`(`lastname`, `firstname`, `birthdate`, `phone`, `email`, `password`) VALUES (:lastname, :firstname, :birthdate, :phone, :email, :password)';
        // On prépare la requête.
        $addUser = $this->db->prepare($query);
        // On attribue les valeurs via bindValue et on recupère les attributs de la classe via $this
        $addUser->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $addUser->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $addUser->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $addUser->bindValue(':phone', $this->phone, PDO::PARAM_INT);
        $addUser->bindValue(':email', $this->email, PDO::PARAM_STR);
        $addUser->bindValue(':password', $this->password, PDO::PARAM_STR);
        // On utilise la methode execute(), et on lui demande un retourn true.
        if ($addUser->execute()){
            return true;
        }   
    }
    
    
    
    /**
     * 
     * @return type
     */
    public function connectUser(){
         $query = 'SELECT * FROM `users` WHERE `email` = :email';
        $result = $this->db->prepare($query);
        $result->bindValue(':email', $this->email, PDO::PARAM_STR);
          if ($result->execute()){
            $selectResult = $result->fetchAll(PDO::FETCH_OBJ);
                   return $selectResult;
        }
      
    }
    
  /**
   * 
   * @return boolean
   */
    public function updateUsers(){
        $query = 'UPDATE `users` SET `lastname` = :lastname, `firstname` = :firstname, `birthdate` = :birthdate, `phone` = :phone, `email` = :email WHERE `id` = :id';
        $result = $this->db->prepare($query);
        $result->bindValue(':id', $this->id, PDO::PARAM_INT);
        $result->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $result->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $result->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $result->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $result->bindValue(':email', $this->email, PDO::PARAM_STR);
            if ($result->execute()){
                 return true;
        }
    }
    /**
     * 
     * @return type
     */
    
    public function deleteUser(){
        $query = 'DELETE FROM `users` WHERE `id` = :id';
        $result = $this->db->prepare($query);
        $result->bindValue(':id', $this->id, PDO::PARAM_INT);
        if($result->execute()){
        return true ;
    }
    }
    
    /**
     * 
     * @return type
     */
    public function ShowUserProfil(){
         $query = 'SELECT * FROM `users` WHERE `id` = :id';
        $result = $this->db->prepare($query);
        $result->bindValue(':id', $this->id, PDO::PARAM_STR);
          if ($result->execute()){
            $selectResult = $result->fetchAll(PDO::FETCH_OBJ);
                return $selectResult;
        }
      
    }
  }
  
  
  
  
  
