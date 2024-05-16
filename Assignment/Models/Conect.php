<?php
//MySQL server information
$servername = "localhost"; 
$username = "root";
$password = "root123";
$dbname = "web3d";

try {
   // Create PDO connection object
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
  // Database operations can be performed here
    
} catch(PDOException $e) {
    // Output error message
    echo "Connection failed: " . $e->getMessage();
}


?>
