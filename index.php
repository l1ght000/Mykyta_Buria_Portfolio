<?php
require 'connect.php';
//select all projects
$stmt = $pdo->query('SELECT * FROM projects');
$projects = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mykyta Buria</title>
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/main.css">
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
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js"></script>
    <script defer src="./js/main.js"></script>
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
                <li><a href="#projects" class="portfolio-btn">Portfolio</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
<main>
        

<div class="landing-page col-span-4 m-col-span-12 l-col-span-12 xl-col-span-12">
            <h1 class="landing-title col-start-1 col-end-5 m-col-start-1 m-col-end-5 l-col-start-2 l-col-end-8">
                <span>Hi, my name is <span class="orange">Mykyta Buria.</span></span><br>
                <span class="colorbox"></span>
                <span class="hi">I'm</span>
                <span class="text"></span>
                <span class="cursor">_</span>
            
            
            </h1>

                <div class="avatar-container col-start-1 col-end-5 m-col-start-6 m-col-end-9 l-col-start-9 l-col-end-12">
                    <img class="avatar" src="images/avatar.png" alt="my-photo">
                    <div class="random-circle col-start-1 col-end-5 m-col-start-9 m-col-end-12 l-col-start-9 l-col-end-12"></div>
                </div>
                
                
                <div class="social-links col-start-1 col-end-5 m-col-start-1 m-col-end-3 l-col-start-1 l-col-end-3">
                <ul class="nav-links">
                <li><a href="https://twitter.com/n_buria"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/in/mykyta-buria-428205250/?locale=en_US"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="https://github.com/l1ght000"><i class="fa-brands fa-github"></i></a></li>
            </ul>
            </div>

            <div class="header-btns col-start-1 col-end-5 m-col-start-1 m-col-end-5 l-col-start-1 l-col-end-5">
                <a class="btn btn-black" href="contact.php">let's get a deal</a>
                <a class="btn btn-white" href="assets/MykytaBuriaResume.pdf" download="My CV document">download CV</a>
            </div>


        </div>
        

        <!-- About Me section -->
        <div class="about-section grid-con col-span-4 m-col-span-12 l-col-span-12" id="about-me">
    
    <div class="col-start-1 col-end-4 m-col-start-1 m-col-end-4 l-col-start-1 l-col-end-4">
        <h1 class="aboutme-title">&lt;About Me&gt;</h1>
    </div>

    <div class="beginning col-start-1 col-end-4 m-col-start-1 m-col-end-6 l-col-start-1 l-col-end-6">
        <h2 class="reveal-type">Beginning</h2>
        <p class="reveal-type">My journey into the world of coding started back in school, where I first discovered the magic of turning lines of code into something real and functional. It was like a new language, full of endless possibilities, and I was instantly hooked. This fascination with coding led me to make a big decision: I would pursue a career in this field, where each day offers a chance to create and innovate.</p>
        <div class="about-img col-end-4 m-col-start-1 m-col-end-5 l-col-start-1 l-col-end-5">
            <img class="abt-img" src="images/about-me-1.1.jpg" alt="about-me-1">
        </div>
    </div>

    <div class="first-steps col-start-1 col-end-4 m-col-start-8 m-col-end-12 l-col-start-9 l-col-end-12">
        <div class="about-img col-start-1 col-end-4 m-col-start-10 m-col-end-12 l-col-start-10 l-col-end-12">
            <img class="abt-img" src="images/about-me-2.jpg" alt="about-me-2">
        </div>
        <h2 class="reveal-type">First Steps</h2>
        <p class="reveal-type">Fast forward to 2022, I found myself in Canada, embarking on my college adventure. Here, I'm not just learning about coding; I'm living it. College has been an eye-opener with its diverse environment and hands-on approach to education. Every class, project, and interaction adds a new layer to my understanding of web development. As a student, it's exciting to see my skills grow, and I'm eager to see where this path will take me. Sure, it's challenging at times, but that's what makes it worthwhile!</p>
    </div>
</div>

