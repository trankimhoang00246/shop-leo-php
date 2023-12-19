
<?php
include '../config/database.php';
$con = connectdb();

// Xử lý khi nhấn nút "Create User"
if (isset($_POST['dangki'])) {
    // Xử lý dữ liệu nhập vào (lưu ý: cần thêm kiểm tra dữ liệu và bảo mật hơn)
    $username = htmlspecialchars(strip_tags($_POST['username']));
    $password = htmlspecialchars(strip_tags($_POST['password']));
    $confirm_password = htmlspecialchars(strip_tags($_POST['confirm_password']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $role = isset($_POST['role']) ? intval($_POST['role']) : 0;

    // Kiểm tra mật khẩu và mật khẩu nhập lại
    if ($password !== $confirm_password) {
        echo "<div class='alert alert-danger'>Passwords do not match.</div>";
        exit();
    }

    // Kiểm tra xem username đã tồn tại chưa
    $check_query = "SELECT COUNT(*) as count FROM users WHERE username = :username";
    $check_stmt = $con->prepare($check_query);
    $check_stmt->bindParam(':username', $username);
    $check_stmt->execute();
    $result = $check_stmt->fetch(PDO::FETCH_ASSOC);

    if ($result['count'] > 0) {
        echo "<div class='alert alert-danger'>Username already exists. Please choose another username.</div>";
        exit();
    }

    // Hash mật khẩu trước khi lưu vào database (bảo mật)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Thực hiện truy vấn Insert vào database
    $query = "INSERT INTO users (username, pass, email, role) VALUES (:username, :password, :email, :role)";
    $stmt = $con->prepare($query);

    // Bind parameters
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':role', $role);

    // Thực thi truy vấn
    if ($stmt->execute()) {
        header('location: user.php');
        exit();
    } else {
        echo "<div class='alert alert-danger'>Unable to create user.</div>";
    }
}
?>