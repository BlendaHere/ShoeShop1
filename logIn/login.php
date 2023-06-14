<?php
session_start();

require_once 'UserController.php';

$userController = new UserController();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $user = $userController->validateUser($email, $password);

    if ($user) {
        // Set the user information in the session
        $_SESSION['username'] = $user['email'];

        // Redirect the user to home.php
        header('Location: home.php');
        exit();
    } else {
     
        echo "<h3>Ju nuk jeni nje user!</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Your CSS and other necessary stylesheets -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="wrapper">
            <header>Kyçu</header>
            <form action="login.php" method="post" id="loginForm">
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
            <div class="back-button">  <a href="../home/index.php">Kthehu Këtu</a> </div>
        </div>
    </section>

    <script>
        const form = document.getElementById("loginForm");
        const eField = form.querySelector(".email");
        const eInput = eField.querySelector("input");
        const pField = form.querySelector(".password");
        const pInput = pField.querySelector("input");

        const form = document.getElementById("loginForm");

form.addEventListener("submit", (e) => {
  e.preventDefault(); // Prevent form submission

  // Redirect to home.php
  window.location.href = "home.php";
});

            // Check if email and password are blank
            if (eInput.value === "") {
                eField.classList.add("shake", "error");
            } else {
                checkEmail();
            }

            if (pInput.value === "") {
                pField.classList.add("shake", "error");
            } else {
                checkPass();
            }

            setTimeout(() => {
                // Remove shake class after 500ms
                eField.classList.remove("shake");
                pField.classList.remove("shake");
            }, 500);

            eInput.addEventListener("input", checkEmail); // Call checkEmail function on email input change
            pInput.addEventListener("input", checkPass); // Call checkPass function on password input change

            function checkEmail() {
                // Check email validity
                let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                if (!eInput.value.match(pattern)) {
                    eField.classList.add("error");
                    eField.classList.remove("valid");
                    let errorTxt = eField.querySelector(".error-txt");
                    if (eInput.value !== "") {
                        errorTxt.innerText = "Enter a valid email address";
                    } else {
                        errorTxt.innerText = "Email can't be blank";
                    }
                } else {
                    eField.classList.remove("error");
                    eField.classList.add("valid");
                }
            }

            function checkPass() {
                // Check password validity
                if (pInput.value === "") {
                    pField.classList.add("error");
                    pField.classList.remove("valid");
                } else {
                    pField.classList.remove("error");
                    pField.classList.add("valid");
                }
            }

            // // If both email and password fields don't have the error class, submit the form
            // if (!eField.classList.contains("error") && !pField.classList.contains("error")) {
            //     form.submit();
            
        ;
    </script>
</body>
</html>