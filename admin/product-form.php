<?php
$query = "SELECT * FROM category";
$stmt = $con->prepare($query);
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container mt-4 mb-4">
    <h2>Edit Product</h2>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea name="description" class="form-control"><?php echo $row['description']; ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="text" name="price" class="form-control" value="<?php echo $row['price']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category:</label>
                    <select class="form-select" id="category" name="category" required>
                        <option value="">Select Category</option>
                        <?php foreach ($categories as $category): ?>
                            <?php $selected = ($category['id'] == $row['category']) ? 'selected' : ''; ?>
                            <option value="<?php echo $category['id']; ?>" <?php echo $selected; ?>><?php echo $category['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input type="text" name="image" class="form-control" value="<?php echo $row['image']; ?>" required>
                </div>

                <div class="mb-3">
                    <input type="submit" value="Update" class="btn btn-primary">
                    <a href='index.php' class='btn btn-secondary'>Cancel</a>
                </div>
            </form>

</div>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data
    $id = isset($_POST['id']) ? htmlspecialchars(strip_tags($_POST['id'])) : '';
    $title = htmlspecialchars(strip_tags($_POST['title']));
    $description = htmlspecialchars(strip_tags($_POST['description']));
    $price = htmlspecialchars(strip_tags($_POST['price']));
    $category = htmlspecialchars(strip_tags($_POST['category']));
    $image = htmlspecialchars(strip_tags($_POST['image']));

    // Check if all required fields are filled
    if (!empty($id) && !empty($title) && !empty($price) && !empty($category)) {
        try {
            // Update query
            $query = "UPDATE products SET title=:title, description=:description, price=:price, category=:category, image=:image WHERE id=:id";
            $stmt = $con->prepare($query);

            // Bind parameters
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':category', $category);
            $stmt->bindParam(':image', $image);

            // Execute the query
            if ($stmt->execute()) {
                // Redirect to the index page after successful update
                header("Location: index.php");
                exit();
            } else {
                echo "<div class='alert alert-danger'>Unable to update the product.</div>";
            }
        } catch (PDOException $e) {
            echo "<div class='alert alert-danger'>Error: " . $e->getMessage() . "</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>All fields are required.</div>";
    }
}
?>
