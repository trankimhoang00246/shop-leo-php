<?php
include '../auth.php';
requireLogin();  // Yêu cầu đăng nhập cho tất cả các trang admin
requireAdminRole();  // Yêu cầu quyền admin (role = 0)
?>

<?php
// include database connection
include '../config/database.php';
$con = connectdb();

// check if product id is set
if(isset($_GET['id'])){
    $id = $_GET['id'];

    // select product based on the product id
    $query = "SELECT * FROM products WHERE id = :id";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // check if product exists
    if($stmt->rowCount() > 0){
        // product exists, proceed with deletion
        try {
            $query = "DELETE FROM products WHERE id = :id";
            $stmt = $con->prepare($query);
            $stmt->bindParam(':id', $id);

            if($stmt->execute()){
                // deletion successful
                echo "<script>
                        alert('Bạn có chắc chắn muốn xóa sản phẩm này không?');
                        window.location.href = 'index.php';
                     </script>";
            } else {
                // deletion failed
                echo "<script>
                        alert('Xóa sản phẩm thất bại. Vui lòng thử lại.');
                        window.location.href = 'index.php';
                     </script>";
            }
        } catch (PDOException $exception) {
            die('ERROR: ' . $exception->getMessage());
        }
    } else {
        // product does not exist
        echo "<script>
                alert('Sản phẩm không tồn tại.');
                window.location.href = 'index.php';
             </script>";
    }
} else {
    // id parameter not set
    echo "<script>
            alert('Thiếu thông tin sản phẩm.');
            window.location.href = 'index.php';
         </script>";
}
?>
