<?php
require_once 'MenuController.php';

if (isset($_GET['id'])) {
    $menuId = $_GET['id'];

    $menu = new MenuController;

    // Validate and sanitize the menu ID
    $menuId = htmlspecialchars($_GET['id']);

    // Check if the deletion process has already been confirmed
    if (isset($_GET['confirm'])) {
        // Delete the menu item
        $result = $menu->delete($menuId);

        if ($result) {
            // Deletion successful
            header('Location: menuDashboard.php?deleted=true');
            exit;
        } else {
            // Error occurred during deletion
            $error = "Error deleting the menu item.";
            echo $error;
            // You can also redirect the user to an error page or log the error
            exit;
        }
    }

    // Display a confirmation dialog before deleting
    echo '
    <style>
        .confirmation-dialog {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            padding: 20px;
            text-align: center;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .confirmation-dialog h3 {
            margin-top: 0;
        }

        .confirmation-dialog-buttons {
            margin-top: 20px;
        }

        .confirmation-dialog-buttons button {
            margin-right: 10px;
            background-color: #0E86D4;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .confirmation-dialog-buttons button:hover {
            background-color: #FF0000;
        }
        
    </style>

    <div class="confirmation-dialog">
        <h3>Are you sure you want to delete this menu item?</h3>
        <div class="confirmation-dialog-buttons">
            <button onclick="deleteMenu()">Yes</button>
            <button onclick="cancelDelete()">No</button>
        </div>
    </div>

    <script>
        function deleteMenu() {
            window.location.href = "delete-menu.php?id='.$menuId.'&confirm=1";
        }

        function cancelDelete() {
            window.location.href = "menuDashboard.php";
        }
    </script>
    ';

    // Stop the script execution after displaying the confirmation dialog
    exit;
}
?>