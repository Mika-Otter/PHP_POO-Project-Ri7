<?php 

class User extends UserContr {
    private $userName;
    private $userEmail;
    private $userPass;
    private $userPassConfirm;

    public function __construct($userName, $userEmail, $userPass, $userPassConfirm) {
        parent::__construct();
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->userPass = $userPass;
        $this->userPassConfirm = $userPassConfirm;
    }

  

}