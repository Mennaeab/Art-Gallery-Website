<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "shoppingcart";

// Create a PDO instance to connect to the database
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the piece ID from the URL parameter
    $piece_id = $_GET['id'];

    // Retrieve form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $img = $_POST['img']; // Assuming you are updating the image URL
    $artist = $_POST['artist']; // Assuming you have an artist field

    // Update the piece record in the database
    $sql = "UPDATE pieces SET name = :name, description = :description, price = :price, img = :img, artist = :artist WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':img', $img);
    $stmt->bindParam(':artist', $artist);
    $stmt->bindParam(':id', $piece_id);

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Redirect to manage_pieces.php after successful update
        header("Location: manage_pieces.php");
        exit;
    } else {
        echo "Error updating piece.";
    }
}

// Retrieve the piece details from the database based on the piece ID in the URL
if (isset($_GET['id'])) {
    $piece_id = $_GET['id'];
    $sql = "SELECT * FROM pieces WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $piece_id);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $piece = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        echo "Piece not found.";
        exit;
    }
} else {
    echo "Piece ID not provided.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Edit Piece</title>
</head>
<body>
    <h2>Edit Piece</h2>
    <form action="" method="POST" class="edit-piece-form">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $piece['name']; ?>" required><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required><?php echo $piece['description']; ?></textarea><br>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="<?php echo $piece['price']; ?>" required><br>
        <label for="img">Image URL:</label>
        <input type="text" id="img" name="img" value="<?php echo $piece['img']; ?>" required><br>
        <label for="artist">Artist:</label>
        <input type="text" id="artist" name="artist" value="<?php echo $piece['artist']; ?>" required><br>
        <button type="submit">Update Piece</button>
    </form>
</body>
</html>
