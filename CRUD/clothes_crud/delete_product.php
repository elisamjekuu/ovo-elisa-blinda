<?php
include './ProductController.php';
$productHandler = new ProductController();
$id = $_GET['id'];
$productHandler->deleteProduct($id);
header("Location: ../../views/dashboard.php");
exit;
?>