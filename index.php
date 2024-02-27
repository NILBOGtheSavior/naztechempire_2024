<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Naztech Empire</title>
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
        <link rel="stylesheet" href="css/index.css">
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
                    <h1>Welcome to Naztech Empire</h1>
                </div>
            </div>
            <section>
                <a href="/software.html"><h2>Software</h2><img src="/img/icons/link.png" alt=""></a>
                <div id="applications">
                    
                    <a href="/software/001-3d-printer-utility.html" class="tile" style="background-image: url('/img/software/3d_printer_utility/hero.jpg');">
                        <div class="tile_wrap">
                            <h3>3D Printer Utility</h3>
                            <img src="img/software/3d_printer_utility/logo.png">
                            <p>Connect to your 3D printer via serial. This lightweight desktop application allows you to effortlessly send and receive G-Code commands, monitor your printer's status, and even capture timelapses of your prints.</p>
                        </div>
                    </a>
                    
                    <a href="/software/002-image-optimizer.html" class="tile" style="background-image: url('/img/software/image_optimizer/hero.jpg');">
                        <div class="tile_wrap">
                            <h3>Image Optimizer</h3>
                            <img src="img/software/image_optimizer/logo.png">
                            <p>Locally optimize images for your website. Whether you prefer a one-at-a-time approach or need to process images in bulk, this tool ensures seamless optimization for improved website performance.</p>
                        </div>
                    </a>
                    
                    <!-- <a href="#" class="tile" style="background-image: url(img/projects/flashcards.jpg);">
                        <div class="tile_wrap">
                            <h3>Flashcards</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam laudantium, dolores cumque exercitationem quae sunt!</p>
                        </div>
                    </a>
                    <a href="#" class="tile" style="background-image: url(img/projects/workout.jpg);">
                        <div class="tile_wrap">
                            <h3>PixelPulse</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam laudantium, dolores cumque exercitationem quae sunt!</p>
                        </div>
                    </a> -->
                </div>
            </section>
            <section>
                <a href="/downloads.html"><h2>Downloads</h2><img src="/img/icons/link.png" alt=""></a>
                <div id="downloads">
                    <div class="panel text">
                        <p><b>Find the available downloads on this page to access valuable resources and media.</b></p>
                        <p>Explore the downloads section to discover a variety of materials, including informative documents, guides, and multimedia content designed to enhance your experience. Whether you're looking for wallpapers, artworks, or 3D printable STL files, you'll find a diverse range of resources to enrich your journey.</p>
                        <p>Download and enjoy the wealth of information curated for you.</p>
                    </div>
                    <div class="panel slideshow" id="slideshow">
                        <div class="image" data-index="0" data-view="1" onclick="imgSelect(this);">
                            <img src="img/artwork/slideshow/09.jpg" alt="">
                        </div>
                        <div class="image" data-index="1" data-view="2" onclick="imgSelect(this);">
                            <img src="img/artwork/slideshow/07.jpg" alt="">
                        </div>
                        <div class="image" data-index="2" data-view="3" onclick="imgSelect(this);">
                            <img src="img/artwork/slideshow/04.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section style="display: none;">
                <a><h2>Videos</h2><img src="/img/icons/link.png" alt=""></a>
                <div class="videos">
                    <div class="video">
                        <iframe src="https://www.youtube-nocookie.com/embed/Tp8tZgN1BFY?si=DVgSCg9fJ7Q2gY6W" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="panel">
                        <p>Welcome to the Videos section, where we bring technology to life! Dive into engaging content covering the latest in tech trends, insightful product reviews, and tutorials that simplify complex concepts. Explore our collection of videos that showcase innovative technology solutions, unveil exciting product launches, and offer valuable insights into the digital world. Join us on this journey of exploration and stay tuned for regular updates on cutting-edge technology and our featured products.</p>
                    </div>
                </div>
            </section>
            <section>
                <a href="/blog.html"><h2>Blog</h2><img src="/img/icons/link.png" alt=""></a>
                <div class="blog">
                    
                    <a href="/blog_view.php?post=linux_101">
                        <figure>
                            <div style="background-image: url('/img/blog/linux_101/thumbnail.jpg');"></div>
                            <figcaption>Linux Series 101: Introduction to Linux</figcaption>
                        </figure>
                    </a>
                    
                    <a href="/blog_view.php?post=tkinter_gui">
                        <figure>
                            <div style="background-image: url('/img/blog/tkinter_gui/thumbnail.jpg');"></div>
                            <figcaption>Using Tkinter to Create GUI Apps in Python</figcaption>
                        </figure>
                    </a>
                    
                    <a href="/blog_view.php?post=creating_this_website">
                        <figure>
                            <div style="background-image: url('/img/blog/creating_this_website/thumbnail.jpg');"></div>
                            <figcaption>Streamlined Web Development: Embracing Jekyll for Content Management</figcaption>
                        </figure>
                    </a>
                    
                </div>
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