<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon">
</head>
<body>
    <main>
<section class="header">
    <a href="home.php" class="logo">ECRU GALLERY</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="gallery.php">gallery</a>
        <a href="contact.php">contact</a>
        <a href="order.php" class="fas fa-shopping-bag"></a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<div class="heading" style="background:url(images/header-bg-2.jpg) no-repeat">
    <h1>products</h1>
</div>

<div class="heading-title">
    <h2>OUR LATEST PIECES</h2>
</div>

<?php
// Database connection parameters
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "shoppingcart"; 

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT id, name, description, price, img, artist FROM pieces";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Check if any rows were returned
    if ($stmt->rowCount() > 0) {
        // Output data of each row
        echo '<div class="gallery">';
        while ($row = $stmt->fetch()) {
            // Display each row's data
            echo '<div class="pieces">';
            echo '<img class="gallery-image" src="' . $row["img"] . '" alt="' . $row["name"] . '">';
            echo '<p class="gallery-name">' . $row["name"] . '</p>';
            echo '<p class="gallery-description">' . $row["description"] . '</p>';
            echo '<p class="gallery-price">Price: $' . $row["price"] . '</p>';
            echo '<p class="gallery-artist">Artist: ' . $row["artist"] . '</p>';
            echo '<a href="order.php?item_id=' . $row["id"] . '" class="add-to-cart">Submit a Request</a>';
            echo '</div>';
        }
    } else {
        echo "0 results";
    }
} catch (PDOException $e) {
    // Display error message if connection fails
    echo "Connection failed: " . $e->getMessage();
}

?>

</main>

<footer>

<section class="footer">
    <div class="box-container">
    <div class="box">
            <h3>extra links</h3>
            <a href="faq.php"> <i class="fas fa-angle-right"></i>FAQ</a>
            <a href="privacy_policy.php"> <i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="terms.php"> <i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-envelope"></i> ecru@gallery.com </a>
            <a href="#"> <i class="fas fa-map"></i> Manhattan, NY 01011 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        </div>

    </div>

</section>
<section class="copyright">
<div class="credit"> &copy; all rights reserved! </div>
</section>

</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
    
</body>
</html>