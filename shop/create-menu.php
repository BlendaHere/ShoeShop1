<?php
require_once 'MenuController.php';

$menu = new MenuController;

if (isset($_POST['submit'])) {
    $menu->insert($_POST);
}
?>

<style>
    body {
        background: url(img1.jpg);
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form-container {
        background-color: #0E86D4;
        padding: 20px;
        border-radius: 10px;
        color: white;
        width: 400px;
    }

    .form-container input[type="text"],
    .form-container input[type="number"],
    .form-container textarea {
        padding: 10px;
        border-radius: 5px;
        border: none;
        margin-bottom: 10px;
        width: 100%;
    }

    .form-container input[type="submit"] {
        padding: 10px;
        background-color: white;
        color: #0E86D4;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .form-container input[type="submit"]:hover {
        background-color: #0E86D4;
        color: white;
    }

    .form-container button {
        margin-top: 10px;
        background-color: transparent;
        border: none;
        color: white;
        text-decoration: underline;
        cursor: pointer;
    }
</style>

<div class="container">
    <div class="form-container">
        <form method="POST" enctype="multipart/form-data">
            Foto:
            <input type="file" name="image">
            <br>
            Pershkrimi:
            <input type="text" name="title">
            <br>
            Kategoria:
            <textarea name="body" cols="30" rows="5"></textarea>
            <br>
            Cmimi:
            <input type="number" name="price">
            <br>
            <input type="submit" name="submit" value="Ruaj">
        </form>
        <button onclick="goBack()">Back</button>
    </div>
</div>

<script>
    function goBack() {
        window.location.href = 'menuDashboard.php';
    }
</script>