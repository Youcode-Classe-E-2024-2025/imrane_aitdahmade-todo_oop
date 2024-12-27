<?php

class UserControlle {
//atribue
private $id ;
private $nom;
private $role;
private $PASSWORD;

public function __construct($id,$nom,$role,$PASSWORD)
{
    $this -> id = $id;
    $this -> nom = $nom;
    $this ->role = $role;
    $this ->PASSWORD = $PASSWORD;
}
public function getNom(){
    return $this -> nom ;
}



}


?>