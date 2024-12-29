<?php

class Task
{
    protected $id;
    protected $title;
    protected $description;
    protected $status;
    protected $assignedTo;
    protected $createdAt;
    protected $conn;

    public function __construct($title, $description, $assignedTo)
    {
        $this->title = $title;
        $this->description = $description;
        $this->assignedTo = $assignedTo;
        $this->status = 'pending';
        $this->createdAt = date('Y-m-d H:i:s');

        // Initialize database connection
        Connection::init("localhost", "root", "", "GESTION_DES_TACHES");
        $this->conn = Connection::getConnection();
    }

    public function save()
    {
        $sql = "INSERT INTO tasks (title, description, status, assigned_to, created_at) 
                VALUES (:title, :description, :status, :assigned_to, :created_at)";
        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':title' => $this->title,
            ':description' => $this->description,
            ':status' => $this->status,
            ':assigned_to' => $this->assignedTo,
            ':created_at' => $this->createdAt
        ]);
    }

    public function updateStatus($newStatus)
    {
        $this->status = $newStatus;
        $sql = "UPDATE tasks SET status = :status WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':status' => $newStatus,
            ':id' => $this->id
        ]);
    }

    // Getters and setters
    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getAssignedTo()
    {
        return $this->assignedTo;
    }
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
