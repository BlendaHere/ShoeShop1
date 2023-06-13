<?php
// Start session
session_start();

// Check if the wishlist array exists in the session
if (!isset($_SESSION['wishlist'])) {
    // If not, create an empty array
    $_SESSION['wishlist'] = [];
}

// Check if an item is being added to the wishlist
if (isset($_POST['item'])) {
    // Sanitize and store the item in a variable
    $item = $_POST['item'];

    // Add the item to the wishlist array
    $_SESSION['wishlist'][] = $item;
}

// Check if an item is being removed from the wishlist
if (isset($_GET['remove'])) {
    // Get the index of the item to remove
    $index = $_GET['remove'];

    // Remove the item from the wishlist array based on the index
    if (isset($_SESSION['wishlist'][$index])) {
        unset($_SESSION['wishlist'][$index]);
    }
}

// Retrieve the wishlist items
$wishlistItems = $_SESSION['wishlist'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Wishlist</title>
</head>
<body>
    <h1>My Wishlist</h1>

    <form method="POST" action="wishlist.php">
        <input type="text" name="item" placeholder="Enter an item">
        <button type="submit">Add to Wishlist</button>
    </form>

    <h2>Items in My Wishlist:</h2>
    <ul>
        <?php foreach ($wishlistItems as $index => $item) { ?>
            <li>
                <?php echo $item; ?>
                <a href="wishlist.php?remove=<?php echo $index; ?>">Remove</a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>