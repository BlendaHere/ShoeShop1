<?php
class Database{
    public $pdo;

    public function __construct(){
        try{
            $link = new PDO('mysql:host=localhost;dbname=shoeshop', 'root', '');
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $link;
        }catch(PDOException $exception){
            // Log the error or display a user-friendly message
            die("Database connection error: " . $exception->getMessage());
        }
    }
}
?>