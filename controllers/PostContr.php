<?php 

class PostContr extends Model {

    public function __construct(){
        $this->table = "thread";
        $this->getConnection();
    }

    public function addPost($postTitle, $postContent, $postAuthor){
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

    public function deletePost($id) {
        $sql = "DELETE FROM " . $this->table . " WHERE ID = " . $id;
        $query = $this->_connexion->prepare($sql);

        if(!$query->execute()) {
            $query = null;
            echo "ARRRRH NEIN";
            $prompt = ["error" => "failed to delete post"];
            // header("Location: /POO_Project/thread");
            exit();
        }
        return true;

    }

    public function updatePost($id, $newTitle, $newContent) {
        $sql = 'UPDATE ' . $this->table . ' SET title = "' .$newTitle. '", content = "' . $newContent . '" WHERE ID = ' . $id;
        $query = $this->_connexion->prepare($sql);

        if(!$query->execute()) {
            $query = null;
            echo "ARRRRH NEIN NEIN";
            $prompt = ["error" => "failed to delete post"];
            // header("Location: /POO_Project/thread");
            exit();
        }
        return true;
    }
}