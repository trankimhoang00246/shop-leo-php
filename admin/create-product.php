<?php
// include database connection
include '../config/database.php';
$con = connectdb();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                $query = "INSERT INTO products SET title=:title, description=:description, price=:price, category=:category, image=:image";
                $stmt = $con->prepare($query);

                // Sanitize and bind the parameters
                $title = htmlspecialchars(strip_tags($_POST['title']));
                $description = htmlspecialchars(strip_tags($_POST['description']));
                $price = htmlspecialchars(strip_tags($_POST['price']));
                $category = htmlspecialchars(strip_tags($_POST['category']));
                $image = htmlspecialchars(strip_tags($_POST['image']));

                // Bind the parameters
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':description', $description);
                $stmt->bindParam(':price', $price);
                $stmt->bindParam(':category', $category);
                $stmt->bindParam(':image', $image);

                // Execute the query
                if ($stmt->execute()) {
                    echo "<div class='alert alert-success'>Product added successfully.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Unable to add product.</div>";
                }
            } catch (PDOException $exception) {
                die('ERROR: ' . $exception->getMessage());
            }
}

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h2>Add Product</h2>
    <!-- Add Product Form -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <!-- Your other form fields -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>

            <?php
            $query = "SELECT * FROM category";
            $stmt = $con->prepare($query);
            $stmt->execute();
            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>

            <select class="form-select" id="category" name="category" required>
                <option value="">Select Category</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>

    <!-- Back to Product List Link -->
    <a href="index.php" class="btn btn-secondary mt-3">Back to Product List</a>
</div>

</body>
</html>
