<?php
include '../config/database.php';
$con = connectdb();

// Lấy ID của user cần sửa từ URL
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

// Lấy thông tin của user
$username = $user['username'];
$email = $user['email'];
$userRole = $user['role'];

// Xử lý khi nhấn nút "Update User"
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Xử lý dữ liệu nhập vào (lưu ý: cần thêm kiểm tra dữ liệu và bảo mật hơn)
    $username = htmlspecialchars(strip_tags($_POST['username']));
    $password = htmlspecialchars(strip_tags($_POST['password']));
    $confirm_password = htmlspecialchars(strip_tags($_POST['confirmPassword']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $role = isset($_POST['role']) ? intval($_POST['role']) : 0;

    // Kiểm tra mật khẩu và mật khẩu nhập lại
    if ($password !== $confirm_password) {
        echo "<div class='alert alert-danger'>Passwords do not match.</div>";
        exit();
    }

    // Hash mật khẩu trước khi lưu vào database (bảo mật)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Thực hiện truy vấn Update vào database
    $query = "UPDATE users SET username=:username, pass=:password, email=:email, role=:role WHERE idUser=:user_id";
    $stmt = $con->prepare($query);

    // Bind parameters
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':role', $role);
    $stmt->bindParam(':user_id', $user_id);

    // Thực thi truy vấn
    if ($stmt->execute()) {
        header('location: user.php');
        exit();
    } else {
        echo "<div class='alert alert-danger'>Unable to update user.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <!-- Add your CSS links here if needed -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit User</h2>
        <form action="edit-user.php?id=<?php echo $user_id; ?>" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" name="confirmPassword" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="role">Role:</label>
                <select class="form-control" name="role" required>
                    <option value="0" <?php echo ($userRole == 0) ? 'selected' : ''; ?>>User</option>
                    <option value="1" <?php echo ($userRole == 1) ? 'selected' : ''; ?>>Admin</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update User</button>
            <a href='user.php' class='btn btn-secondary'>Cancel</a>
        </form>
    </div>
    <!-- Add your JavaScript links here if needed -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
