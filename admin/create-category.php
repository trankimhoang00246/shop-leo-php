<?php
include '../auth.php';
requireLogin();  // Yêu cầu đăng nhập cho tất cả các trang admin
requireAdminRole();  // Yêu cầu quyền admin (role = 0)
?>

<?php
include '../config/database.php';
$con = connectdb();

// Initialize variables
$name = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $name = htmlspecialchars(strip_tags($_POST['name']));

    // Insert category into the database
    $query = "INSERT INTO category (name) VALUES (:name)";
    $stmt = $con->prepare($query);

    // Bind parameters
    $stmt->bindParam(':name', $name);

    // Execute the query
    if ($stmt->execute()) {
        // Redirect to the category management page after successful insertion
        header("Location: category.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'>Unable to create category.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Create New Category</h2>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name:</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Create Category</button>
            </form>
            <a href="category.php" class="btn btn-secondary mt-3">Back to Category List</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyDEBZMQxQ3N4MzP7O6D2uITP5wOp6b7R" crossorigin="anonymous"></script>

</body>
</html>
