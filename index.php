<?php
define("ROOT", str_replace("index.php", "", $_SERVER["SCRIPT_FILENAME"]));
require_once(ROOT."app/Model.php");
require_once(ROOT."app/Controller.php");

//On sépare les paramètres
$params = explode("/", $_GET['p']);
$prompt = ["success" => [], "error" => []];


if ($params[0] !== "") {
    $controller = ucfirst($params[0]);
    $action = isset($params[1]) ? $params[1] : "index";

    require_once ROOT . "controllers/" . $controller. ".php";

    $controller = new $controller();

    if(method_exists($controller, $action)) {
        unset($params[0]); // on vide les paramètres existants 
        unset($params[1]);
        call_user_func_array([$controller, $action], $params); //on va ainsi pouvoir gérer un nombre infini de paramètres
    } else {
        http_response_code(404);
        echo "La page demandé n'existe pas";
    }
   
} else {
    require_once(ROOT. "controllers/Home.php");

    $controller = new Home();
    $controller->index();

}



