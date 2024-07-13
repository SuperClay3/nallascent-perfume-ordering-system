<?php
include 'connect.php'; // Make sure this file includes database connection

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $new_stock = $_POST['new_stock'];

    $query = "UPDATE products SET stock = $new_stock WHERE id = $product_id";
    if(mysqli_query($conn, $query)) {
        echo "Stock updated successfully.";
    } else {
        echo "Error updating stock: " . mysqli_error($conn);
    }
}
?>
