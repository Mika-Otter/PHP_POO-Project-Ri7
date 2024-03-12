<?php 
class Thread extends Controller {
    public function index() {
        $this->loadModel("Post");
        $thread = $this->Post->getAll();
        var_dump($thread);
        echo "Bienvenue sur la page d'accueil";
    }
}