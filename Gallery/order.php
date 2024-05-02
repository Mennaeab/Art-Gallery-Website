<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon">
</head>
<body>
<header>
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
</header>
<h1 class="inquiry">Your art piece inquiry</h1>
<p class="inquiry-p">Thank you for your interest in our exclusive art collection. Please note that our artworks are highly sought after and are subject to a queue system due to their rarity and value. Upon submitting your order form, your inquiry will be carefully reviewed. Potential buyers will be contacted via email to provide further details regarding the availability and acquisition process. We appreciate your patience and understanding as we strive to accommodate every collector with personalized attention. For any immediate questions, feel free to reach out to us directly.</p>
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
    // Handle connection error (e.g., exit script, display error message)
    exit;
}

if (isset($_GET['item_id'])) {
    $item_id = $_GET['item_id'];
    $sql = "SELECT name, description, price, img, artist FROM pieces WHERE id = :item_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':item_id', $item_id);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $item = $stmt->fetch();
        // Display the item details
        echo '<h2 class="wanted-item-title">' . $item['name'] . '</h2>';
        echo '<p class="wanted-item-description">' . $item['description'] . '</p>';
        echo '<p class="wanted-item-price">Price: $' . $item['price'] . '</p>';
        echo '<p class="wanted-item-artist">Artist: ' . $item['artist'] . '</p>';
        echo '<img class="wanted-item-image" src="' . $item['img'] . '" alt="' . $item['name'] . '">';
    } else {
        echo "Item not found";
    }
} else {
    echo '<div class="centered-message">Please select your art piece from the gallery</div>';
}

?>
<section class="order-form">
<h2>Contact Information</h2>
<form action="process_payment.php" method="POST">
    <input type="hidden" id="item_id" name="item_id" value="<?php echo htmlspecialchars($_GET['item_id'] ?? ''); ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Phone Number:</label>
    <input type="text" id="phone" name="phone" required><br><br>

    <label for="street">Street Address:</label>
    <input type="text" id="street" name="street" required><br><br>

    <label for="city">City:</label>
    <input type="text" id="city" name="city" required><br><br>

    <label for="zip_code">Zip Code:</label>
    <input type="text" id="zip_code" name="zip_code" required><br><br>

    <label for="country">Country:</label>
    <input type="text" id="country" name="country" required><br><br>
<h2>Card Information</h2>
    <label for="card_type">Card Type:</label>
    <select id="card_type" name="card_type">
    <option value="visa">Visa</option>
    <option value="mastercard">Mastercard</option>
    <option value="amex">American Express</option>
    </select>
    <br>
    <label for="card_number">Card Number:</label>
    <input type="text" id="card_number" name="card_number" placeholder="Enter your card number" maxlength="16" required pattern="\d{15-16}">
    <br>
    <label for="exp_date">Expiration Date:</label>
    <input type="text" id="exp_date" name="exp_date" placeholder="MM/YYYY" pattern="^(0[1-9]|1[0-2])\/202[2-9]$" required>
    <br>
    <label for="cvv">CVV:</label>
    <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" maxlength="4" required pattern="\d{3,4}">
    <br>
    <input type="submit" value="Submit Request">
</form>
</section>

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
