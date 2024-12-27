<?php 

class connection{
    private $conn ;

public function __construct($server,$username,$password,$db)
{
    try {
        $this -> conn = new PDO("mysql:host=$server;dbname=$db",$username,$password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connect";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}


}
 







?>