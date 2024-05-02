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
// Query to retrieve contact information from the database
$query = "SELECT * FROM contact";
$stmt = $conn->prepare($query);
$stmt->execute();
$contacts = $stmt->fetchAll();

// Display contact information in a table
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Manage Contact</title>
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
    <h1>Contact Forms</h1>
    <section class="pieces-table">
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Order #</th>
            <th>Message</th>
            
        </tr>
        <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?php echo $contact['name']; ?></td>
                <td><?php echo $contact['email']; ?></td>
                <td><?php echo $contact['phone']; ?></td>
                <td><?php echo $contact['address']; ?></td>
                <td><?php echo $contact['order_number']; ?></td>
                <td><?php echo $contact['message']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    </section>
</body>
</html>
