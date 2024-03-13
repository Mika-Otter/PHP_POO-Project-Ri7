<?php 
abstract class Controller{
    public function loadModel(string $model){
        require_once ROOT."models/".$model.".php";
        $this->$model = new $model();
    }

    public function render(string $file, array $data = []){
        extract($data);
        
        // On démarre le buffer
        ob_start(); // commence à intercepter tous les échos

        require_once ROOT."views/".strtolower(get_class($this))."/".$file.".php";

        $content = ob_get_clean(); // récupère tout ce qui est chargé dans le buffer
        require_once ROOT."views/layouts/default.php";
    }
}