<?php
include 'Conect.php'; 

try {
    //Query company table data
    $stmt = $conn->query("SELECT * FROM company");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Convert query results to JSON format and output
    echo json_encode($result);
} catch(PDOException $e) {
    // Output error message
    echo "Query failed: " . $e->getMessage();
}
?>
