<?php 

if (isset($_POST["connect"])) {
    $loginEmail = $_POST["loginEmail"];
    $loginPass = $_POST["loginPass"];
    include "../app/Model.php";
    include "../models/Login.php";
    $user = new Login();

    if ($user->tryToConnect($loginEmail, $loginPass)) {
        header("Location: /POO_Project/thread");
    } else {
        echo "Failed to connect";
    }
}