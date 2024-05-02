<?php
// Database connection (similar to your previous code)
$servername = "localhost";
$username = "root";
$password = "";
$database = "shoppingcart";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Query to retrieve all pieces from the database
$query = "SELECT * FROM pieces";
$stmt = $conn->prepare($query);
$stmt->execute();
$pieces = $stmt->fetchAll();

// Display pieces in a table
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Manage Pieces</title>
</head>
<body>
<div>
<header>
<section class="header">
    <a href="admin.php" class="logo">GALLERY PIECES</a>
</header>
        <ul class="admin-nav">
            <li><a href="admin.php">Main</a></li>
            <li><a href="manage_orders.php">Manage Orders</a></li>
            <li><a href="manage_pieces.php">Manage Pieces</a></li>
            <li><a href="manage_contact.php">Manage Contact</a></li>
        </ul>
    </div>
    <br><br>
    <h1>Manage Art Pieces</h1>
    <br><br>
    <table class="pieces-table">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
        <th>Artist</th>
        <th>Edit/Delete</th>
    </tr>
    <?php foreach ($pieces as $piece): ?>
        <tr>
            <td><?php echo $piece['id']; ?></td>
            <td><?php echo $piece['name']; ?></td>
            <td><?php echo $piece['description']; ?></td>
            <td><?php echo $piece['price']; ?></td>
            <td><img src="<?php echo $piece['img']; ?>" alt="Piece Image" style="width: 5em; height: 5em;"></td>
            <td><?php echo $piece['artist']; ?></td>
            <td>
            <a class="edit-button" href="edit_pieces.php?id=<?php echo $piece['id']; ?>">Edit</a>
                <form action="delete_pieces.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $piece['id']; ?>">
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<br><br>
    <h1>Add New Piece</h1>
<form action="add_pieces.php" method="POST" enctype="multipart/form-data" class="add-piece-form">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>
    
    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea><br>
    
    <label for="price">Price:</label>
    <input type="text" id="price" name="price" required><br>
    
    <label for="artist">Artist:</label>
    <input type="text" id="artist" name="artist" required><br>
    
    <label for="img">Image:</label>
    <input type="file" id="img" name="img" accept="image/*" required><br>
    
    <button type="submit">Add Piece</button>
</form>
</body>
</html>
