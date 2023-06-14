 
 
<?php
require_once '../Database.php';

class UserController {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function validateUser($email, $password) {
        $query = $this->db->pdo->prepare('SELECT * FROM user1 WHERE email = :email AND pass = :password');
        $query->execute(['email' => $email, 'password' => $password]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }
}

$userController = new UserController();


/*
require_once '../Database.php';

class UserController {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function validateUser($email, $password) {
        $query = $this->db->pdo->prepare('SELECT * FROM user1 WHERE email = :email AND pass = :password');
        $query->execute(['email' => $email, 'password' => $password]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }
    
    public function insertUser($userData) {
        $query = $this->db->pdo->prepare('INSERT INTO user1 (email, pass) VALUES (:email, :password)');
        $query->execute([
            'email' => $userData['email'],
            'password' => $userData['pass']
        ]);
    }
}

$userController = new UserController();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $user = $userController->validateUser($email, $password);

    if ($user) {
        // Start the session
        session_start();

        // Set the user information in the session
        $_SESSION['username'] = $user['email'];

        // Redirect the user to home.php
        header('Location: home.php');
        exit();
    } else {
        // Handle invalid login credentials
        // Display an error message or perform other actions
    }
}
*/
?> 