<?php


$dbfile = "web3d.db";

try {
   // Create PDO connection object for SQLite
    $conn = new PDO("sqlite:$dbfile");
    //Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    
  // Database operations can be performed here
    
} catch(PDOException $e) {
    // Output error message
    echo "Connection failed: " . $e->getMessage();
}
?>
