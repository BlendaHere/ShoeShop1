<?php
require_once 'MenuController.php';

$menu = new MenuController;
if(isset($_POST['submit'])){
    $menu->insert($_POST);
}


?>
<style>
    body{
        background:url(img1.jpg);
    }
  div {
    background-color: #0E86D4;
    padding: 20px;
    border-radius: 10px;
    color: white;
    margin-right: 25%;
    margin-left: 25%;
    margin-top: 9%;
    
  }

  input[type="text"], 
  input[type="number"], textarea {
    padding: 10px;
    border-radius: 5px;
    border: none;
    margin-bottom: 10px;
    width: 100%;
  }

  input[type="submit"] {
    padding: 10px;
    background-color: white;
    color: #0E86D4;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #0E86D4;
    color: white;
  }
</style>
<div>
    <form method="POST">
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
</div>