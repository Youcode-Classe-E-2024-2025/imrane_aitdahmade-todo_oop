<?php

class TACHES
{
    protected $id;
    protected $nom;
    protected $description;
    protected $Attribue;
    protected $status;
    protected $type;
    protected $conn;
    public function __construct($nom, $description, $Attribue, $status, $type)
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->Attribue = $Attribue;
        $this->status = $status;
        $this->type = $type;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getAttribue()
    {
        return $this->Attribue;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getType()
    {
        return $this->type;
    }
    public function addTache()
    {
        $sql = "INSERT INTO TACHES (nom, description, Attribue, status, type) VALUES (:nom, :description, :Attribue, :status, :type)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':Attribue', $this->Attribue);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':type', $this->type);
        if ($stmt->execute()) {
            echo "Tache ajouté avec succès.";
        } else {
            echo "Erreur lors de l'ajout de la tache.";
        }
    }
    public function getTaches()
    {
        $sql = "SELECT * FROM TACHES";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $taches = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $taches;
    }
    public function getTache($id)
    {
        $sql = "SELECT * FROM TACHES WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $tache = $stmt->fetch(PDO::FETCH_ASSOC);
        return $tache;
    }
    public function updateTache($id)
    {
        $sql = "UPDATE TACHES SET nom = :nom, description = :description, Attribue = :Attribue, status = :status, type = :type WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':Attribue', $this->Attribue);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':type', $this->type);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            echo "Tache modifié avec succès.";
        } else {
            echo "Erreur lors de la modification de la tache.";
        }
    }
    public function deleteTache($id)
    {
        $sql = "DELETE FROM TACHES WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            echo "Tache supprimé avec succès.";
        } else {
            echo "Erreur lors de la suppression de la tache.";
        }
    }
    
}
