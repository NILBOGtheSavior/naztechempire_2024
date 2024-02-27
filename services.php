<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Services | Naztech Empire</title>
        <meta name="description" content="">
                <meta charset="utf-8">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon" sizes="16x16">
        <link rel="icon" href="/favicon.ico" type="image/x-icon" sizes="32x32">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="/js/menu.js"></script>
        <script src="/js/overlay.js"></script>
        <script src="/js/code-copy.js"></script>
        <script src="/js/validate.min.js"></script>
        <script src="/js/validator.js"></script>
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/global.css">
        <link rel="stylesheet" href="/css/code.css">
        <?php  
        include("scripts/login.php"); 
        ?>  
        <link rel="stylesheet" href="/css/services.css">
        <script src="js/slideshow.js"></script>
    </head>
    <body>
        <div class="slim">
            <?php require 'scripts/session.php'; ?>
<header class="blur">
    <a href="/index.php" id="logo"><img src="/img/logo.svg" alt=""></a>
    <nav>
        <a href="/index.php">Home</a>
        <a href="/software.php">Software</a>
        <!-- <a href="/downloads.html">Downloads</a> -->
        <!-- <a href="#">Videos</a> -->
        <a href="/blog.php">Blog</a>
        <a href="/services.php">Services</a>
    </nav>
    <div id="account_info">
        <?php if ($_SESSION["username"]): ?>
            <small><a href="account.php"><?= $_SESSION["username"]; ?></a></small>
            <a onclick="toggleMenu('account_menu');"><img src="/img/icons/account.png" alt=""></a>
        <?php else: ?>
            <small><a onclick="openOverlay('login')">Login</a></small>
            <a>|</a>
            <small><a onclick="openOverlay('signup')">Sign Up</a></small>
        <?php endif; ?>
    </div>
    <div id="hamburger" onclick="toggleMenu('hamburger_menu');">
        <div class="bun"></div>
        <div class="bun"></div>
        <div class="bun"></div>
    </div>
</header>
<div id="hamburger_menu" class="blur">
    <a href="/index.php">Home</a>
    <a href="/software.php">Software</a>
    <!-- <a href="/downloads.html">Downloads</a> -->
    <!-- <a href="#">Videos</a> -->
    <a href="/blog.php">Blog</a>
    <a href="/services.php">Services</a>
</div>
<div id="account_menu" class="blur">
    <a href="/account.php">My Account</a>
    <a href="scripts/logout.php">Logout</a>
</div>
<section id="overlay"></section>
        </div>
        <main>
            <div id="hero">
                <div id="hero_image"></div>
                <div id="hero_text">
                    <h1>Services</h1>
                </div>
            </div>
            <section>
                <p>Explore our services here and discover a diverse range of offerings, including web development and graphic design. Delve into our portfolio for a glimpse of the quality and creativity we bring to each project.</p>
                <!-- partners section -->
            </section>
            <section>
                <h2>Web Development</h2>
                <a href="http://mamalulus.naztechempire.com/index.php" class="site" style="background-image: url(img/services/websites/mamalulus.png);">
                    <div class="container"><div></div></div>
                    <div class="logo"></div>
                </a>
                <h2>Graphic Design</h2>

                <h2>Technological Consultation</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, laboriosam dicta! Non quas minima voluptatibus veniam, reiciendis provident velit amet consequatur omnis fuga. Modi vero, impedit veniam tempora maxime at optio. Nisi fugit, quibusdam minima corrupti tempora in modi alias.</p>
            </section>
        </main>
        <footer>
    <div class="directories">
        <span id="leg">
            <p>Naztech Empire &copy; 2024</p>
        </span>
        <span>
            <h4>Site Map</h4>
            <a href="index.php"><p>Home</p></a>
            <a href="software.php"><p>Software</p></a>
            <!-- <a href="downloads.html"><p>Downloads</p></a> -->
            <!-- <a href="#"><p>Videos</p></a> -->
            <a href="blog.php"><p>Blog</p></a>
            <a href="services.php"><p>Services</p></a>
        </span>
        <span>
            <h4>Social</h4>
            <a href="https://www.instagram.com/naztechmedia/"><img src="/img/icons/icons8-instagram.svg" alt=""></a>
            <a href="https://github.com/NILBOGtheSavior"><img src="/img/icons/icons8-github.svg" alt=""></a>
            <a href="https://www.youtube.com/channel/UCFLmlQDTB47XnFYeJE_Pe4Q"><img src="/img/icons/icons8-youtube.svg" alt=""></a>
            <small>
                <a href="#"><p><u>Terms and Conditions</u></p></a>
                <a href="#"><p><u>Privacy Policy</u></p></a>
            </small>
            
        </span>
    </div>
</footer>
    </body>
</html>