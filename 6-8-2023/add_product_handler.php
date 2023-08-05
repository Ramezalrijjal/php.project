
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['name'];
    $product_details = $_POST['details'];
    $product_date = $_POST['date'];

    // Check if a file was uploaded
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $file_tmp = $_FILES['photo']['tmp_name'];
        $file_name = $_FILES['photo']['name'];
        $path='images/';
        $full_path=$path .basename($file_name);
        move_uploaded_file($file_tmp,$full_path);
        // $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

        // Check if the uploaded file is an image
    //     $allowed_ext = array("jpg", "jpeg", "png", "gif");
    //     if (in_array(strtolower($file_ext), $allowed_ext)) {
    //         $file_path = "uploads/" . $file_name;
    //         move_uploaded_file($file_tmp, $file_path);
    //     } else {
    //         die("Error: Please upload a valid image file.");
    //     }
    // } else {
    //     die("Error: Please upload a product photo.");
    // 
}

    $new_product = array(
        'name' => $product_name,
        'photo' => $full_path,
        'details' => $product_details,
        'date' => $product_date,
    );

    // Initialize products array if it doesn't exist
    if (!isset($_SESSION['products'])) {
        $_SESSION['products'] = array();
    }
    $_SESSION['products'][] =$new_product ;
    // Add the new product to the products array
    // array_push($_SESSION['products'], $new_product);
    header("Location: view_products.php");
    exit();
}
?>
