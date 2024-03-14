<?php 
class UserContr extends Model{
    public function __construct(){
        $this->table = "users";
        $this->getConnection();
    }

    public function createUser($userEmail, $userName, $userPass) {
        echo "YOOOOOO";
        $sql = 'INSERT INTO '. $this->table .' (email, userName, userPass) VALUES ("'.$userEmail.'","'.$userName.'","'.$userPass.'")';
  
        $query = $this->_connexion->prepare($sql);
   
        if(!$query->execute()) {
            $query = null;
            $prompt = ["error"=>"failed to create user"];
            header("Location: /POO_Project/home");
            var_dump($prompt);
            exit();
        }
        return true;
    }
    
}