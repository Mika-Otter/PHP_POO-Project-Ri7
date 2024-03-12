<?php 

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "poo_project";
$prompt = [];

try {
    $db = new PDO ("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie";
} catch (PDOException $e) {
    echo $e->getMessage();
}