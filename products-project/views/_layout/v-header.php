<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/theme/css/bootstrap.css">
    <title>NK Shop</title>
    <link rel="icon" href="./public/theme/img/logo.jpg">
</head>
<body style="padding-top: 70px;" >
    <header>
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand text-dark h1" href="#"><div style="letter-spacing: 2px; ">
                    <span class="h1"><strong>NK SHOP</strong></span>
                    <img src="./public/theme/img/nk.png" style="height: 60px;">
                </div></a>
                <div class="d-flex">
                    <ul class="navbar-nav">
                        <li class="nav-item h4">
                            <a class="
                                nav-link
                                <?php if($page == 'index') {
                                echo htmlspecialchars('active');
                                } ?>
                                " href="./">Home</a>
                        </li>
                        <li class="nav-item h4">
                            <a class="
                                nav-link
                                <?php if($page == 'all-products-page') {
                                echo htmlspecialchars('active');
                                } ?>
                                " 
                                href="./all-products-page.php"
                                >
                                Products
                            </a>
                        </li>
                        <li class="nav-item h4">
                            <a class="
                                nav-link
                                <?php if($page == 'about-us-page') {
                                echo htmlspecialchars('active');
                                } ?>
                                " 
                                href="./about-us-page.php"
                                >
                                About us
                            </a>
                        </li>
                        <li class="nav-item h4">
                            <a class="
                                nav-link
                                <?php if($page == 'contact-page') {
                                echo htmlspecialchars('active');
                                } ?>
                                " 
                                href="./contact-page.php"
                                >
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mr-auto">
                    <a class="nav-link position-relative" href="./shopping-cart-page.php">
                        <img src="./public/theme/img/cart.png" style="height: 50px;">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <?php 
                            if(!empty($_SESSION['cart'])) {
                                echo count($_SESSION['cart']);
                            } else {
                                echo 0;
                            }
                            ?>
                        </span>
                    </a>
                </div>

                <div class="mr-auto">
                
                            <?php 
                            if(!empty($_SESSION['user'])) {?>
                            <a href="./add-file-page.php">
                                <img src="./public/theme/img/add-item.png" height="40px;">
                            </a>
                            <a href="./profile-page.php">
                                <img src="./public/theme/img/user.png" height="40px;">
                            </a>
                            <a class="btn btn-secondary btn active" role="button" aria-pressed="true" href="./log-out-page.php">
                                <?php echo "Log out";?>
                            </a>
                                
                                
                                
                                
                            <?php
                            } else {?>
                            <a class="btn btn-secondary btn active" role="button" aria-pressed="true" href="./log-in-page.php">
                                <?php echo "Log in";?>
                            </a>
                            <?php } ?>
                </div>

            </div>
        </nav>


              
    
    </header>
  