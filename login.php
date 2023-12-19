<?php
session_start();
if(isset($_SESSION['role'])) {
  unset($_SESSION['role']);
  unset($_SESSION['username']);
}

include "./config/database.php";

function checkuser($username, $password)
{
    $con = connectdb();

    // Kiểm tra user có tồn tại trong database không
    $query = "SELECT * FROM users WHERE username = :username";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Nếu user tồn tại, kiểm tra mật khẩu
    if ($user) {
        if (password_verify($password, $user['pass'])) {
            // Mật khẩu hợp lệ, trả về thông tin user
            return $user;
        }
    }

    // Nếu không tìm thấy hoặc mật khẩu không hợp lệ, trả về false
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['pass'];

    $result = checkuser($user, $pass);

    if ($result) {
        $_SESSION['role'] = $result['role'];
        $_SESSION['username'] = $result['username'];

        if ($result['role'] == 1) {
            header('location: admin/index.php');
            exit();
        } else {
            header('location: index.php');
            exit();
        }
    } else {
        $txt_erro = "Username hoặc Password không tồn tại";
        $_SESSION['txt_erro'] = $txt_erro;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Add your CSS links here if needed -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="pass" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <?php
        if (isset($_SESSION['txt_erro'])) {
            echo "<div class='alert alert-danger'>{$_SESSION['txt_erro']}</div>";
            unset($_SESSION['txt_erro']);
        }
        ?>
    </div>
    <!-- Add your JavaScript links here if needed -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
