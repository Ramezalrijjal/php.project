<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['key'])) {
    $key = $_POST['key'];

    if (isset($_SESSION['products'][$key])) {
        unset($_SESSION['products'][$key]);
    }
}

header("Location: view_products.php");
exit();
?>
