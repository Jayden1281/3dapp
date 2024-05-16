<?php
class ProductModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllProducts() {
        try {
            // Query all data in the products table
            $stmt = $this->conn->query("SELECT * FROM products");
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch(PDOException $e) {
            // Output error message
            return "Query failed: " . $e->getMessage();
        }
    }
}
?>
