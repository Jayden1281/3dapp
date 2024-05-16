<?php
include '../Models/Conect.php';
include '../Models/CompanyModel.php';

//Create a CompanyModel instance and call the getFirstCompany method
$companyModel = new CompanyModel($conn);
$companyInfo = $companyModel->getFirstCompany();



//Introduce view files to display data
// include '../Views/companyView.php';
?>
