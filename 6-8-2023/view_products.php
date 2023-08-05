
<!DOCTYPE html>
<html>
<head>
    <title>View Products</title>
    <link rel="stylesheet" href="styles.css">
    <style>.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}</style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <h1>View Products</h1>
        <?php
        session_start();
        if (isset($_SESSION['products']) && !empty($_SESSION['products'])) {
            foreach ($_SESSION['products'] as $key => $product) {
               echo"
               <div class='card'>
  <img src='{$product['photo']} '  style='width:100%'>
  <div class='container'>
    <h4><b>{$product['name']}</b></h4> 
    <p>{$product['details']}</p> 
    <p>{$product['date']} </p>
  </div>
</div>
               ";
            }
        } else {
            echo '<p>No products found.</p>';
        }
        ?>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
