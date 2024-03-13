<?php 
class Post extends Model{
    public function __construct(){
        $this->table = "thread";
        $this->getConnection();
    }

    public function findByID($id){
        $sql = "SELECT * FROM". $this->table . "WHERE ID=" . $id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch();
    }
}