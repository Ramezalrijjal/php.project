<!DOCTYPE html>
<html>
<head>
    <title>Search Product</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <h1>Search Product</h1>
        <form action="search_product_handler.php" method="get">
            <label for="search">Product Name:</label>
            <input type="text" id="search" name="q" required>
            <input type="submit" value="Search">
        </form>
        <?php
        session_start();
        if (isset($_SESSION['search_results']) && !empty($_SESSION['search_results'])) {
            foreach ($_SESSION['search_results'] as $product) {
                echo '<div class="card">';
                echo '<img src="uploads/' . $product['photo'] . '" alt="' . $product['name'] . '">';
                echo '<h3>' . $product['name'] . '</h3>';
                echo '<p>' . $product['details'] . '</p>';
                echo '<p>Date: ' . $product['date'] . '</p>';
                echo '</div>';
            }
        } else {
            echo '<p>No products found.</p>';
        }
        ?>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
