<?php
include './StoreController.php';
$productHandler = new StoreController();
$id = $_GET['id'];
$productHandler->deleteProduct($id);
header("Location: ../../views/dashboard.php");
exit;
?>