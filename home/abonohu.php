<?php
require_once('../config/Database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the email value from the form
    $email = $_POST['email'];

    // Create a new instance of the Database class
    $db = new Database();

    // Insert the email into the database
    $db->insertEmail($email);

    // Redirect the user back to the homepage or display a success message
    header('Location: index.php');
    exit();
}
?>