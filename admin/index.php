<?php
// include database connection
include '../config/database.php';

// Define the number of products per page
$productsPerPage = 10;

// Get the current page number from the URL, default to 1 if not set
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the offset for the SQL query
$offset = ($page - 1) * $productsPerPage;

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h2 class="mt-2 mb-2">Product List</h2>

    <a href="create.php" class="btn btn-primary mt-2 mb-2">Add Products</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Title</th>
                <th>Price</th>
                <th>Category</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

        <?php
        try {
            // select limited data based on pagination
            $query = "SELECT * FROM products LIMIT :limit OFFSET :offset";
            $stmt = $con->prepare($query);
            $stmt->bindParam(':limit', $productsPerPage, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();

            // fetch all rows as associative array
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Check if there are any rows
            if ($result) {
                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['category'] . "</td>";
                    echo "<td><img src='" . $row['image'] . "' alt='Product Image' style='width: 50px; height: 50px;'></td>";
                    
                    // Actions column
                    echo "<td>
                            <a href='#' class='btn btn-info'>View</a>
                            <a href='#' class='btn btn-warning'>Edit</a>
                            <a href='#' class='btn btn-danger'>Delete</a>
                          </td>";
                          
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No products found.</td></tr>";
            }
        } catch (PDOException $exception) {
            die('ERROR: ' . $exception->getMessage());
        }
        ?>

        </tbody>
    </table>

    <!-- Pagination -->
    <ul class="pagination">
        <?php
        // Count total number of products
        $query = "SELECT COUNT(*) as total FROM products";
        $stmt = $con->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $totalProducts = $row['total'];

        // Calculate the total number of pages
        $totalPages = ceil($totalProducts / $productsPerPage);

        // Display pagination links
        for ($i = 1; $i <= $totalPages; $i++) {
            echo "<li class='page-item " . ($page == $i ? 'active' : '') . "'><a class='page-link' href='?page=$i'>$i</a></li>";
        }
        ?>
    </ul>

</div>

</body>
</html>
