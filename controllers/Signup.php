<?php 

class Signup extends Model {
    protected function createUser($userEmail, $userName, $userPass) {
        $sql = 'INSERT INTO users (email, userName, userPass) VALUES (?, ?, ?)';
        $query = $this->getConnection()->prepare($sql);

        $hashedPass = password_hash($userPass, PASSWORD_DEFAULT);

        if(!$query->execute(array($userEmail, $userName, $hashedPass))) {
            $query = null;
            $prompt = ["error"=>"failed to create user"];
            header("Location: /POO_Project/");
            var_dump($prompt);
            exit();
        }

        $query = null;

    }
    public function checkUser($userEmail) {
        $sql = 'SELECT email FROM users WHERE email = ?';
        $query = $this->getConnection()->prepare($sql);

        if(!$query->execute(array($userEmail))) {
            $query = null;
            $prompt = ["error"=>"failed to connect"];
            header("Location: /POO_Project/?error=stmtfailed");
            var_dump($prompt);
            exit();
        }

        $resultCheck = false;
        if($query->rowCount() > 0) {
            $resultCheck = false;
        } 
        else {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}