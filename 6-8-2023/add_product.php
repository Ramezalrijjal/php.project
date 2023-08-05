<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <h1>Add Product</h1>
        <form action="add_product_handler.php" method="post" enctype="multipart/form-data">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="photo">Product Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>
            <br>
            <label for="details">Product Details:</label>
            <textarea id="details" name="details" required></textarea>
            <br>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
            <br>
            <input type="submit" value="Add Product">
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
