<?php
require_once 'userController.php';

$user1 = new userController();

if (isset($_POST['submit'])) {
    // Check if the entered credentials are valid
    if ($user1->isValidUser($_POST['email'], $_POST['pass'])) {
        // Redirect the user to the specified page after successful login
        header("Location: home.php");
        exit;
    } else {
        // Display an error message if the credentials are invalid
        echo "Invalid email or password. Please try again.";
    }
}
?>
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="stylesheet" href="style.css">
<section>
    <div class="wrapper">
        <header>Kyçu</header>
        <form action="#" method="post">
            <div class="field email">
                <div class="input-area">
                    <input type="text" placeholder="Email-i" name="email">
                    <i class="icon fas fa-envelope"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Email-i nuk mund të jetë bosh</div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="password" placeholder="Fjalëkalimi" name="pass">
                    <i class="icon fas fa-lock"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Fjalëkalimi-i nuk mund të jetë bosh</div>
            </div>
            <div class="pass-txt"><a href="#">Harrove fjalëkalimin?</a></div>
            <input type="submit" name="submit" value="Kyçu">
        </form>
        <div class="sign-txt">Ende jo anëtar? <a href="../signUp/signup.php">Regjistrohu tani</a></div>
        <div class="sign-txt">Kyçu si Admin? <a href="../login-Admin/login.php">Kyçu si Admin</a></div>
        <div class="back-button"><a href="../home/index.php">Kthehu Këtu</a></div>
    </div>
</section>