<?php

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"contactusdata");

$emri = $_POST['emri'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$query = "INSERT INTO usercontactdata (emri,email,phone,message) VALUES ('$emri','$email','$phone','$message')";

mysqli_query($connection,$query);

echo "MESAZHI U DËRGUA!";
?>