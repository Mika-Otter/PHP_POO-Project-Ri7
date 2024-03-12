<?php 
abstract class Model{
    // Informations de base de données 
    private $dbhost = "localhost";
    private $dbname = "poo_project";
    private $dbusername = "root";
    private $dbpass = "";

    // Propriété contenant la connexion 
    protected $_connexion;

    // Propriété contenant les informations de requêtes
    public $table;
    public $id;

    public function getConnection() {
        $this->_connexion = null;

        try {
            $this->_connexion = new PDO("mysql:host=" . $this->dbhost . "; dbname=" . $this->dbname, $this->dbusername, $this->dbpass );
            $this->_connexion->exec("set names utf8");
        } catch (PDOException $e) {
            echo "Error :" . $e->getMessage();
        }
    }
}