<!--My projects section-->
<section class="my-projects" id="projects">
  <h1 class="title-projects">&lt;My Projects&gt;</h1>

  <?php foreach ($projects as $index => $project): ?>
    <div class="project <?= ($index % 2 === 0) ? 'project-layout-normal' : 'project-layout-reverse' ?>">
      <div class="project-content">
        <h2 class="reveal-type"><?= htmlspecialchars($project['Title']) ?></h2>
        <p class="reveal-type"><?= htmlspecialchars($project['Description']) ?></p>
        <p class="reveal-type built-with">Built With: <?= htmlspecialchars($project['BuiltWith']) ?></p>
        <div class="button-container">
          <a href="<?= htmlspecialchars($project['ProjectLink']) ?>" class="btn btn-black">View Project</a>
          <a href="<?= htmlspecialchars($project['CodeLink']) ?>" class="btn btn-white">View Code</a>
        </div>
      </div>
      <div class="project-image">
        <img src="<?= htmlspecialchars($project['Image']) ?>" alt="<?= htmlspecialchars($project['Title']) ?>">
      </div>
    </div>
  <?php endforeach; ?>
</section>




<div class="skill-section grid-con col-span-full m-col-span-12 l-col-span-6">

      
        <div class="skill-text col-span-full">
            <h1 class="reveal-type" id="skills-title">&lt;My Skills&gt;</h1>
            <p class="reveal-type">Web Designer with experience in different applications, languages, and frameworks. I'm always looking for new challenges to tackle.</p>
            <p class="reveal-type">As a Web Designer with experience in a variety of applications, languages, and frameworks, I thrive on diving into new challenges and expanding my technical repertoire. My skill set spans from front-end technologies like HTML5, CSS3, and JavaScript, to mastering design tools such as Adobe Creative Suite. I am proficient in responsive design principles and have a keen eye for UI/UX, ensuring seamless user experiences across all devices.</p>
        </div>

  
        <div class="col-span-full m-col-span-6 l-col-span-6 skill-box">
          
            <div class="skill-container">
    <div class="skill-title-container">
        <img src="images/html.svg" alt="HTML Logo" class="skill-logo">
        <p class="skill-percentage">70%</p>
    </div>
    <div class="skill-bar">
        <div class="skill-progress" style="width: 70%;"></div>
    </div>
</div>

            <div class="skill-container">
    <div class="skill-title-container">
        <img src="images/css.svg" alt="CSS Logo" class="skill-logo">
        <p class="skill-percentage">50%</p>
    </div>
    <div class="skill-bar">
        <div class="skill-progress" style="width: 50%;"></div>
    </div>
</div>

            <div class="skill-container">
    <div class="skill-title-container">
        <img src="images/js.svg" alt="JS Logo" class="skill-logo">
        <p class="skill-percentage">25%</p>
    </div>
    <div class="skill-bar">
        <div class="skill-progress" style="width: 25%;"></div>
    </div>
</div>

            <div class="skill-container">
    <div class="skill-title-container">
        <img src="images/php.svg" alt="PHP Logo" class="skill-logo">
        <p class="skill-percentage">10%</p>
    </div>
    <div class="skill-bar">
        <div class="skill-progress" style="width: 10%;"></div>
    </div>
</div>

           

        </div>

        <div class="col-span-full m-col-span-6 l-col-span-6 skill-box">
         
            <div class="skill-container">
    <div class="skill-title-container">
        <img src="images/xd.svg" alt="XD Logo" class="skill-logo">
        <p class="skill-percentage">60%</p>
    </div>
    <div class="skill-bar">
        <div class="skill-progress" style="width: 60%;"></div>
    </div>
</div>

            <div class="skill-container">
    <div class="skill-title-container">
        <img src="images/ps.svg" alt="PS Logo" class="skill-logo">
        <p class="skill-percentage">40%</p>
    </div>
    <div class="skill-bar">
        <div class="skill-progress" style="width: 40%;"></div>
    </div>
</div>

            <div class="skill-container">
    <div class="skill-title-container">
        <img src="images/ai.svg" alt="AI Logo" class="skill-logo">
        <p class="skill-percentage">60%</p>
    </div>
    <div class="skill-bar">
        <div class="skill-progress" style="width: 60%;"></div>
    </div>
</div>

          

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