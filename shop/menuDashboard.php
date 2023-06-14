<?php
require_once "MenuController.php";

$m = new MenuController;
$allMenu = $m->readData();

if (isset($_GET['deleted']) && $_GET['deleted'] === 'true') {
    echo '
    <div class="alert-container">
        <div class="alert-message">Menu item deleted successfully!</div>
    </div>
    ';
}
?>

<style>
    :root {
        --blue: #0E86D4;
        --dark-color: #055C9D;
        --black: #444;
        --light-color: #666;
        --border: .1rem solid rgba(0, 0, 0, .1);
        --border-hover: .1rem solid var(--black);
        --box-shadow: .5rem 1rem rgba(0, 0, 0, .1);
    }

    * {
        font-family: sans-serif;
    }

    .content-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        width: 100%;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .content-table thead tr {
        background-color: #0E86D4;
        color: #ffffff;
        text-align: left;
        font-weight: bold;
    }

    .content-table th,
    .content-table td {
        padding: 12px 15px;
    }

    .alert-container {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        padding: 20px;
        text-align: center;
        display: none; /* Hide initially */
        z-index: 9999; /* Ensure the alert is displayed on top of other elements */
    }

    .alert-message {
        margin: 0;
        font-weight: bold;
    }

    .link {
        text-decoration: none;
        color: red;
        font-size: 17px;
    }

    .first-link {
        color: black;
        font-size: 22px;
        padding-left: 50%;
        position: relative;
        top: 20px;
    }

    .top-links {
        font-size: 30px;
        color: black;
        padding: 30px;
        text-decoration: none;
    }
</style>

<div>
    <table class="content-table">
        <thead>
            <tr>
                <th>Menu image</th>
                <th>Menu title</th>
                <th>Menu body</th>
                <th>Menu price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($allMenu as $menu) : ?>
                <tr>
                    <td><?php echo $menu['menu_image'] ?></td>
                    <td><?php echo $menu['menu_title'] ?></td>
                    <td><?php echo $menu['menu_body'] ?></td>
                    <td><?php echo $menu['menu_price'] ?></td>
                    <td><a href="edit-menu.php?id=<?php echo $menu['id']; ?>">Edit</a></td>
                    <td><a href="delete-menu.php?id=<?php echo $menu['id']; ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <button onclick="goBack()">Back</button>
    <button onclick="goToCreateMenu()">Create</button>

    <script>
        function goBack() {
            window.location.href = 'shop.php';
        }

        function goToCreateMenu() {
            window.location.href = 'create-menu.php';
        }

        // Show the alert container and hide it after a certain time
        function showAlert() {
            var alertContainer = document.querySelector('.alert-container');
            if (alertContainer) {
                alertContainer.style.display = 'block'; // Show the alert container

                setTimeout(function () {
                    alertContainer.style.display = 'none'; // Hide the alert container
                }, 3000); // Adjust the time in milliseconds (e.g., 3000 = 3 seconds)
            }
        }

        // Call the showAlert function when the page is loaded
        window.addEventListener('DOMContentLoaded', showAlert);
    </script>
</div>