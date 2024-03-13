<?php 
if(isset($_POST["subscribe"]))
{
    $userEmail = $_POST["userEmail"];
    $userName = $_POST["userName"];
    $userPass = $_POST["userPass"];
    $userPassConfirm = $_POST["userPassConfirm"];




    // Instantiate SignupContr Class
    include "../app/Model.php";
    include "../controllers/Signup.php";
    include "../controllers/User.php";
    $user = new User($userEmail, $userName, $userPass, $userPassConfirm);
    
    var_dump($user);
    //Running error handlers and user signup
    $user->signupUser();
    //Going to back to front page
    header("Location: /POO_Project/");
    echo "Well done !";
}