<?php 

function dd(...$var) {
    foreach ($var as $elem) {
        echo '<pre class="codespan">';
        echo '<code>';
        !$elem || $elem == '' ? var_dump($elem) : print_r($elem);
        echo '</code>';
        echo '</pre>';
    }
    die();
}

class Connection
{
    private static $conn = null;

    // Méthode statique pour initialiser la connexion
    public static function init($server, $username, $password, $db)
    {
        try {
            if (self::$conn === null) {
                self::$conn = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $username, $password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connecté avec succès à la base de données.";
            }
        } catch (PDOException $e) {
            throw new Exception("Échec de la connexion : " . $e->getMessage());
        }
    }

    public static function getConnection()
    {
        if (self::$conn === null) {
            throw new Exception("Aucune connexion active. Veuillez initialiser la connexion.");
        }
        return self::$conn;
    }
    
}


?>
