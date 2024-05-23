<?php
include '../Models/Conect.php';
include '../Models/ProductModel.php';

$view = isset($_GET['view']) ? $_GET['view'] : 'default';
//Create a ProductModel instance and call the getAllProducts method
$productModel = new ProductModel($conn);
$products = $productModel->getAllProducts();

//Introduce view files to display data
switch ($view) {
    case 'model1':
        include '../Views/modelView1.php';
        break;
    case 'model2':
        include '../Views/modelView2.php';
        break;
    default:
        include '../Views/modelView.php';
}
?>