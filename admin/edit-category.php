<?php
include '../auth.php';
requireLogin();  // Yêu cầu đăng nhập cho tất cả các trang admin
requireAdminRole();  // Yêu cầu quyền admin (role = 0)
?>

<?php
include '../config/database.php';
$con = connectdb();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = htmlspecialchars(strip_tags($_POST['id']));
        $name = htmlspecialchars(strip_tags($_POST['name']));

        $updateQuery = "UPDATE category SET name = :name WHERE id = :id";
        $updateStmt = $con->prepare($updateQuery);
        $updateStmt->bindParam(':name', $name);
        $updateStmt->bindParam(':id', $id);

        if ($updateStmt->execute()) {
            echo "<div class='alert alert-success'>Category updated successfully.</div>";
            header("Location: category.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Unable to update category.</div>";
        }
    }
} else {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = htmlspecialchars(strip_tags($_GET['id']));

        $query = "SELECT * FROM category WHERE id = :id";
        $stmt = $con->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $category = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            echo "<div class='alert alert-danger'>Category not found.</div>";
            exit();
        }
    } else {
        echo "<div class='alert alert-danger'>Category ID is missing.</div>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Edit Category</h2>

        <!-- Form for editing category -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input type="hidden" name="id" value="<?php echo $category['id']; ?>">

            <div class="mb-3">
                <label for="name" class="form-label">Category Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $category['name']; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Category</button>
            <a href="category.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
