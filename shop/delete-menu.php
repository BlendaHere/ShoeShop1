<?php
require_once 'MenuController.php';

if (isset($_GET['id'])) {
    $menuId = $_GET['id'];
}

$menu = new MenuController;
$menu->delete($menuId);
?>