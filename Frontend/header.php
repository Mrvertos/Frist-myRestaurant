<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./styles/header.css" />
    </head>
    <body>
        <header id="header">
        <div>

            <a href="index.html" class="header-title">
            <img src="./assets/images/logo.svg" alt="logo" />
            <p class="text-logo">مارکوس</p>
            </a>

        </div>
        
        <!-- Navbar -->
        <nav>

            <div class="navbar">

            <ul class="nav-list">
                <li><a href="index.html">خانه</a></li>
                <li><a href="./menu.html">منو</a></li>
                <li><a href="./weblog.html">وبلاگ</a></li>
                <li><a href="./about.html">درباره ما</a></li>
            </ul>

            </div>

        </nav>

        <div class="header-btn">
            
            <button class="header-btn-call" onclick="number()">
            <i class="fa fa-phone-square" style="font-size: 28px"></i>
            </button>
            
            <a href="./signin.html">
            <button class="header-btn-account">
                <i class='fas fa-user-circle' style='font-size:28px'></i>
            </button>
            </a>

            <button class="header-btn-hamburger">
            <i class='fas fa-th-list' style='font-size:28px'></i>
            </button>

        </div>
        </header>
    </body>
</html>