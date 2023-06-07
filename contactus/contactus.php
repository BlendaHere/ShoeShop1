<?php
include_once '../header/header.php';
?>
    <title>Kontakti</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="cstyle.css">

<div class="container">
    <div class="contact-box">
        <div class="left"></div>
        <div class="right">
            <h2>Na Kontaktoni</h2>
            <form action = "usercontactinfo.php" method = "post">
            <input type="text" name ="emri" class="field" placeholder="Emri">
            <input type="text" name="email" class="field" placeholder="Email">
            <input type="text" name="phone" class="field" placeholder="Numri i Telefonit">
            <textarea placeholder="Mesazhi" name="message" class="field"></textarea>
            <button class="btn1">Dërgo</button>
        </div>
    </div>
</div>

<?php
include_once '../footer/footer.php';
?>
