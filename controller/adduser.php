<?php

require_once "../controller/configu.php";
if($_SERVER['REQUEST_METHOD'] === "POST"){
$nom =$_POST['username'];
$password = $_POST['password'];

if(!empty($nom) || strlen($nom)>3 || strlen($nom)<50){
    echo $nom;
}
if(!empty($password)|| strlen($password)>8 ){
    $passhach = password_hash($password,PASSWORD_DEFAULT);
    dd($passhach);
}



}





?>