<?php 
abstract class Model{
    private $dbhost = "localhost";
    private $dbname = "poo_project";
    private $dbusername = "root";
    private $dbpass = "";

    // Propriété contenant la connexion 
    protected $_connexion;

    public $table;
    public $id;

    protected function getConnection() {
        $this->_connexion = null;

        try {
            $this->_connexion = new PDO("mysql:host=" . $this->dbhost . "; dbname=" . $this->dbname, $this->dbusername, $this->dbpass );
            $this->_connexion->exec("set names utf8");
        } catch (PDOException $e) {
            echo "Error :" . $e->getMessage();
        }
    }

    public function getAll(){
        $sql = "SELECT * FROM ". $this->table;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getOne(){
        $sql = "SELECT * FROM". $this->table . "WHERE id=" .$this->id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch();
    }
}