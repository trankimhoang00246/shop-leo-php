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

$query = "SELECT * FROM users";
$stmt = $con->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>User Management</h2>
        <a href="create-user.php" class="btn btn-primary mb-3">Add New User</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user['idUser']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['role'] == 1 ? 'Admin' : 'User'; ?></td>
                        <td>
                            <a href="edit-user.php?id=<?php echo $user['idUser']; ?>" class='btn btn-warning'>Edit</a>
                            <a href="delete-user.php?id=<?php echo $user['idUser']; ?>" class='btn btn-danger' onclick='return confirmDelete()'>Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
