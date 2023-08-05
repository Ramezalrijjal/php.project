<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_key'])) {
    $product_key = $_POST['product_key'];

    if (isset($_SESSION['products'][$product_key])) {
        unset($_SESSION['products'][$product_key]);
    }
}

header("Location: view_products.php");
exit();
?>
