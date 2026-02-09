<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>مارکــــوس</title>
        <link rel="stylesheet" href="./styles/header.css" />
        <link rel="stylesheet" href="./styles/footer.css">
    </head>
    <body>
        <header id="header">
        <div>

            <a href="index.php" class="header-title">
            <img src="./assets/images/logo.svg" alt="logo" />
            <p class="text-logo">مارکوس</p>
            </a>

        </div>
        
        <!-- Navbar -->
        <nav>

            <div class="navbar">

            <ul class="nav-list">
                <li><a href="index.php">خانه</a></li>
                <li><a href="./menu.php">منو</a></li>
                <li><a href="./weblog.php">وبلاگ</a></li>
                <li><a href="./about.php">درباره ما</a></li>
            </ul>

            </div>

        </nav>

        <div class="header-btn">

            <a href="./menu_managment.php">
            <button class="header-btn-call" onclick="number()">
            <i class="fa fa-phone-square" style="font-size: 28px"></i>
            </button>
            </a>

            <a href="./usar_managment.php">
            <button class="header-btn-account">
                <i class='fas fa-user-circle' style='font-size:28px'></i>
            </button>
            </a>

            <button class="header-btn-hamburger">
            <i class='fas fa-th-list' style='font-size:28px'></i>
            </button>

        </div>
        </header>
