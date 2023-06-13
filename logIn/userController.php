<?php
session_start();
require_once '../Database.php';

class userController
{
    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function isValidUser($email, $password)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM usersignup WHERE emailAddress = :email AND pass = :pass');
        $query->bindParam(':email', $email);
        $query->bindParam(':pass', $password);
        $query->execute();

        if ($query->rowCount() > 0) {
            // User is valid, set session variables
            $_SESSION['email'] = $email;
            $_SESSION['role'] = $this->getUserRole($email);

            return true;
        }

        return false;
    }

    public function readData()
    {
        $query = $this->db->pdo->query('SELECT * FROM usersignup');

        return $query->fetchAll();
    }

    public function insert($request)
    {
        $query = $this->db->pdo->prepare('INSERT INTO usersignup (firstName, lastName, emailAddress, birthday, pass) VALUES (:firstName, :lastName, :emailAddress, :birthday, :pass)');
        $query->bindParam(':firstName', $request['firstName']);
        $query->bindParam(':lastName', $request['lastName']);
        $query->bindParam(':emailAddress', $request['emailAddress']);
        $query->bindParam(':birthday', $request['birthday']);
        $query->bindParam(':pass', $request['pass']);
        $query->execute();

        return header('Location: ../shop/shop.php');
    }

    public function getUserRole($email)
    {
        // Since the 'usersignup' table does not have a 'role' column, you might need to adjust this logic accordingly
        // For example, you could assign a default role to all users or modify the table structure to include a 'role' column
        return 'user';
    }
}
?>