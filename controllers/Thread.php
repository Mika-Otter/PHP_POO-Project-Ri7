<?php 
class Thread extends Controller {
    public function index() {
        $this->loadModel("Post");
        $thread = $this->Post->getAll();
        
        $this->render("index",  "default", compact("thread")); //same than ["thread" => $thread]
    }

    public function lire($id) {
        echo $id;

    }
}