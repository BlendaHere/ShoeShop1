<?php

class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'shoeshop';
    private $pdo;
    
    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
    
    public function insertEmail($email) {
        try {
            $query = "INSERT INTO abonohu (email) VALUES (:email)";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute(['email' => $email]);
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}
?>