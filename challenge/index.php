<?php
include 'db.php';

if (isset($_POST['add_product'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

}
if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM products WHERE id=$id");
}
if (isset($_POST['edit_product'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $stmt = $conn->prepare("UPDATE products SET $title=?, $description=?, $quantity=?, $price=?, WHERE id=?");
    $stmt->bind_param("$title, $description, $quantity, $price, $id");
    $stmt->execute();
    $stmt->close();
}
$result = $conn->query("SELECT * FROM products");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
</head>
<body>
    <h1>Product Management</h1>
    <h3>Add Product</h3>
    <form action="" method="POST">
        <input type="text" name="title" placeholder="title" required>
        <textarea name="description" placeholder="Description"></textarea>
        <input type="number" name="quantity" placeholder="Quantity" required>
        <input type="number" name="price" placeholder="Price" required>
        <button type="submit" name="add_product">Add Product</button>
    </form>

    <h3>Product List</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>

</body>
</html>