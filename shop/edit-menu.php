<?php
require_once 'MenuController.php';
if(isset($_GET['id'])){
    $menuId = $_GET['id'];
}

$menu = new MenuController;
$currenMenu = $menu->edit($menuId);

if(isset($_POST['submit'])) {
    $menu -> update($_POST, $menuId);
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

<form method="post">
     Foto:
     <input type="file" name="image" value="<?php echo $currenMenu['menu_image'];?>">
     <br>
     Titulli:
     <input type="text" name="title" value="<?php echo $currenMenu['menu_title'];?>">
     <br>
     Kategoria:
     <input type="text" name="body" value="<?php echo $currenMenu['menu_body'];?>">
     <br>
     Cmimi:
     <input type="number" name="price" value="<?php echo $currenMenu['menu_price'];?>">
     <br>
     <input type="submit" name="submit" value="Përditësimi" >
</form>
</div>