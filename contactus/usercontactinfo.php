<?php

$connection = mysqli_connect('localhost', 'root', '', 'shoeshop');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$emri = $_POST['emri'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$query = "INSERT INTO usercontactdata (emri, email, phone, message) VALUES ('$emri', '$email', '$phone', '$message')";

if (mysqli_query($connection, $query)) {
    echo "MESAZHI U DËRGUA!";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>