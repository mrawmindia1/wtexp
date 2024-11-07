<?php
// database_crud.php

class DatabaseManager
{
    private $conn;

    public function __construct($host, $username, $password, $database)
    {
        try {
            $this->conn = new mysqli($host, $username, $password, $database);
            if ($this->conn->connect_error) {
                throw new Exception("Connection failed: " . $this->conn->connect_error);
            }
        } catch (Exception $e) {
            die("Connection error: " . $e->getMessage());
        }
    }

    public function createUser($name, $email, $age)
    {
        $stmt = $this->conn->prepare("INSERT INTO users (name, email, age) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $name, $email, $age);

        if ($stmt->execute()) {
            return $this->conn->insert_id;
        }
        return false;
    }

    public function getAllUsers()
    {
        $result = $this->conn->query("SELECT * FROM users");
        $users = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }
        return $users;
    }

    public function getUserById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function updateUser($id, $name, $email, $age)
    {
        $stmt = $this->conn->prepare("UPDATE users SET name = ?, email = ?, age = ? WHERE id = ?");
        $stmt->bind_param("ssii", $name, $email, $age, $id);

        return $stmt->execute();
    }

    public function deleteUser($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}

$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

try {
    $db = new DatabaseManager($host, $username, $password, $database);

    $userId = $db->createUser("John Doe", "john@example.com", 30);
    echo "User created with ID: $userId\n";

    
    $user = $db->getUserById($userId);
    echo "\nUser details:\n";
    print_r($user);

    $db->updateUser($userId, "John Doe Jr.", "johnjr@example.com", 31);
    echo "\nUser updated successfully!\n";

    $allUsers = $db->getAllUsers();
    echo "\nAll users:\n";
    print_r($allUsers);

    $db->deleteUser($userId);
    echo "\nUser deleted successfully!\n";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>