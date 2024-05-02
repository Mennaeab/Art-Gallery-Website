<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
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
<div class="heading" style="background:url(images/header-bg-3.jpeg) no-repeat">
    <h1>Contact Us</h1>
</div>
<section class="contact">

<h1 class="heading-title">Leave a Message</h1>
<p class="contact-p">WE WILL BE IN TOUCH WITH YOU SHORTLY</p>

<form action="contact_form.php" method="post" class="contact-form">

<div class="flex">
    <div class="inputBox">
        <span>name :</span>
        <input type="text" placeholder="enter your name" name="name">
    </div>

    <div class="inputBox">
        <span>email :</span>
        <input type="email" placeholder="enter your email" name="email">
    </div>

    <div class="inputBox">
        <span>phone :</span>
        <input type="number" placeholder="enter your number" name="phone">
    </div>

    <div class="inputBox">
        <span>address :</span>
        <input type="text" placeholder="enter your address" name="address">
    </div>

    <div class="inputBox">
        <span>order # :</span>
        <input type="number" placeholder="enter your order number" name="order_number">
    </div>

    <div class="inputBox">
        <span>Message :</span>
        <input type="text" placeholder="Write your message here" name="message">
    </div>
</div>

<input type="submit" value="submit" class="btn" name="send">

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

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
    
</body>
</html>