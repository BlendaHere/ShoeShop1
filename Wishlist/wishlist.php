<?php
session_start();

// Include database connection
include '../Database.php';

// Check if user is already signed in
if (isset($_SESSION['email'])) {
    header('location: wishlist.php');
    exit;
}

$message = '';

// Validate user input (You can add more validation as per your requirements)
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $message = 'Please enter both email and password.';
    } else {
        // Check if the user exists in the loginwishlist table
        $check_user_query = "SELECT * FROM `loginwishlist` WHERE `email` = '$email' AND `password` = '$password'";
        $check_user_result = mysqli_query($conn, $check_user_query);

        if (!$check_user_result) {
            die('Query failed');
        }

        if (mysqli_num_rows($check_user_result) > 0) {
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
    <link rel="stylesheet" href="css/style.css">
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