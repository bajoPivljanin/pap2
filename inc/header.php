<?php 
    include "functions/init.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Shop</title>
        <script src="https://kit.fontawesome.com/9310e1148a.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Grape+Nuts&family=Kanit&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>
<body>
    <header>
            <div class="left-line"></div>
            <div class="nav">
                <div class="left-nav">
                    <a href="index.php">home</a>
                    <a href="about.php">about</a>
                </div>
                <div class="logo">
                    <a href="index.php">logo</a>
                </div>
                <div class="right-nav">
                    <a href="shop.php">shop</a>
                    <a href="#">contact</a>
                </div>
            </div>
            <div class="right-line"></div>
            <i class="fa-solid fa-bars" id="menuopen"></i>
            <i class="fa-solid fa-x" id="menuclose"></i>
        </header>
        <div class="nav-v2">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <ul>
                            <li><a href="#">T-SHIRT</a></li>
                            <li><a href="#">PANTS</a></li>
                            <li><a href="#">HATS</a></li>
                            <li><a href="sale.php">sale</a></li>
                            <li><a href="#">clothing</a></li>
                            <li><a href="brands.php">brands</a></li>
                            <?php if(!isset($_SESSION['email'])):?>
                                <li><a id="red" href="login.php">Login</a></li>
                                <li><a id="red" href="register.php">Register</a></li>
                            <?php else:?>
                                <li><a id="red" href="logout.php">Logout</a></li>
                                <li><a id="red" href="profile.php">Profile</a></li>
                            <?php endif;?>
                            
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <a href="shoppingbag.php" id="shoppingb">SHOPPING BAG</a>
                    </div>
                </div>
            </div>
        </div>
