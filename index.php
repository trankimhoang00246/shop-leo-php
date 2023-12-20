<?php
include './config/database.php';
$con = connectdb();

$categoryName = isset($_GET['category']) ? urldecode($_GET['category']) : '';

if ($categoryName) {
// Truy vấn để lấy tổng số sản phẩm theo danh mục
    $queryTotal = "SELECT COUNT(*) as total FROM products p
                JOIN category c ON p.category = c.id
                WHERE c.name = :categoryName";
    $stmtTotal = $con->prepare($queryTotal);
    $stmtTotal->bindParam(':categoryName', $categoryName);
    $stmtTotal->execute();
    $totalProducts = $stmtTotal->fetch(PDO::FETCH_ASSOC)['total'];

    // Số sản phẩm mỗi trang
    $productsPerPage = 6;

    // Tính toán tổng số trang
    $totalPages = ceil($totalProducts / $productsPerPage);

    // Lấy trang hiện tại từ URL, mặc định là trang 1 nếu không có
    $currentpage = isset($_GET['page']) ? $_GET['page'] : 1;

    // Tính offset cho truy vấn SQL
    $offset = ($currentpage - 1) * $productsPerPage;

    // Truy vấn sản phẩm theo trang
    $query = "SELECT * FROM products p
            JOIN category c ON p.category = c.id
            WHERE c.name = :categoryName
            LIMIT :limit OFFSET :offset";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':categoryName', $categoryName);
    $stmt->bindParam(':limit', $productsPerPage, PDO::PARAM_INT);
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
}else {
    $productsPerPage = 6;

    // Calculate the total number of products
    $queryTotal = "SELECT COUNT(*) as total FROM products";
    $stmtTotal = $con->prepare($queryTotal);
    $stmtTotal->execute();
    $totalProducts = $stmtTotal->fetch(PDO::FETCH_ASSOC)['total'];

    // Calculate the total number of pages
    $totalPages = ceil($totalProducts / $productsPerPage);

    // Get the current page number
    $currentpage = isset($_GET['page']) ? $_GET['page'] : 1;

    // Calculate the offset for the SQL query
    $offset = ($currentpage - 1) * $productsPerPage;

    // Select products with pagination
    $query = "SELECT * FROM products LIMIT :limit OFFSET :offset";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':limit', $productsPerPage, PDO::PARAM_INT);
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
}

$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Leo</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="main">
        <div class="banner">
        </div>
        <div class="menu">
            <a href="index.php">Trang chủ</a>
            <a href="">Giới thiệu</a>
            <a href="">Dịch vụ</a>
            <a href="">Sản phẩm</a>
            <a href="">Liên hệ</a>
        </div>
        <div class="clear">

        </div>
        <div class="trai">
            <ul>

            <?php
            $query = "SELECT * FROM category";
            $stmt = $con->prepare($query);
            $stmt->execute();
            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>

                <li><a href="#">Bóng đá</a>                
                    <ul>
                        <?php foreach ($categories as $category): ?>
                            <li><a href="index.php?category=<?php echo urlencode($category['name']); ?>"><?php echo $category['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li><a href="#">Phụ kiện</a>           
                </li>
                <li><a href="#">Khác</a>    
                </li>
            </ul>
        </div>
        <div class="phai">
            <div class="slide"><img src="./assets/img/slides/4.jpg" width="770px" alt=""></div>
            <div class="sanpham">
                <h1>Sản phẩm nổi bật</h1>

                <?php foreach ($products as $product) : ?>
                    <div class="box-san-pham">
                        <img src="<?php echo $product['image']; ?>" alt="">
                        <p class="ten-san-pham"><?php echo $product['title']; ?></p>
                        <p class="gia"><?php echo $product['price']; ?>đ</p>
                        <p><img src="./assets/img/sao.jpg" width="100px" alt=""></p>
                        <button>Mua Hàng</button>
                    </div>
                <?php endforeach; ?>

            </div>

            <div class="pagination">
                <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                    <a href="?category=<?php echo urlencode($categoryName); ?>&page=<?php echo $i; ?>" <?php echo ($i == $currentpage) ? 'class="active"' : ''; ?>><?php echo $i; ?></a>
                <?php endfor; ?>
            </div>
        </div>
        <div class="clear">
            
        </div>
        <div class="footer">
            <div class="menuduoi">
                <a href="#">Trang chủ</a>
                <a href="#">Giới thiệu</a>
                <a href="#">Dịch vụ</a>
                <a href="#">Sản phẩm</a>
                <a href="#">Liên hệ</a>
            </div>
            <p align="center">&copy:2014 Designrd by <a href="http://www.thayphet.net/" target="_blank">Templates Perfect</a></p>
        </div>
    </div>
</body>
</html>