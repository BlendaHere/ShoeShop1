<?php
require_once '../Database.php';

class MenuController {
    public $db;

    public function __construct() {
        $this->db = new Database;
    }
    
    

    // CRUD

    public function readData() {
        $query = $this->db->pdo->query('SELECT * FROM menu');
        return $query->fetchAll();
    }

    public function insert($request) {
        if (!empty($_FILES['image']['name'])) {
            $targetDir = './upload/';
            $targetFile = $targetDir . basename($_FILES['image']['name']);

            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                $menuImage = $targetFile;
            } else {
                echo "Error: Failed to upload the image.";
                return;
            }
        } else {
            echo "Error: No image was selected.";
            return;
        }

        $query = $this->db->pdo->prepare('INSERT INTO menu (menu_image, menu_title, menu_body, menu_price)
            VALUES (:menu_image, :menu_title, :menu_body, :menu_price)');

        $query->bindParam(':menu_image', $menuImage);
        $query->bindParam(':menu_title', $request['title']);
        $query->bindParam(':menu_body', $request['body']);
        $query->bindParam(':menu_price', $request['price']);
        $query->execute();

        header('Location: menuDashboard.php');
        exit();
    }

    public function edit($id) {
        $query = $this->db->pdo->prepare('SELECT * FROM menu WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id) {
        if (!empty($_FILES['image']['name'])) {
            $targetDir = './upload/';
            $targetFile = $targetDir . basename($_FILES['image']['name']);

            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                $menuImage = $targetFile;
            } else {
                echo "Error: Failed to upload the image.";
                return;
            }
        } else {
            $menuImage = $request['image'];
        }

        $query = $this->db->pdo->prepare('UPDATE menu SET menu_image = :menu_image,
        menu_title = :menu_title, menu_body = :menu_body, menu_price = :menu_price WHERE id = :id');

        $query->bindParam(':menu_image', $menuImage);
        $query->bindParam(':menu_title', $request['title']);
        $query->bindParam(':menu_body', $request['body']);
        $query->bindParam(':menu_price', $request['price']);
        $query->bindParam(':id', $id);
        $query->execute();

        header('Location: menuDashboard.php');
        exit();
    }

    public function delete($id) {
        $query = $this->db->pdo->prepare('DELETE FROM menu WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();
    
        if ($query->rowCount() > 0) {
            echo '
            <div class="delete-alert">
                <h3>Menu item deleted successfully!</h3>
                <button onclick="window.location.href = \'menuDashboard.php\'">OK</button>
            </div>';
        } else {
            echo '
            <div class="delete-alert">
                <h3>Error deleting the menu item.</h3>
                <button onclick="window.location.href = \'menuDashboard.php\'">OK</button>
            </div>';
        }
    
        exit();
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .delete-alert {
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

        .delete-alert h3 {
            margin-top: 0;
            color: #ff0000;
        }

        .delete-alert p {
            margin-bottom: 20px;
        }

        .delete-alert button {
            background-color: #0E86D4;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-alert button:hover {
            background-color: #FF0000;
        }
    </style>
</head>
<body>
    <!-- Your HTML content for menuDashboard.php goes here -->
</body>
</html>