<?php
include '../config/database.php';
$con = connectdb();

// Lấy ID của user cần xóa từ URL
$user_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Kiểm tra xem user có tồn tại không
$check_query = "SELECT * FROM users WHERE idUser = :user_id";
$check_stmt = $con->prepare($check_query);
$check_stmt->bindParam(':user_id', $user_id);
$check_stmt->execute();
$user = $check_stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo "<div class='alert alert-danger'>User not found.</div>";
    exit();
}

// Xử lý khi người dùng xác nhận xóa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $delete_query = "DELETE FROM users WHERE idUser = :user_id";
    $delete_stmt = $con->prepare($delete_query);
    $delete_stmt->bindParam(':user_id', $user_id);

    if ($delete_stmt->execute()) {
        header('location: user.php');
        exit();
    } else {
        echo "<div class='alert alert-danger'>Unable to delete user.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <!-- Add your CSS links here if needed -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script>
        function confirmDelete() {
            return confirm("Bạn có chắc chắn muốn xóa user này không?");
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <h2>Delete User</h2>
        <p>Bạn có chắc chắn muốn xóa user '<?php echo $user['username']; ?>' không?</p>
        <form action="delete-user.php?id=<?php echo $user_id; ?>" method="post">
            <button type="submit" class="btn btn-danger" onclick="return confirmDelete()">Delete User</button>
            <a href='user.php' class='btn btn-secondary'>Cancel</a>
        </form>
    </div>
    <!-- Add your JavaScript links here if needed -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
