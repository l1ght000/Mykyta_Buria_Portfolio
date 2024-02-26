<?php
require 'connect.php';
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


    <main class="contact-container">
        <div class="contact-form-container">
            <h1>Contact Us</h1>
            <form id="contactForm" class="contact-form" action="sendmail.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send</button>
            </form>
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