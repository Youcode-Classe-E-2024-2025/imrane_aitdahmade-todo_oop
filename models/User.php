<?php
require_once "../controller/configu.php";

class UserController {
    private $id;
    private $nom;
    private $role;
    private $password;
    private $conn;

    public function __construct($nom = null, $password = null)
    {
        $this->nom = $nom;
        $this->password = $password;
        // Initialize database connection
        Connection::init("localhost", "root", "", "GESTION_DES_TACHES");
        $this->conn = Connection::getConnection();
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function addUser()
    {
        // Requête SQL d'insertion
        $sql = "INSERT INTO USER (nom, PASSWORD) VALUES (:nom, :password)";
        $stmt = $this->conn->prepare($sql);

        // Lier les paramètres
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':password', $hashedPassword);

        // Exécuter la requête
        if ($stmt->execute()) {
            echo "Utilisateur ajouté avec succès.";
        } else {
            echo "Erreur lors de l'ajout de l'utilisateur.";
        }
    }
    public function login($nom, $password) {     
        $sql = "SELECT * FROM USER WHERE nom = :nom";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $password = password_hash($password, PASSWORD_DEFAULT);
        dd($user);
        if ($user && password_verify($password, $user['PASSWORD'])) {
            dd($user);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['nom'];
            return true;
        }
        return false;
    }
}
?>