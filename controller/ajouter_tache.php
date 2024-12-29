<?php 

include_once "./controller/configu.php";    
require_once "../models/Task.php";  

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $Attribue = $_POST['Attribue'];
    $status = $_POST['status'];
    $type = $_POST['type'];

    $task = new TACHES($nom, $description, $Attribue, $status, $type);
    $task->addTache();

}

?>