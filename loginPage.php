<?php
include 'connection.php';
//   session_start();
//   $_SESSION['email']=$_POST['email'];
//   $_SESSION['pass']=$_POST['password'];
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];


    $query = "SELECT * from adminpass where email = '$email' and password='$pass' ";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {

        header("Location: admindashboard.php");
    } else {
        echo "fgd";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <?php include 'header.php'; ?>
</head>
<!-- <header id="masthead" class="site-header header-sticky">
    <div id="tophead">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="tophead-contact">
                        <div class="phone">
                            <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+212 70 09 67 935">+212 70 09 67 935</a>
                        </div>
                        <div class="seperator">|</div>

                        <div class="email">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:oualidmansour16@gmail.com">oualidmansour16@gmail.com</a>
                        </div>
                    </div>
                    <div class="tophead-right">
                        <ul class="tophead-social">
                            <li><a target="_blank" href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container masthead-container">
        <div class="row">
            <div class="col-sm-2 col-xs-12">
                <div class="site-branding">
                    <a class="dark-logo" href="https://izdiharfitness.club/">
                        <img width="435" height="185" src="https://izdiharfitness.club/wp-content/uploads/2022/04/LKJHFn-e1649414201668.png" alt="Izdihar Fitness Club">
                    </a>
                    <a class="light-logo" href="https://izdiharfitness.club/">
                        <img width="414" height="212" src="https://izdiharfitness.club/wp-content/uploads/2022/04/LKJHFb-e1649414081196.png" alt="Izdihar Fitness Club">
                    </a>
                </div>
            </div>
            <div class="col-sm-9 col-xs-12">
                <div id="site-navigation" class="main-navigation">
                    <nav class="menu-main-menu-container">
                        <ul id="menu-main-menu" class="menu">
                            <li id="menu-item-2134" class="mega-menu hide-header menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-2134"><a href="http://izdiharfitness.club" aria-current="page">Home</a></li>
                            <li id="menu-item-1963" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1963"><a href="https://izdiharfitness.club/about-us/">About</a></li>
                            <li id="menu-item-3102" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3102"><a href="https://izdiharfitness.club/home/">PLANNING</a></li>
                            <li id="menu-item-3106" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3106"><a href="https://izdiharfitness.club/home-6/">TARIFS</a></li>
                            <li id="menu-item-3024" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3024"><a href="https://izdiharfitness.club/trainer-slider-4/">piscine</a></li>
                            <li id="menu-item-1814" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1814"><a href="https://izdiharfitness.club/shop/">SHOP</a></li>
                            <li id="menu-item-1937" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1937"><a href="https://izdiharfitness.club/contact-us/">Contact</a></li>
                            <li id="menu-item-3124" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3124"><a href="https://izdiharfitness.club/cta-signup/">Signup</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-sm-1 col-xs-12">
                <div class="header-icon-area">
                    <div class="cart-icon-area">
                        <a href="https://izdiharfitness.club/cart/"><i class="fa fa-shopping-cart"></i> <span class="cart-icon-num">0</span>
                        </a>
                        <div class="cart-icon-products">
                            <div class="widget woocommerce widget_shopping_cart">
                                <h2 class="widgettitle">Cart</h2>
                                <div class="widget_shopping_cart_content">

                                    <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-icon-seperator">|</div>
                    <div class="search-box-area">
                        <div class="search-box">
                            <form role="search" method="get" action="https://izdiharfitness.club/">
                                <input type="text" name="s" class="search-text" placeholder="Search Here......" required="">
                                <a href="#" class="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </form>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</header> -->

<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 firstDiv">
                <img src="images/bodyBuilder2.png" width="100%" alt="">
            </div>
            <div class="col-md-2 "></div>

            <!-- ----------login-mechnism-- -->
            <div class="col-md-6 loginPage text-center">

                <div class="loginP">
                    <img src="images/loginLogo.gif" width="45%">
                    <h1>Login</h1>

                    <form method="POST" action="loginPage.php" style="width:400px; margin: auto;">

                        <div class="form-group row">

                            <div class="col-lg-8" style="margin: auto; margin-top: 20px;">
                                <input type="text" class="form-control bg-light" id="emailid" name="email" placeholder="Enter Email">

                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-lg-8" style="margin: auto; margin-top: 20px;">
                                <input type="password" class="form-control bg-light" id="emailid" name="password" placeholder="Enter Password">

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-md-5 col-md-7" style="margin: auto; margin-top: 20px;">
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>


                    </form>

                </div>



            </div>


</body>

</html>