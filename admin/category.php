<?php
include '../auth.php';
requireLogin();  // Yêu cầu đăng nhập cho tất cả các trang admin
requireAdminRole();  // Yêu cầu quyền admin (role = 0)
?>

<?php 
include 'navbar.php';
?>

<?php
include '../config/database.php';
$con = connectdb();

$searchKeyword = isset($_GET['search']) ? htmlspecialchars(strip_tags($_GET['search'])) : '';

if (!empty($searchKeyword)) {
    $query = "SELECT * FROM category WHERE name LIKE :searchKeyword";
    $stmt = $con->prepare($query);
    $stmt->bindValue(':searchKeyword', '%' . $searchKeyword . '%', PDO::PARAM_STR);
} else {
    $query = "SELECT * FROM category";
    $stmt = $con->prepare($query);
}
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Management</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Category Management</h2>
            <a href="create-category.php" class="btn btn-primary mb-3">Add New Category</a>

            <form action="category.php" method="get" class="mb-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search products..." name="search">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $category): ?>
                        <tr>
                            <td><?php echo $category['id']; ?></td>
                            <td><?php echo $category['name']; ?></td>
                            <td>
                                <a href="edit-category.php?id=<?php echo $category['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="#" class='btn btn-danger' onclick="confirmDelete(<?php echo $category['id']; ?>, '<?php echo $category['name']; ?>')">Delete</a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyDEBZMQxQ3N4MzP7O6D2uITP5wOp6b7R" crossorigin="anonymous"></script>

<script>
function confirmDelete(categoryId, categoryName) {
    var confirmDelete = confirm("Are you sure you want to delete the category '" + categoryName + "'?");

    if (confirmDelete) {
        window.location.href = 'delete-category.php?id=' + categoryId;
    }
}
</script>
</body>
</html>
