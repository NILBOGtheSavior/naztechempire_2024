<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blog | Naztech Empire</title>
        <meta name="description" content="">
                <meta charset="utf-8">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon" sizes="16x16">
        <link rel="icon" href="/favicon.ico" type="image/x-icon" sizes="32x32">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="/js/menu.js"></script>
        <script src="/js/overlay.js"></script>
        <script src="/js/code-copy.js"></script>
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/global.css">
        <link rel="stylesheet" href="/css/code.css">
        <?php  
        include("scripts/login.php"); 
        ?>  
        <link rel="stylesheet" href="css/blog.css">
        <script src="js/slideshow.js"></script>
        <script src="/js/contents.js"></script>
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
                    <h1>Blog</h1>
                </div>
            </div>
            
            <section id="blog_list">
                <div class="blog">
                    
                    <a href="blog_view.php?post=linux_101">
                        <div class="post">
                            <div class="thumbnail" style="background-image: url('/img/blog/linux_101/thumbnail.jpg');"></div>
                            <div class="info">
                                <h6> Jan 15, 2024 </h6>
                                <h4>Linux Series 101: Introduction to Linux <!-- <h5> Nasser Abumariam </h5> --> </h4>
                                <h5>#Linux</h5>
                            </div>
                        </div>
                    </a>
                    
                    <a href="blog_view.php?post=tkinter_gui">
                        <div class="post">
                            <div class="thumbnail" style="background-image: url('/img/blog/tkinter_gui/thumbnail.jpg');"></div>
                            <div class="info">
                                <h6> Jan 08, 2024 </h6>
                                <h4>Using Tkinter to Create GUI Apps in Python <!-- <h5> Nasser Abumariam </h5> --> </h4>
                                <h5>#Software_Development</h5>
                            </div>
                        </div>
                    </a>
                    
                    <a href="blog_view.php?post=creating_this_website">
                        <div class="post">
                            <div class="thumbnail" style="background-image: url('/img/blog/creating_this_website/thumbnail.jpg');"></div>
                            <div class="info">
                                <h6> Jan 01, 2024 </h6>
                                <h4>Streamlined Web Development: Embracing Jekyll for Content Management <!-- <h5> Nasser Abumariam </h5> --> </h4>
                                <h5>#Web_Development</h5>
                            </div>
                        </div>
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