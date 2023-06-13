<?php
require_once('../Database/Database.php');
require_once 'WishlistController.php';

$wishlist = new WishlistController();

// Display wishlist items
$wishlistItems = $wishlist->getWishlistItems($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <link rel="stylesheet" href="wishlist.css">
    <script src="wishlist.js" defer></script>
</head>

<body>
    <h1>Wishlist</h1>

    <!-- Display wishlist items -->
    <?php foreach ($wishlistItems as $item) : ?>
        <div class="wishlist-item">
            <p><?php echo $item['product_name']; ?></p>
            <button class="remove-btn" data-id="<?php echo $item['id']; ?>">Remove</button>
        </div>
    <?php endforeach; ?>

    <!-- Add new item to wishlist form -->
    <form id="add-to-wishlist-form">
        <input type="text" name="product_name" placeholder="Product Name">
        <button type="submit">Add to Wishlist</button>
    </form>
</body>

</html>