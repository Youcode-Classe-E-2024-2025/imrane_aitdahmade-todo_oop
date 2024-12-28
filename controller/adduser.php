<?php
 require_once "../controller/configu.php";
require_once "../models/User.php";
// require_once "./view/signup.php";
if($_SERVER['REQUEST_METHOD'] === "POST"){
$nom =$_POST['username'];
$password = $_POST['password'];


if (empty($nom) || strlen($nom) <= 3 || strlen($nom) > 50) {
    echo "Le nom est non valide. Il doit contenir entre 4 et 50 caractères.";
exit;
}

if (empty($password) || strlen($password) <= 8) {
    echo "Le mot de passe est non valide. Il doit contenir plus de 8 caractères.";
    exit;
}

$user = new UserController($nom ,$password);
$user->addUser();

}





?>