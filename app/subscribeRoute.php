<?php

if(isset($_POST["subscribe"])) {
    $userEmail = $_POST["userEmail"];
    $userName = $_POST["userName"];
    $userPass = $_POST["userPass"];
    $userPassConfirm = $_POST["userPassConfirm"];

    include "../app/Model.php";
    include "../controllers/UserContr.php";
    include "../models/User.php";
    $user = new User($userName, $userEmail, $userPass, $userPassConfirm);
    $user->createUser($userEmail, $userName, $userPass);

    header("Location: /POO_Project/thread");
    exit();
}