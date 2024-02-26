<?php
require 'connect.php';

try {


    $stmt = $pdo->query('SELECT * FROM gallery_items_3');
    $galleryItems = $stmt->fetchAll();

 
    $mainImage = current(array_filter($galleryItems, function ($item) {
        return $item['is_main'];
    }));

 
    if (!$mainImage && count($galleryItems) > 0) {
        $mainImage = $galleryItems[0];
    }

} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mykyta Buria</title>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;900&family=Rethink+Sans:wght@400;500;600;800&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#050505">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/ScrollTrigger.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/TextPlugin.min.js"></script>  
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/EasePack.min.js"></script>
    <script defer src="js/main.js"></script>
    <script async src="https://kit.fontawesome.com/273d23d9c6.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
    <!--navbar-->
        <div class="logo">
            <div class="logotype">
            <img src="images/logo-portofolio.svg" alt="Main Logo">
            </div>
        </div>
        <div class="hamburger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav>
            <ul class="nav-links ">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">Portfolio</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>

    <div class="container-gallery">
    <div class="small-images">
        <?php foreach ($galleryItems as $item): ?>
            <img src="<?php echo htmlspecialchars($item['image_path']); ?>" class="image" alt="Image" onclick="changeImage(this, '<?php echo htmlspecialchars($item['title']); ?>', '<?php echo htmlspecialchars($item['description']); ?>')">
        <?php endforeach; ?>
    </div>
    <div class="main-image">
        <!-- Display the main image -->
        <?php if ($mainImage): ?>
            <img src="<?php echo htmlspecialchars($mainImage['image_path']); ?>" alt="Main Image" class="current-image">
        <?php endif; ?>
    </div>
    <div class="image-info">
        <?php if ($mainImage): ?>
            <h1 class="image-title"><?php echo htmlspecialchars($mainImage['title']); ?></h1>
            <p class="image-description"><?php echo htmlspecialchars($mainImage['description']); ?></p>
        <?php endif; ?>
    </div>
</div>

    </main>



    <footer>
    <div class="footer-content">
        <h2><span>&lt;</span>Let's work Together<span>&gt;</span></h2>
        <p><a href="contact.html">Say hello →</a></p>
        <div class="footer-links">
            <a href="#">LinkedIn</a> /
            <a href="#">GitHub</a> /
            <a href="#">Twitter</a> /
            <a href="#">Facebook</a>
        </div>
        <p class="email">nikitaburia68@gmail.com</p>
        <div class="footer-bottom">
            <p class="name-bottom">&copy; Mykyta Buria</p>
            <div class="social-icons">
                <a href="https://twitter.com/n_buria"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://github.com/l1ght000"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/mykyta-buria-428205250/?locale=en_US"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://twitter.com/n_buria"><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
    </div>
</footer>
    </body>
    </html>