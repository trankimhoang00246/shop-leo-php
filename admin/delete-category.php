<?php
include '../auth.php';
requireLogin();  // Yêu cầu đăng nhập cho tất cả các trang admin
requireAdminRole();  // Yêu cầu quyền admin (role = 0)
?>

<?php
include '../config/database.php';
$con = connectdb();

// Check if category ID is set
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Sanitize category ID
    $id = htmlspecialchars(strip_tags($_GET['id']));

    // Delete query
    $query = "DELETE FROM category WHERE id = :id";
    $stmt = $con->prepare($query);

    // Bind parameters
    $stmt->bindParam(':id', $id);

    // Execute the query
    if ($stmt->execute()) {
        // Redirect to the category management page after successful deletion
        header("Location: category.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'>Unable to delete category.</div>";
    }
} else {
    echo "<div class='alert alert-danger'>Category ID is missing.</div>";
}
?>
