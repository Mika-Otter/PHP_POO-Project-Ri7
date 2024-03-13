<?php 
class Login extends Model {
    public function __construct() {
        $this->table = "users";
        $this->getConnection();
    }

    public function tryToConnect($email) {
        $sql = "SELECT * FROM " . $this->table . " WHERE email = ?";
        $query = $this->_connexion->prepare($sql);
        $query->execute([$email]);
        
        $user = $query->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            return true; // L'utilisateur existe, connexion réussie
        } else {
            return false; // L'utilisateur n'existe pas, connexion échouée
        }
    }
}