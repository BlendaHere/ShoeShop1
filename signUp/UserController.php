<?php
require_once 'Database.php';

class UserController {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function readData(){
        $query = $this->db->pdo->query('SELECT * FROM usersignup');
        return $query->fetchAll();
    }

    public function insert($request){
        $query = $this->db->pdo->prepare('INSERT INTO 
        usersignup (firstName, lastName, email, birthday, password) VALUES (:firstName, :lastName, :email, :birthday, :password)');
        $query->bindParam(':firstName', $request['firstName']);
        $query->bindParam(':lastName', $request['lastName']);
        $query->bindParam(':email', $request['emailAddress']);
        $query->bindParam(':birthday', $request['birthday']);
        $query->bindParam(':password', $request['pass']);
        $query->execute();
        return header('Location: ../shop/shop.php');
    }
}

$userController = new UserController(); // Create an instance of UserController

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    $formData = array(
        'firstName' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'emailAddress' => $_POST['emailAddress'],
        'birthday' => $_POST['birthday'],
        'pass' => $_POST['pass']
    );

    // Call the insert method
    $userController->insert($formData);
}
?>