<?php
class Login extends Model
{
    public function __construct()
    {
        $this->table = "users";
        $this->getConnection();
    }

    public function tryToConnect($email, $password)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE email = ? AND userPass = ?";
        $query = $this->_connexion->prepare($sql);
        $query->execute([$email, $password]);

        $user = $query->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            session_start();
            $_SESSION["userName"] = $user["userName"];
            $_SESSION["modify"] = "";
            return true;
        } else {
            return false;
        }
    }
}