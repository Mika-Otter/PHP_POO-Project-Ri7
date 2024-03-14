<?php 
 include "../app/Model.php";
 include "../controllers/PostContr.php";

//add post
if (isset($_POST["addPost"])) {
    session_start();
    $titlePost = $_POST["titlePost"];
    $contentPost = $_POST["contentPost"];
    $authorPost = ltrim($_SESSION["userName"], ",");
    $post = new PostContr();
    $post->addPost($titlePost, $contentPost, $authorPost);
    header("Location: /POO_Project/thread");
    exit();

}

//delete post
if(isset($_GET['deleteById'])) {
    $id = $_GET['deleteById'];
    $post = new PostContr();
    $post->deletePost($id);
    header("Location: /POO_Project/thread");
} else {
    echo "ARRRRRRRH KUA";
}

//modify post
if(isset($_GET['modifyById'])) {
    session_start();
    $id = $_GET['modifyById'];
    $_SESSION["modify"] = $id;
    header("Location: /POO_Project/thread");
} else {
    echo "ARRRRRRRH KUAKUA";
}

//update post 
if(isset($_POST['update'])) {
    $newTitle = $_POST["titleModify"];
    $newContent = $_POST["contentModify"];
    session_start();
    $id = $_SESSION["modify"];
   

    $modify = new PostContr();
    $modify->updatePost($id, $newTitle, $newContent);
    $_SESSION["modify"] = "";
    header("Location: /POO_Project/thread") ;
}  else {
    echo "ARRRRRRRH FUCK";
}
