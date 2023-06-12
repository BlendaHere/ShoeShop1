<?php
require_once 'MenuController.php';
if (isset($_GET['id'])) {
    $menuId = $_GET['id'];
}

$menu = new MenuController;
$currentMenu = $menu->edit($menuId);

if (isset($_POST['submit'])) {
    // Validate and sanitize the user input
    $title = htmlspecialchars($_POST['title']);
    $body = htmlspecialchars($_POST['body']);
    $price = floatval($_POST['price']);

    // Check if a new image was uploaded
    if (!empty($_FILES['image']['name'])) {
        $targetDir = './upload/';
        $targetFile = $targetDir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $image = $targetFile;
        } else {
            echo "Error: Failed to upload the image.";
            return;
        }
    } else {
        // No new image uploaded, use the current image
        $image = $currentMenu['menu_image'];
    }

    // Create an array of the updated data
    $updatedData = [
        'image' => $image,
        'title' => $title,
        'body' => $body,
        'price' => $price
    ];

    // Update the menu item
    $menu->update($updatedData, $menuId);
}
?>

<style>
    body {
        background: url(img1.jpg);
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
    input[type="number"],
    textarea {
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
    <form method="post" enctype="multipart/form-data">
        Foto:
        <br>
        <img src="<?php echo $currentMenu['menu_image']; ?>" alt="Current Image" style="max-width: 200px; margin-bottom: 10px;">
        <input type="file" name="image">
        <br>
        Titulli:
        <input type="text" name="title" value="<?php echo $currentMenu['menu_title']; ?>">
        <br>
        Kategoria:
        <input type="text" name="body" value="<?php echo $currentMenu['menu_body']; ?>">
        <br>
        Cmimi:
        <input type="number" name="price" value="<?php echo $currentMenu['menu_price']; ?>">
        <br>
        <input type="submit" name="submit" value="Përditësimi">
    </form>
    <button onclick="goBack()">Back</button>
<script>
    function goBack() {
        window.location.href = 'menuDashboard.php';
    }
</script>
</div>