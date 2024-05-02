<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
<main>

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
                <span>A WHISPER OF SOPHISTICATION IN MUTED TONES</span>
                <h3>ECRU</h3>
                <a href="gallery.php" class="btn">Explore</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
                <span>UNIQUE ART BY TALENTED ARTISTS</span>
                <h3>WORLDWIDE ART COLLECTIVES</h3>
                <a href="gallery.php" class="btn">Explore</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
                <span>FIND A PIECE FOR YOUR HOME</span>
                <h3>ENDLESS SERENITY</h3>
                <a href="gallery.php" class="btn">Explore</a>
            </div>
        </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</section>

</main>

<section class="copyright">
<div class="credit"> &copy; all rights reserved! </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
    
</body>
</html>