<?php

require "../models/connection.php";

function createUser($db) {
    require "../models/User.php";
    $email = $_POST['userEmail'];
    $userName = $_POST['userName'];
    $userPass = $_POST['userPass'];
    $userPassConfirm = $_POST['userPassConfirm'];

    // Créer une instance de la classe User avec les données récupérées
    $user = new User($email, $userName, $userPass, $userPassConfirm );

    $user->createUser($db);
}
    
