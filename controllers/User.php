<?php 
class User extends Signup {
    private $userEmail;
    private $userName;
    private $userPass;
    private $userPassConfirm;

    public function __construct($userEmail, $userName, $userPass, $userPassConfirm) {
        $this->userEmail = $userEmail;
        $this->userName = $userName;
        $this->userPass = $userPass;
        $this->userPassConfirm = $userPassConfirm;
    }

    public function signupUser() {
        if($this->emptyInput() == false) {
            $prompt = ["error" => "empty users"];
            header("Location: /POO_Project/");
            var_dump($prompt);
            exit();
        } 
        if($this->passMath() == false) {
            $prompt = ["error" => "password don't same"];
            header("Location: /POO_Project/");
            var_dump($prompt);
            exit();
        }
        if($this->invalidUserName() == false) {
            $prompt = ["error" => "invalid username"];
            header("Location: /POO_Project/");
            var_dump($prompt);
            exit();
        }
        $this->createUser($this->userEmail, $this->userName, $this->userPass);
    }

    private function emptyInput() {
        $result = false;
        if(empty($this->userEmail) || empty($this->userName) ||empty($this->userPass) ||empty($this->userPassConfirm)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUserName() {
        $result = false;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->userName)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function passMath() {
        $result = false;
        if (!$this->checkUser($this->userEmail)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}