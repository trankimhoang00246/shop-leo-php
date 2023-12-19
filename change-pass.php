<?php
session_start();
include "./config/database.php";
$con = connectdb();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['username'];

    // Lấy thông tin chi tiết của người dùng
    $query = "SELECT * FROM users WHERE username = :username";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Kiểm tra mật khẩu cũ
        if (password_verify($_POST['oldPassword'], $user['pass'])) {
            // Kiểm tra mật khẩu mới và xác nhận mật khẩu mới
            if ($_POST['newPassword'] === $_POST['confirmPassword']) {
                // Đổi mật khẩu
                $newPassword = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
                $queryUpdatePass = "UPDATE users SET pass = :newPassword WHERE username = :username";
                $stmtUpdatePass = $con->prepare($queryUpdatePass);
                $stmtUpdatePass->bindParam(':newPassword', $newPassword);
                $stmtUpdatePass->bindParam(':username', $username);

                if ($stmtUpdatePass->execute()) {
                    echo "Password updated successfully.";
                    header('Location: login.php');
                    exit();
                } else {
                    echo "Error updating password.";
                }
            } else {
                echo "New password and confirm password do not match.";
            }
        } else {
            echo "Incorrect old password.";
        }
    } else {
        echo "User not found.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-primary mb-4">Change Password</h2>
        <form action="change-pass.php" method="post">
            <div class="form-group">
                <label for="oldPassword">Old Password:</label>
                <input type="password" name="oldPassword" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="newPassword">New Password:</label>
                <input type="password" name="newPassword" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirm New Password:</label>
                <input type="password" name="confirmPassword" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Change Password</button>
        </form>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
