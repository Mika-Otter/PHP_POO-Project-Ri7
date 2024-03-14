<?php 

class PostContr extends Model {

    public function __construct(){
        $this->table = "thread";
        $this->getConnection();
    }

    public function addPost($postTitle, $postContent, $postAuthor){
        echo "hello baby";
        $sql = 'INSERT INTO ' . $this->table . ' (title, content, author) VALUES ("'.$postTitle.'","' .$postContent. '","'.$postAuthor.'")';
        $query = $this->_connexion->prepare($sql);

        if(!$query->execute()) {
            $query = null;
            echo "ARRRRH";
            $prompt = ["error" => "failed to add new post"];
            // header("Location: /POO_Project/thread");
            exit();
        }
        return true;
    }
}