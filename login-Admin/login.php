<?php 
session_start();
if(isset($_SESSION['username'])){
 header("location:home.php");
}else{


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h1>Kyçu</h1>
        <input type="text" name="username" placeholder="Përdoruesi"> <br> <br>
        <input type="password" name="password" placeholder="Fjalëkalimi"> <br> <br>

        <input type="submit" name="loginBtn" value="Kyçu">
    </form>
    <?php 
    require_once 'loginValidate.php';
    ?>
    
</body>
</html>

<?php 
}
?>