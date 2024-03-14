<?php 

if (isset($_POST["addPost"])) {
    session_start();
    $titlePost = $_POST["titlePost"];
    $contentPost = $_POST["contentPost"];
    $authorPost = ltrim($_SESSION["userName"], ",");

    include "../app/Model.php";
    include "../controllers/PostContr.php";

    $post = new PostContr();
    $post->addPost($titlePost, $contentPost, $authorPost);
    header("Location: /POO_Project/thread");
    exit();

}