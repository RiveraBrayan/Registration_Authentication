<?php
require_once __DIR__ . '/../config/database.php';

class RegisterModel
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function emailExists($email)
    {
        try {
            $query = "SELECT id_user FROM users WHERE email_user = :email";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            return $stmt->rowCount() > 0;
        } catch (PDOException $e) {
            echo "Error in emailExists: " . $e->getMessage();
            return false;
        }
    }

    public function createUser($name, $email, $password)
    {
        try {
            $query = "INSERT INTO users (name_user, email_user, password_user) VALUES (:name, :email, :password)";
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error in createUser: " . $e->getMessage();
            return false;
        }
    }
}
?>