<?php
class UserController {
    private $connection;

    public function __construct($host, $user, $password, $database){
        $this->connection = mysqli_connect($host, $user, $password, $database);

        if (!$this->connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function readData(){
        $query = mysqli_query($this->connection, 'SELECT * FROM usersignup');
        return mysqli_fetch_all($query, MYSQLI_ASSOC);
    }

    public function insert($request){
        $firstName = $request['firstName'];
        $lastName = $request['lastName'];
        $emailAddress = $request['emailAddress'];
        $birthday = $request['birthday'];
        $pass= $request['pass'];

        $query = "INSERT INTO usersignup (firstName, lastName, emailAddress, birthday, pass) VALUES ('$firstName', '$lastName', '$emailAddress', '$birthday', '$pass')";

        if (mysqli_query($this->connection, $query)) {
            return header('Location: ../shop/shop.php');
        } else {
            echo "Error: " . mysqli_error($this->connection);
        }
    }
}

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'shoeshop';

$userController = new UserController($host, $user, $password, $database); // Create an instance of UserController and pass the connection details

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