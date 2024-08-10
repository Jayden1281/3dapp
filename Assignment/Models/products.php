<?php
include 'Conect.php';

try {
    //Query products table data
    $stmt = $conn->query("SELECT * FROM products");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
   // Convert query results to JSON format and output
    echo json_encode($result);
} catch(PDOException $e) {
   // Output error message
    echo "查询失败: " . $e->getMessage();
}
?>
