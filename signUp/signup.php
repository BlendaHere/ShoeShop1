<title>Kyçuni</title>
<?php
require_once 'UserController.php';

?>

<title>Regjistrohu</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css%22%3E"/>
    <link rel="stylesheet" href="style.css">
<section>
  <br> <br> <br>
     <div class="div1">
        <h1>Regjistrohuni!</h1>

        <form action="UserController.php" method="post">

            <div class="div2">
                <input type="name" placeholder="Emri" name="firstName" >
                <input type="name" placeholder="Mbiemri" name="lastName" ><br>
                <input type="email" placeholder="Email" name="emailAddress" >
                <input type="birthday" placeholder="Datëlindja" name="birthday" ><br>
                <input type="password" placeholder="Fjalëkalimi" name="pass" ><br>
                <input type="submit" name="submit" value="Dorëzo">
                <h5><a href="../logIn/login.php">ose, Kyçuni</a></h5>
                            </div>

                <div class="back-button">  <a href="../home/index.php">Kthehu Këtu</a> </div>

        </form>
    </div>
<br> <br> <br>
</section>

