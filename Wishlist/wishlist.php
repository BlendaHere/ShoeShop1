<?php
session_start();

// Check if user is already signed in
if (isset($_SESSION['email'])) {
    header('location: wishlist.php');
    exit;
}

// Include database connection
include '../Database.php';

$message = '';

// Create an instance of the Database class
$database = new Database();
$conn = $database->pdo;

// Validate user input (You can add more validation as per your requirements)
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $message = 'Please enter both email and password.';
    } else {
        // Check if the user exists in the loginwishlist table
        $check_user_query = "SELECT * FROM `loginwishlist` WHERE `email` = :email AND `password` = :password";
        $check_user_stmt = $conn->prepare($check_user_query);
        $check_user_stmt->execute(['email' => $email, 'password' => $password]);

        if (!$check_user_stmt) {
            die('Query failed');
        }

        if ($check_user_stmt->rowCount() > 0) {
            // User exists, set session variables
            $_SESSION['email'] = $email;
            header('location: wishlist.php');
            exit;
        } else {
            $message = 'Invalid email or password.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Wishlist</title>
</head>

<body>

    <section class="login">
        <h1>Login</h1>
        <form action="" method="POST">
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="login" value="Login">
        </form>
        <div class="message"><?php echo isset($message) ? $message : ''; ?></div>
    </section>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

.login {
    max-width: 400px;
    margin: 50px auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h1 {
    margin-top: 0;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
    font-size: 16px;
}

input[type="submit"] {
    width: 100%;
    background-color: blue;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 16px;
}

.message {
    margin-top: 15px;
    color: #ff0000;
}

/* Optional: Additional styling for the submit button on hover */
input[type="submit"]:hover {
    background-color: #45a049;
}
<style>