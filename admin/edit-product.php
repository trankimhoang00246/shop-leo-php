<?php
include '../config/database.php';
$con = connectdb();

// Check if ID parameter is set in the URL
if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
    $isEditMode = true;

    // Fetch product details from the database
    $query = "SELECT * FROM products WHERE id = :id";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the product exists
    if ($row) {
        // Display the form
        include 'product-form.php';
    } else {
        echo "<div class='alert alert-danger'>Product not found.</div>";
    }
} else {
    $isEditMode = false;
    // Display the form
    include 'product-form.php';
}
?>