<?php 

class User {
   private $userEmail;
   private $userName;
   private $userPass;
   private $userConfirmPass;

   public function __construct($userEmail, $userName, $userPass, $userPassConfirm) {
    $this->userEmail= $userEmail;
    $this->userName= $userName;
    $this->userPass= $userPass;
    $this->userPassConfirm= $userPassConfirm;
   }
   
   public function getEmail() {
    return $this->userEmail;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getUserPass() {
        return $this->userPass;
    }

    public function getUserConfirmPass() {
        return $this->userConfirmPass;
    }



    public function verifyFields($fields) {
            $goodFields = [];
            $prompts = ["error"=>[]];
            foreach($fields as $field=>$value){
                switch($field){
                    case "userEmail" :
                        $regex = "/^[A-zÀ-ÿ0-9]*@[a-z]*\.[a-z]{2,5}$/";
                        if(!preg_match($regex,$value)) array_push($prompts["error"],"Please enter a valid e-mail");
                        break;
                    case "userName" :
                        $regex = "/^[a-z\-]+$/i";
                        if(!preg_match($regex,$value)) array_push($prompts["error"],"Wrong lastname...");
                        break;
                    case "userPass" :
                        $regex = "/^[0-9]{5}$/";
                        if(!preg_match($regex,$value)) array_push($prompts["error"],"Please enter a correct 5-digit postcode ! ");
                        break;
                    case "userPassConfirm": 
                        if($value !== $fields["userPass"]) {
                            array_push($prompts["error"], "Passwords are not the same");
                        }
                        break;
                }
                $goodFields[$field] = htmlspecialchars($value);
            }
            return count($prompts["error"]) > 0 ? $prompts : $goodFields;
    
    }

    public function createUser($db) {
        $fields = $this->verifyFields($_POST);
            if(isset($fields["error"])) return $fields;
        $createSQL = $db -> prepare("INSERT INTO users(email, userName, userPass) VALUES(:email, :userName, :userPass)");
        $createSQL -> execute([
            ':email' => $this->getEmail(),
            ':userName' => $this->getUserName(),
            ':userPass' => $this->getUserPass(),
        ]);
    }
}