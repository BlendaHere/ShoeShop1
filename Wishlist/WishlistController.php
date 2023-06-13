<?php
require_once('../Database/Database.php');

class WishlistController
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getWishlistItems($userId)
    {
        // Implement your code to retrieve wishlist items from the database based on user ID
        // You can customize the SQL query according to your table structure

        // Example query assuming you have a 'wishlist' table
        $query = "SELECT * FROM wishlist WHERE user_id = :user_id";
        $params = array(':user_id' => $userId);

        $this->db->query($query);
        $this->db->bindMultiple($params);

        return $this->db->resultSet();
    }

    public function addItemToWishlist($userId, $productName)
    {
        // Implement your code to add an item to the wishlist in the database
        // You can customize the SQL query according to your table structure

        // Example query assuming you have a 'wishlist' table
        $query = "INSERT INTO wishlist (user_id, product_name) VALUES (:user_id, :product_name)";
        $params = array(
            ':user_id' => $userId,
            ':product_name' => $productName
        );

        $this->db->query($query);
        $this->db->bindMultiple($params);

        return $this->db->execute();
    }

    public function removeItemFromWishlist($itemId)
    {
        // Implement your code to remove an item from the wishlist in the database
        // You can customize the SQL query according to your table structure

        // Example query assuming you have a 'wishlist' table
        $query = "DELETE FROM wishlist WHERE id = :item_id";
        $params = array(':item_id' => $itemId);

        $this->db->query($query);
        $this->db->bindMultiple($params);

        return $this->db->execute();
    }
}