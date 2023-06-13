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
        <div class="back-button">
  <a href="../home/index.php">Kthehu ne Kryefaqe</a>
</div>

<style>
  .back-button {
    margin-top: 20px;
    text-align: center;
    margin-right:10px;
  }

  .back-button a {
    display: inline-block;
    padding: 10px 10px;
    font-size: 16px;
    background-color: transparent;
    color: lightblue;
    text-decoration: none;
  }

  .back-button a:hover {
    background-color: #555;
  }
</style>
    </form>
    <?php 
    require_once 'loginValidate.php';
    ?>
    
</body>
</html>

<?php 
}
?>