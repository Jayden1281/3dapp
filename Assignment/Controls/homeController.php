<?php
include './Models/Conect.php';
include './Models/ProductModel.php';

//Create a ProductModel instance and call the getAllProducts method
$productModel = new ProductModel($conn);
$products = $productModel->getAllProducts();

//Introduce view files to display data
include './Views/indexView.php';
?>
