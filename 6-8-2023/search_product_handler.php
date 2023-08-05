<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['q'])) {
    $search_query = $_GET['q'];

    // Assuming you have an array of products stored in $_SESSION['products']
    if (isset($_SESSION['products']) && is_array($_SESSION['products'])) {
        $search_results = array_filter($_SESSION['products'], function ($product) use ($search_query) {
            return strpos($product['name'], $search_query) !== false;
        });

        $_SESSION['search_results'] = $search_results;
    }
}

header("Location: search_product.php");
exit();
?>
