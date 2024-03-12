<?php 
class Thread extends Controller {
    public function index() {
        $this->loadModel("Post");
        $thread = $this->Post->getAll();
        
        $this->render("index", ["thread" => $thread]);
    }
}