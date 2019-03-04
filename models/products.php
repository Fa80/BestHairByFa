         <?php 
/** extends permet l'heritage entre 2 classes.
 * Donc  products hérite de Database ce qui permet d'utiliser son constructeur et donc d'établir la connection à la base de données
 */
class products extends Database{
    public $id;
    public $name;
    public $description; 
    public $size;
    public $price;
    public $id_category;
    public $id_orders;    
     //Methode magique __construct
    public function __construct() {
        parent::__construct();
    }
   /**
    * 
    * @return boolean
    */
               public function addProducts(){
               // requête permettant d'inserrer les valeurs de l'enregistrement.
        $query = 'INSERT INTO `products`(`name`, `description`, `size`, `price`, `id_category`, `id_orders`) VALUES (:name, :description, :size, :price, :id_category, :id_orders)';
        // On prépare la requête.
        $addProducts = $this->db->prepare($query);
        // On attribue les valeurs via bindValue et on recupère les attributs de la classe via $this
        $addProducts->bindValue(':name', $this->name, PDO::PARAM_STR);
        $addProducts->bindValue(':description', $this->description, PDO::PARAM_STR);
        $addProducts->bindValue(':size', $this->size, PDO::PARAM_STR);
        $addProducts->bindValue(':price', $this->price, PDO::PARAM_INT);
        $addProducts->bindValue(':id_category', $this->id_category, PDO::PARAM_STR);
        $addProducts->bindValue(':id_orders', $this->id_orders, PDO::PARAM_STR);
        // On execute la requete une fois prête.
            if ($addProducts->execute()){
                return true;
            }
      }   
}