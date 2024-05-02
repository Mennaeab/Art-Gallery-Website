<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Manage Orders</title>
</head>
<body>
<div>
<header>
<section class="header">
    <a href="admin.php" class="logo">ORDERS</a>
</header>
        <ul class="admin-nav">
            <li><a href="admin.php">Main</a></li>
            <li><a href="manage_orders.php">Manage Orders</a></li>
            <li><a href="manage_pieces.php">Manage Pieces</a></li>
            <li><a href="manage_contact.php">Manage Contact</a></li>
        </ul>
    </div>
    <br><br>
</body>
</html>

<?php
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

// Retrieve orders from the database
$stmt = $conn->query("SELECT * FROM orders");
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display orders in a table
echo "<h2>Manage Orders</h2>";
echo "<br><br>";
echo "<table border='1' class='pieces-table'>";
echo "<tr>
<th>Order Number</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Street</th>
<th>City</th>
<th>ZipCode</th>
<th>Country</th>
<th>Item ID</th>
<th>Tracking Number</th>
<th>Actions</th></tr>";
foreach ($orders as $order) {
    echo "<tr>";
    echo "<td>{$order['order_number']}</td>";
    echo "<td>{$order['name']}</td>";
    echo "<td>{$order['email']}</td>";
    echo "<td>{$order['phone']}</td>";
    echo "<td>{$order['street']}</td>";
    echo "<td>{$order['city']}</td>";
    echo "<td>{$order['zip_code']}</td>";
    echo "<td>{$order['country']}</td>";
    echo "<td>{$order['item_id']}</td>";
    echo "<td>{$order['tracking_number']}</td>";
    echo "<td>
            <form action='update_order.php' method='post'>
                <input type='hidden' name='order_number' value='{$order['order_number']}'>
                <select name='status'>
                    <option value='Waiting for Fulfillment'>Waiting for Fulfillment</option>
                    <option value='Shipped'>Shipped</option>
                    <option value='Rejected'>Rejected</option>
                </select>
                <input type='text' name='tracking_number' placeholder='Tracking Number'>
                <button type='submit'>Update</button>
            </form>
          </td>";
    echo "</tr>";
}
echo "</table>";

// Close the database connection
$conn = null;
?>
