         <?php 
/** extends permet l'heritage entre 2 classes.
 * Donc  products hérite de Database ce qui permet d'utiliser son constructeur et donc d'établir la connection à la base de données
 */
class role extends Database{
    public $id;
    public $right;
    public $id_users; 
    
     //Methode magique __construct
    public function __construct() {
        parent::__construct();
    }
  /**
   * 
   * @return stdClass
   */
               public function showRole(){
               // requête permettant d'inserrer les valeurs de l'enregistrement.
        $query = 'SELECT `users`.`lastname`, `users`.`firstname`, `users`.`birthdate`, `users`.`phone`, `users`.`email`, `users`.`password`,`role`.`right` FROM `users` INNER JOIN `role` ON `role`.`id_users` = `users`.`id` WHERE `users`.`id` =  :id_users';
        $showInfo = $this->db->prepare($query);
        $showInfo->bindValue(':id_users', $this->id_users);
        $showInfo->execute();
            $showInfos = $showInfo->fetchAll(PDO::FETCH_OBJ);
                if (COUNT($showInfos)> 0){
                return $showInfos;
            }
      }   
}