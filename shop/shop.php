<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Shop</title>
    <link rel="stylesheet" href="../header/style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path_to_fontawesome_css">
</head>

<body>
    <?php
    require_once 'MenuController.php';
    include_once '../header/header.php';
    ?>
    
    <div>
        <div class="gallery">
            <?php
            $products = new MenuController;
            $all = $products->readData();
            foreach ($all as $product) {
                echo '
                    <div class="content">
                        <img id="img" src="' . $product['menu_image'] . '">
                        <h3 id="h3">' . $product['menu_title'] . '</h3>
                        <p>' . $product['menu_body'] . '</p>
                        <br>
                        <h6>$' . $product['menu_price'] . '</h6>
                        <a href="../wishlist/wishlist.php?product_id=' . $product['id'] . '"><i class="fas fa-heart"></i></a>
                        <a href="buyNow.php"><button class="buy">Bli Tani</button></a>
                    </div>
                ';
            }
            ?>
        </div>
    </div>

    <!-- Additional JavaScript or footer content if needed -->
</body>

</html>